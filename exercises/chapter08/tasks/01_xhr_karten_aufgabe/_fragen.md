## Task 1: Daten mit XMLHttpRequest laden und als Karten anzeigen (`tasks/01_xhr_karten_aufgabe`)

1. Warum darf die Seite Daten von `jsonplaceholder.typicode.com` laden, obwohl sie selbst von einem anderen Ursprung (z.B. `localhost` oder `file://`) stammt?
2. Welche Werte kann `readyState` annehmen, und warum reagiert der Handler nur auf `readyState == 4`?
3. Warum muss `xhr.responseText` mit `JSON.parse()` umgewandelt werden?
4. Welcher Status steht in `xhr.status`, wenn die URL `/userz` lautet, und welcher, wenn der Hostname falsch ist?
5. Warum werden die Texte mit `textContent` statt mit `innerHTML` gesetzt?
6. In welcher Reihenfolge erscheinen „Daten werden geladen ...“, die Karten und die Statuszeile? Was sieht man, wenn man im Netzwerk-Tab der Entwicklerwerkzeuge das Netzwerk auf „Slow 3G“ drosselt?
7. Wie ließe sich der Handler mit `xhr.onload` kürzer schreiben? Was wäre mit der Fetch-API anders?

<details><summary>Erwartete Antworten</summary>

1. Der Server erlaubt das per CORS: Er sendet den Header `Access-Control-Allow-Origin` mit dem anfragenden Ursprung (z.B. `http://localhost:8008`, bei lokal geöffneten Dateien `null`) – im Netzwerk-Tab unter „Response Headers“ zu sehen. Ohne diesen Header würde der Browser die Antwort blockieren.
2. 0 (UNSENT), 1 (OPENED), 2 (HEADERS_RECEIVED), 3 (LOADING), 4 (DONE). Der Handler wird bei jeder Änderung aufgerufen, die vollständige Antwort liegt aber erst bei 4 vor.
3. `responseText` ist immer ein String. Erst `JSON.parse()` macht daraus ein JavaScript-Array mit Objekten, auf deren Eigenschaften (`benutzer.name`, …) man zugreifen kann.
4. `/userz`: 404 (der Server antwortet, aber mit Fehlerstatus). Falscher Hostname: 0 – es kam gar keine HTTP-Antwort zustande (Netzwerkfehler).
5. Die Daten kommen von einem fremden Server. Mit `innerHTML` würde enthaltenes HTML/JavaScript interpretiert (Cross-Site-Scripting); `textContent` fügt den Wert immer als reinen Text ein.
6. Erst der Ladehinweis (steht im HTML), dann nach Eintreffen der Antwort die Karten und die aktualisierte Statuszeile. Bei gedrosseltem Netz bleibt der Ladehinweis länger stehen, die Seite bleibt aber bedienbar, weil der Request asynchron läuft.
7. `xhr.onload = function() { if (xhr.status == 200) { … } else { … } };` – `onload` wird nur bei `readyState 4` aufgerufen. Mit `fetch(API_URL)` erhält man ein Promise; der Status wird über `response.ok` geprüft, `response.json()` parst direkt, und Fehler werden mit `.catch()` behandelt (siehe Task 3).
</details>
