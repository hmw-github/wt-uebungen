#!/usr/bin/env bash
# prepare_base.sh - gemeinsame Kopierlogik fuer alle prepare.sh-Wrapper der
# Aufgabenordner. Wird NICHT direkt aufgerufen, sondern von den einzelnen
# prepare.sh-Dateien mit den passenden Pfaden parametrisiert.
#
# Verwendung: prepare_base.sh <ziel-verzeichnis> [<vorgaenger-verzeichnis>]
#
# Uebernimmt automatisch die bereits geloesten Dateien aus dem Vorgaenger-
# Verzeichnis in das Ziel-Verzeichnis. Enthaelt eine Zieldatei bereits neue
# TODO-Markierungen ("TODO <Nr>:") und ist die passende Vorgaenger-Datei
# fertig geloest, wird die neue Vorgabedatei zu "<name>.org.<extension>"
# gesichert und die geloeste Vorgaenger-Datei an ihrer Stelle eingesetzt.
# So bleibt die neue Aufgabenstellung als Referenz erhalten und man arbeitet
# trotzdem auf Basis der eigenen Loesung weiter. Dateien, die es im
# Vorgaenger nicht gibt (z.B. wegen Umbenennung wie index.html -> index.php),
# werden nicht neu angelegt. Enthaelt die Vorgaenger-Datei selbst noch offene
# TODOs, wird sie ebenfalls NICHT kopiert (Schutz gegen zu fruehes Ausfuehren).
# Wird kein Vorgaenger-Verzeichnis uebergeben, ist die Aufgabe eigenstaendig -
# es wird nur ein Hinweis ausgegeben.
set -euo pipefail

if [ $# -lt 1 ]; then
    echo "Verwendung: $0 <ziel-verzeichnis> [<vorgaenger-verzeichnis>]" >&2
    exit 1
fi

DEST_DIR="$(cd "$1" && pwd)"
PREV_DIR_RAW="${2:-}"

if [ -z "$PREV_DIR_RAW" ]; then
    echo "Diese Aufgabe ist eigenstaendig (kein Teil des Webportfolio-Projekts)."
    echo "Keine Vorbereitung noetig - direkt in der Vorgabedatei loslegen."
    exit 0
fi

if [ ! -d "$PREV_DIR_RAW" ]; then
    echo "FEHLER: Vorgaenger-Aufgabe nicht gefunden unter:"
    echo "  $PREV_DIR_RAW"
    echo "Bitte zuerst die Vorgaenger-Aufgabe vollstaendig bearbeiten."
    exit 1
fi
PREV_DIR="$(cd "$PREV_DIR_RAW" && pwd)"

echo "Uebernehme geloeste Dateien aus: $PREV_DIR"
echo "Ziel: $DEST_DIR"
echo

kopiert=0
gesichert=0
uebersprungen=0

while IFS= read -r -d '' destfile; do
    rel="${destfile#"$DEST_DIR"/}"
    case "$rel" in
        prepare.sh|prepare.cmd|_todos.md|*.todos.md|*.prepare.sh|*.prepare.cmd|*.org.*)
            continue
            ;;
    esac

    prevfile="$PREV_DIR/$rel"

    if grep -aqE "TODO [0-9]+:" "$destfile" 2>/dev/null; then
        if [ ! -f "$prevfile" ]; then
            echo "  [neu]      $rel (enthaelt neue TODOs - Vorgabedatei bleibt erhalten)"
            uebersprungen=$((uebersprungen+1))
            continue
        fi
        if grep -aqE "TODO [0-9]+:" "$prevfile" 2>/dev/null; then
            echo "  [WARNUNG]  $rel: Vorgaenger-Datei ist noch nicht fertig bearbeitet (enthaelt noch TODOs) - wird NICHT kopiert"
            uebersprungen=$((uebersprungen+1))
            continue
        fi

        if [[ "$rel" == *.* ]]; then
            orgrel="${rel%.*}.org.${rel##*.}"
        else
            orgrel="${rel}.org"
        fi
        mv "$destfile" "$DEST_DIR/$orgrel"
        cp "$prevfile" "$destfile"
        echo "  [gesichert] $rel -> $orgrel (neue Vorgabedatei mit TODOs gesichert)"
        echo "  [kopiert]   $rel (geloeste Fassung aus Vorgaenger uebernommen)"
        kopiert=$((kopiert+1))
        gesichert=$((gesichert+1))
        continue
    fi

    if [ -f "$prevfile" ]; then
        if grep -aqE "TODO [0-9]+:" "$prevfile" 2>/dev/null; then
            echo "  [WARNUNG]  $rel: Vorgaenger-Datei ist noch nicht fertig bearbeitet (enthaelt noch TODOs) - wird NICHT kopiert"
            uebersprungen=$((uebersprungen+1))
            continue
        fi
        cp "$prevfile" "$destfile"
        echo "  [kopiert]  $rel"
        kopiert=$((kopiert+1))
    fi
done < <(find "$DEST_DIR" -type f -print0)

echo
echo "Fertig: $kopiert Datei(en) aus der eigenen Loesung uebernommen (davon $gesichert mit gesicherter neuer Vorgabedatei als *.org.*), $uebersprungen Datei(en) unveraendert gelassen (neue TODOs bzw. Vorgaenger-Datei noch nicht fertig)."
echo "Weiter geht's mit README.md und _todos.md dieser Aufgabe."
