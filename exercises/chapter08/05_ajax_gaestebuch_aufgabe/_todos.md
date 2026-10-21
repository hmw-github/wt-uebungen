# TODOs – Übung 5: Gästebuch mit AJAX

## gaestebuch/GaestebuchView.php
Die Hilfsfunktionen `fillList()`, `clearList()` und `createListElement()` sind bereits fertig vorgegeben.

1. TODO 1: Direkt nach dem Laden der Seite holt `onLoad()` die bisherigen Einträge im Hintergrund von `api.php`. Gesendet wird per POST der JSON-Text `{"action": "list"}`. Die Einträge erscheinen anschließend in der Liste. Im Netzwerk-Reiter der Entwicklertools ist genau eine solche Anfrage zu sehen.
2. TODO 2: Ein Klick auf "Speichern" ruft `addGaestebuchEintrag()` auf. Der Text aus dem Eingabefeld (`id="gbNachrichtFeld"`) geht als `{"action": "save", "message": "..."}` an `api.php`. Danach zeigt die Liste den aktuellen Stand inklusive des neuen Eintrags, ohne dass die Seite neu geladen wird. Ist das Eingabefeld leer, erscheint stattdessen eine Meldung (Hinweisfenster), und es wird keine Anfrage gesendet.

## gaestebuch/api.php
Das Protokoll (Request `{"action": ...}`, Antwort `{"entries": [...]}`) ist im Kopfkommentar der Datei beschrieben.

1. TODO 1: Bei `"save"` mit nicht leerer `"message"` landet die Nachricht als neuer, zeitgestempelter Eintrag im Gästebuch (über das vorhandene Model `Gaestebuch`). Bei leerer Nachricht und bei `"list"` ändert sich am Gästebuch nichts.
2. TODO 2: Die Antwort ist als JSON gekennzeichnet (Content-Type `application/json`) und enthält in jedem Fall alle aktuellen Einträge, z.B. `{"entries": ["12:00:00 21.07.2026 - Hallo"]}`.

## Weitere Dateien ohne TODO-Marker
Die übrigen Dateien (u.a. `gaestebuch/Controller.php`, `gaestebuch/Gaestebuch.php`, `gaestebuch/index.php`, `js/begruessung.js`, `js/main.js`, `kontakt.php`, `kontakt-verarbeiten.php`) sind laut Diff gegenüber der Vorgänger-Teilübung (`chapter07/03_modal_aufgabe/`, da `04_fetch_post_async_await_aufgabe/` keine vergleichbare Portfolio-Struktur besitzt) unverändert bzw. bereits als Lösung vorgegeben und enthalten keine TODOs.

- (kein TODO-Marker) Verschieben der "Container-Vergleich"-Demo: In `index.php` (Startseite) wurde der Abschnitt mit den `container`/`container-fluid`-Demo-Boxen entfernt und stattdessen auf die neue Seite `technik-spielwiese.php` verschoben (dort per Kopfkommentar explizit als Aufräummaßnahme erklärt). Passend dazu wurden die zugehörigen CSS-Regeln `.beispiel-container`/`.beispiel-fluid` aus `css/index.css` entfernt und in die neue Datei `css/technik-spielwiese.css` verschoben. Dies ist keine Bearbeitungsaufgabe, sondern bereits fertige Strukturänderung.
- (kein TODO-Marker) `projekte.html` und `rechtliches/impressum.html`: In `projekte.html` ist die Modal-Übung aus Kapitel 7 bereits vollständig gelöst enthalten (Kopfkommentar "LÖSUNGSVORSCHLAG"), `impressum.html` unterscheidet sich nur im Kapitel-Titel des Kopfkommentars. Beide sind unverändertes/bereits gelöstes Boilerplate ohne Bezug zu den AJAX-TODOs dieser Teilübung.
- (kein TODO-Marker) `css/style.css`: Enthält gegenüber der Vorgänger-Version zusätzliche, bereits fertige CSS-Regeln (u.a. `.no-text-decoration`, `main`-Breite, `details summary`, `.github-badge`, `table`/`thead`-Formatierung, `.projekte-table-link-col`). Diese Klassen werden von keiner Datei dieser Teilübung referenziert – vermutlich Vorbereitung für spätere Kapitel/Übungen und für Übung 5 nicht relevant.
