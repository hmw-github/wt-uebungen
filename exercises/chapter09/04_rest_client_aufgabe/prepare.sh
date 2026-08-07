#!/usr/bin/env bash
# prepare.sh - Vorbereitung fuer "04_rest_client_aufgabe"
# Duenner Wrapper, der die gemeinsame Kopierlogik in scripts/prepare_base.sh aufruft.
SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
"$SCRIPT_DIR/../../scripts/prepare_base.sh" "$SCRIPT_DIR" "$SCRIPT_DIR/../../chapter09/03_rest_crud_api_aufgabe"
