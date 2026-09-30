# TODOs – Task 3: Daten per Fetch/POST senden

## index.html
1. TODO 1: Als erste Anweisung in `sendeBeitrag(event)` `event.preventDefault()` aufrufen. Danach ein Objekt bauen:
   `const neuerBeitrag = { title: …, body: …, userId: Number(…) };` mit den Werten (`.value`) aus `#titelFeld`, `#textFeld` und `#benutzerFeld`.
2. TODO 2: `button.disabled = true;` setzen und mit `zeigeStatus("Beitrag wird gesendet ...")` informieren. Im `try`-Block:
   `const response = await fetch(API_URL, { method: "POST", headers: { "Content-Type": "application/json" }, body: JSON.stringify(neuerBeitrag) });`
   Anschließend `response.ok` prüfen und bei einem Fehlerstatus `throw new Error("HTTP-Status " + response.status)`.
3. TODO 3: `const gespeichert = await response.json();` – das Objekt enthält die vom Server vergebene `id`. Mit `erzeugeKarte(gespeichert)` eine Karte erzeugen, `karte.classList.add("neu")` (grüner Rand) und mit `container.prepend(karte)` an den Anfang setzen. Status z.B. „Beitrag gespeichert (Status 201, neue id 101).“ anzeigen und `form.reset()` aufrufen.
4. TODO 4: Im `catch (error)`-Block `zeigeStatus("Fehler beim Senden: " + error.message, true)`. Im `finally`-Block `button.disabled = false;`.
5. TODO 5: `document.getElementById("beitragForm").addEventListener("submit", sendeBeitrag);`

Testen:
- Im Netzwerk-Tab der Entwicklerwerkzeuge den POST-Request ansehen: Methode, Request-Header, Payload und Antwort (Status 201).
- Fehlerfall: `API_URL` beim POST testweise auf `https://jsonplaceholder.typicode.com/postz` ändern (404) bzw. den Browser offline schalten (Netzwerkfehler).
- Während des Sendens das Netzwerk drosseln („Slow 3G“) und prüfen, dass der Button deaktiviert ist.

## style.css
Keine TODOs – identisch zu Task 1.

Hinweis: Die Übung ist rein clientseitig und kann direkt als lokale Datei im Browser geöffnet werden; es ist lediglich eine Internetverbindung nötig.
