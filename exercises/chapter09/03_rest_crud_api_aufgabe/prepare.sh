#!/usr/bin/env bash
# prepare.sh - Vorbereitung fuer "03_rest_crud_api_aufgabe"
# Duenner Wrapper, der die gemeinsame Kopierlogik in scripts/prepare_base.sh aufruft.
SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
"$SCRIPT_DIR/../../scripts/prepare_base.sh" "$SCRIPT_DIR" "$SCRIPT_DIR/../../chapter09/02_rest_get_api_aufgabe"
