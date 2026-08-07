#!/usr/bin/env bash
# prepare.sh - Vorbereitung fuer "04_dom_werte_lesen_aufgabe"
# Duenner Wrapper, der die gemeinsame Kopierlogik in scripts/prepare_base.sh aufruft.
SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
"$SCRIPT_DIR/../../scripts/prepare_base.sh" "$SCRIPT_DIR" "$SCRIPT_DIR/../../chapter05/01_einbinden_aufgabe"
