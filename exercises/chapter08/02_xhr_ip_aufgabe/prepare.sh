#!/usr/bin/env bash
# prepare.sh - Vorbereitung fuer "02_xhr_ip_aufgabe"
# Duenner Wrapper, der die gemeinsame Kopierlogik in scripts/prepare_base.sh aufruft.
SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
"$SCRIPT_DIR/../../scripts/prepare_base.sh" "$SCRIPT_DIR"
