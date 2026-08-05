# TODOs – Übung 5: Fetch mit POST und async/await

## index.html
1. TODO 1: `sende()` als `async function` deklarieren. Darin mit `await fetch("echo.php", {...})` eine POST-Anfrage senden, deren Header `Content-Type` auf `application/json` gesetzt ist und deren `body` mit `JSON.stringify()` aus den Werten der Felder "titelFeld" und "jahrFeld" gebildet wird. Den Aufruf in einem try/catch-Block kapseln.
2. TODO 2: Die Antwort mit `await response.json()` auslesen und eine Bestätigungsmeldung (z.B. mit den Werten aus dem Antwortobjekt) im Element mit der id "ergebnis" anzeigen.
3. TODO 3: Im catch-Block eine für die Nutzer/-innen sichtbare Fehlermeldung im Element mit der id "ergebnis" anzeigen.

## echo.php
1. TODO 1: Den rohen Request-Body mit `file_get_contents("php://input")` auslesen und mit `json_decode(..., true)` in ein assoziatives PHP-Array umwandeln.
2. TODO 2: Den Response-Header auf `"Content-Type: application/json"` setzen und mit `echo json_encode(...)` eine Bestätigung im Format `{"status":"ok","titel":"...","jahr":...}` zurückgeben (unter Verwendung der Werte aus dem in TODO 1 dekodierten Array).
