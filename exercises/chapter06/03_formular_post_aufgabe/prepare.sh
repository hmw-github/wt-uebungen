#!/usr/bin/env bash
# prepare.sh - Vorbereitung fuer "03_formular_post_aufgabe"
#
# Uebernimmt automatisch die bereits geloesten Dateien der Vorgaenger-Aufgabe
# "../../chapter05/05_dom_manipulation_aufgabe" in diese Aufgabe. Dateien, die in dieser Aufgabe bereits neue
# TODO-Markierungen ("TODO <Nr>:") enthalten, werden dabei NICHT ueberschrieben,
# damit die neue Aufgabenstellung erhalten bleibt. Dateien, die es in der
# Vorgaenger-Aufgabe nicht gibt (z.B. wegen Umbenennung wie index.html ->
# index.php), werden nicht neu angelegt.
set -euo pipefail

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
PREV_DIR="$SCRIPT_DIR/../../chapter05/05_dom_manipulation_aufgabe"

if [ ! -d "$PREV_DIR" ]; then
    echo "FEHLER: Vorgaenger-Aufgabe nicht gefunden unter:"
    echo "  $PREV_DIR"
    echo "Bitte zuerst die Vorgaenger-Aufgabe vollstaendig bearbeiten."
    exit 1
fi

echo "Uebernehme geloeste Dateien aus: $PREV_DIR"
echo "Ziel: $SCRIPT_DIR"
echo

kopiert=0
uebersprungen=0

while IFS= read -r -d '' destfile; do
    rel="${destfile#"$SCRIPT_DIR"/}"
    case "$rel" in
        prepare.sh|prepare.cmd|_todos.md|*.todos.md)
            continue
            ;;
    esac

    if grep -aqE "TODO [0-9]+:" "$destfile" 2>/dev/null; then
        echo "  [neu]      $rel (enthaelt neue TODOs - Vorgabedatei bleibt erhalten)"
        uebersprungen=$((uebersprungen+1))
        continue
    fi

    prevfile="$PREV_DIR/$rel"
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
done < <(find "$SCRIPT_DIR" -type f -print0)

echo
echo "Fertig: $kopiert Datei(en) aus der eigenen Loesung uebernommen, $uebersprungen Datei(en) unveraendert gelassen (neue TODOs bzw. Vorgaenger-Datei noch nicht fertig)."
echo "Weiter geht's mit README.md und _todos.md dieser Aufgabe."
