# TODOs – Task 1: Daten mit XMLHttpRequest laden und als Karten anzeigen

## index.html
1. TODO 1: `erzeugeKarte(benutzer)` vervollständigen. Mit `document.createElement("article")` eine Karte mit der Klasse `karte` erzeugen und darin Name (`<h2>`), `"@" + username` (`<p class="untertitel">`), E-Mail, Ort (`benutzer.address.city`) und Firma (`benutzer.company.name`) als Kindelemente einfügen (z.B. mit `append()`). Texte immer über `textContent` setzen. Die Karte mit `return` zurückgeben.
2. TODO 2: In `ladeBenutzer()` mit `const xhr = new XMLHttpRequest();` das Request-Objekt erzeugen und `xhr.onreadystatechange = function() { … };` zuweisen. Im Handler zunächst `if (xhr.readyState == 4)` prüfen – erst dann ist die Antwort vollständig empfangen.
3. TODO 3: Bei `xhr.status == 200` enthält `xhr.responseText` die Antwort als String. Mit `JSON.parse(xhr.responseText)` in ein Array umwandeln, mit `forEach` für jeden Benutzer `erzeugeKarte()` aufrufen und das Ergebnis mit `appendChild()` an `#karten` anhängen. Danach in `#status` z.B. „10 Benutzer geladen.“ anzeigen.
4. TODO 4: Im `else`-Zweig eine Fehlermeldung mit `xhr.status` in `#status` anzeigen und `status.className = "fehler"` setzen.
5. TODO 5: Mit `xhr.open("GET", API_URL)` die Anfrage vorbereiten und mit `xhr.send()` absenden. Der Handler aus TODO 2 muss vorher zugewiesen sein.

Test der Fehlerbehandlung: Die URL in `API_URL` absichtlich verändern (z.B. `/userz` → Status 404, oder einen nicht existierenden Hostnamen → Netzwerkfehler, Status 0) und prüfen, ob die Fehlermeldung erscheint.

## style.css
Keine TODOs – das Stylesheet (inkl. Kartenraster mit CSS Grid) ist fertig.

Hinweis: Die Übung ist rein clientseitig und braucht keinen PHP-Server. Sie kann direkt als lokale Datei im Browser geöffnet werden; es ist lediglich eine Internetverbindung nötig. In Task 3 wird dieselbe Kartenansicht mit der Fetch-API umgesetzt – ein Vergleich beider Varianten lohnt sich.
