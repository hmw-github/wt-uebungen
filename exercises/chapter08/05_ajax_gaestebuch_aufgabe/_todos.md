# TODOs – Übung 5: Gästebuch mit AJAX

## gaestebuch/GaestebuchView.php
1. TODO 1: `onLoad()` implementieren. Die Funktion soll per `fetch()` eine POST-Anfrage mit dem JSON-Body `{"action": "list"}` an `api.php` senden, die Antwort als JSON auslesen (`response.json()`) und mit `fillList(antwort.entries)` die Liste befüllen.
2. TODO 2: `addGaestebuchEintrag()` implementieren. Die Funktion soll den Wert des Eingabefelds (`id="gbNachrichtFeld"`) auslesen. Ist der Wert leer, soll ein `alert()` erscheinen und die Funktion abgebrochen werden (`return`). Andernfalls soll per `fetch()` eine POST-Anfrage mit dem JSON-Body `{"action": "save", "message": ...}` an `api.php` gesendet werden; aus der (aktualisierten) Antwort soll die Liste erneut mit `fillList(antwort.entries)` aufgebaut werden.

## gaestebuch/api.php
1. TODO 1: Den JSON-Request-Body dekodieren (`file_get_contents("php://input")`, `json_decode(..., true)`) und das Feld "action" auswerten: bei "save" prüfen, ob "message" gesetzt und nicht leer ist, und in diesem Fall `$gaestebuch->hinzufuegen($message)` aufrufen (bei leerer Nachricht nichts tun); bei "list" (und nach "save") nichts weiter tun.
2. TODO 2: Den Response-Header auf `"Content-Type: application/json"` setzen und mit `echo json_encode(["entries" => ...])` die aktuellen Einträge zurückgeben (`$gaestebuch->alleEintraege()`).

## Weitere Dateien ohne TODO-Marker
Die übrigen Dateien (u.a. `gaestebuch/Controller.php`, `gaestebuch/Gaestebuch.php`, `gaestebuch/index.php`, `js/begruessung.js`, `js/main.js`, `kontakt.php`, `kontakt-verarbeiten.php`) sind laut Diff gegenüber der Vorgänger-Teilübung (`chapter07/03_modal_aufgabe/`, da `04_fetch_post_async_await_aufgabe/` keine vergleichbare Portfolio-Struktur besitzt) unverändert bzw. bereits als Lösung vorgegeben und enthalten keine TODOs.

- (kein TODO-Marker) Verschieben der "Container-Vergleich"-Demo: In `index.php` (Startseite) wurde der Abschnitt mit den `container`/`container-fluid`-Demo-Boxen entfernt und stattdessen auf die neue Seite `technik-spielwiese.php` verschoben (dort per Kopfkommentar explizit als Aufräummaßnahme erklärt). Passend dazu wurden die zugehörigen CSS-Regeln `.beispiel-container`/`.beispiel-fluid` aus `css/index.css` entfernt und in die neue Datei `css/technik-spielwiese.css` verschoben. Dies ist keine Bearbeitungsaufgabe, sondern bereits fertige Strukturänderung.
- (kein TODO-Marker) `projekte.html` und `rechtliches/impressum.html`: In `projekte.html` ist die Modal-Übung aus Kapitel 7 bereits vollständig gelöst enthalten (Kopfkommentar "LÖSUNGSVORSCHLAG"), `impressum.html` unterscheidet sich nur im Kapitel-Titel des Kopfkommentars. Beide sind unverändertes/bereits gelöstes Boilerplate ohne Bezug zu den AJAX-TODOs dieser Teilübung.
- (kein TODO-Marker) `css/style.css`: Enthält gegenüber der Vorgänger-Version zusätzliche, bereits fertige CSS-Regeln (u.a. `.no-text-decoration`, `main`-Breite, `details summary`, `.github-badge`, `table`/`thead`-Formatierung, `.projekte-table-link-col`). Diese Klassen werden von keiner Datei dieser Teilübung referenziert – vermutlich Vorbereitung für spätere Kapitel/Übungen und für Übung 5 nicht relevant.
