#!/usr/bin/env bash
# prepare.sh - Vorbereitung fuer "06_fortgeschrittene_selektoren_aufgabe"
# Duenner Wrapper, der die gemeinsame Kopierlogik in scripts/prepare_base.sh aufruft.
SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
"$SCRIPT_DIR/../../scripts/prepare_base.sh" "$SCRIPT_DIR" "$SCRIPT_DIR/../../chapter04/05_display_und_flexbox_aufgabe"
