# TODOs – Übung 3: Fetch-API mit GET

## index.html
1. TODO 1: Mit `fetch("hinweis.php?praefix=" + wert)` den Server aufrufen. Im ersten `.then()` anhand von `response.ok` prüfen, ob die Antwort erfolgreich war; andernfalls mit `throw` einen neuen `Error` werfen (z.B. `new Error("Serverfehler")`).
2. TODO 2: Den Antworttext mit `response.text()` auslesen (liefert selbst wieder ein Promise) und im nächsten `.then()` in das Ergebnis-Element (`id="ergebnis"`) schreiben.
3. TODO 3: Fehler mit `.catch()` abfangen und eine für die Nutzer/-innen sichtbare Fehlermeldung im Ergebnis-Element anzeigen (z.B. "Fehler beim Laden der Vorschläge.").

## hinweis.php
Keine TODOs – das Skript ist laut Kopfkommentar bereits vollständig (identisch zu Übung 1) und muss nicht bearbeitet werden.
