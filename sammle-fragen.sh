#!/usr/bin/env bash
# sammle-fragen.sh - Sammelt die Einstiegsfragen aller Uebungen in fragen.md
#
# Quellen (je Uebung eine Datei, sortiert nach Kapitel und Uebungsnummer):
#   exercises/chapterNN/<uebung>/_fragen.md      (Uebung als Ordner)
#   exercises/chapterNN/<uebung>.fragen.md       (Uebung als Einzeldatei)
# Die Kapitelueberschrift wird aus der ersten Zeile der Kapitel-README
# abgeleitet ("# Uebungsaufgaben zu Kapitel 3: HTML" -> "# Kapitel 3 – HTML").
set -euo pipefail

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
EXERCISES="$SCRIPT_DIR/exercises"
ZIEL="$SCRIPT_DIR/fragen.md"

{
    cat <<'EOF'
# Einstiegsfragen zu den Übungen

Zu Beginn jeder Übung werden diese Fragen gemeinsam beantwortet. Sie
fragen das Grundwissen ab, das für die konkreten TODOs der jeweiligen
Übung gebraucht wird. Zu jeder Frage gibt es eine kurze erwartete
Antwort (zum Aufklappen), damit die Fragen auch ohne Antworten gezeigt
werden können.
EOF

    for kapitel in "$EXERCISES"/chapter[0-9][0-9]; do
        # Fragen-Dateien des Kapitels in Uebungsreihenfolge ermitteln
        dateien=()
        for eintrag in "$kapitel"/[0-9][0-9]_*; do
            if [ -d "$eintrag" ] && [ -f "$eintrag/_fragen.md" ]; then
                dateien+=("$eintrag/_fragen.md")
            elif [ -f "$eintrag" ] && [[ "$eintrag" == *.fragen.md ]]; then
                dateien+=("$eintrag")
            fi
        done
        [ ${#dateien[@]} -eq 0 ] && continue

        nummer="$(basename "$kapitel")"
        nummer="${nummer#chapter}"
        nummer="${nummer#0}"
        titel="$(head -n 1 "$kapitel/README.md" | sed 's/^.*: *//')"

        printf '\n---\n\n# Kapitel %s – %s\n' "$nummer" "$titel"
        for datei in "${dateien[@]}"; do
            printf '\n'
            cat "$datei"
        done
    done
} > "$ZIEL"

echo "Fragen gesammelt in: $ZIEL"
