# TODOs – Übung 2: Wie ist meine IP?

## index.html
1. TODO 1: Das HTML-Element mit der id "ip" ermitteln.
2. TODO 2: Ein neues `XMLHttpRequest`-Objekt erzeugen.
3. TODO 3: Eine `onreadystatechange`-Funktion registrieren, die prüft, ob `xhr.readyState == 4` und `xhr.status == 200` ist, und in diesem Fall das `innerHTML` des Elements aus TODO 1 auf `xhr.responseText` setzt.
4. TODO 4: Eine GET-Anfrage an `"ip.php"` öffnen (`open`) und absenden (`send`).

## ip.php
Keine TODOs – das Skript ist laut Kopfkommentar bereits vollständig (`echo $_SERVER['REMOTE_ADDR'];`) und muss nicht bearbeitet werden.

Ein Vergleich mit der Vorgänger-Teilübung `01_xhr_grundlagen_aufgabe/` zeigt keine inhaltlich relevanten Gemeinsamkeiten/Unterschiede außerhalb der TODO-Stellen (beide sind eigenständige XHR-Beispiele mit demselben Grundmuster).
