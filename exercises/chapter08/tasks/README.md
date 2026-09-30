# Zusatzaufgaben zu Kapitel 8: AJAX

Drei eigenständige, rein clientseitige Aufgaben zu XMLHttpRequest, zur Fetch-API und zu
Promises. Als Server dient der frei verfügbare Test-Server
[JSONPlaceholder](https://jsonplaceholder.typicode.com/) (kein API-Key, CORS
erlaubt, simuliert auch POST-Anfragen).

| # | Thema (Kapitel) | Aufgabenordner | Lösungsordner |
|---|---|---|---|
| 1 | Daten laden und als Karten anzeigen – XMLHttpRequest (8.1–8.2) | `01_xhr_karten_aufgabe/` | `../../../solutions/chapter08/tasks/01_xhr_karten_loesung/` |
| 2 | Promises erzeugen, verketten, `Promise.all()`, async/await (8.5/8.6) | `02_promise_ketten_aufgabe/` | `../../../solutions/chapter08/tasks/02_promise_ketten_loesung/` |
| 3 | Daten per Fetch POST senden und als Karte anzeigen – async/await (8.4/8.6) | `03_fetch_post_karten_aufgabe/` | `../../../solutions/chapter08/tasks/03_fetch_post_karten_loesung/` |

- **Task 1** lädt `https://jsonplaceholder.typicode.com/users` mit `XMLHttpRequest` (`onreadystatechange`, `JSON.parse()`) und baut für
  jeden Benutzer eine Karte mit `createElement()`/`textContent`.
- **Task 2** braucht keinen Server: Ein kleines Würfelspiel, in dem eigene
  Promises (`warte()`, `wuerfeln()`) erzeugt, mit `.then()`/`.catch()`/
  `.finally()` verkettet, mit `Promise.all()` parallel ausgeführt und
  schließlich mit async/await neu formuliert werden.
- **Task 3** ist eine Pinnwand im Stil von Task 1 (Beiträge von
  `/posts` als Karten; das Laden ist bereits fertig, hier aber mit der Fetch-API statt XMLHttpRequest). Neu ist ein Formular, das
  einen Beitrag per `fetch(..., { method: "POST", ... })` als JSON sendet
  und die Serverantwort (Status 201, neue id) als Karte einfügt.
  JSONPlaceholder speichert nichts dauerhaft – nach dem Neuladen ist der
  Beitrag weg.

Aufbau wie bei den übrigen Übungen: Aufgabenstellung als Kommentar am
Dateianfang, `// TODO n`-Markierungen an den zu ergänzenden Stellen,
Erläuterungen in `_todos.md`, Verständnisfragen mit Antworten in
`_fragen.md`.

## Ausführung

Alle drei Aufgaben können direkt als lokale Datei im Browser geöffnet
werden (Internetverbindung für Task 1 und 3 nötig). Alternativ über den
Docker-Server des Kapitels, z.B.:

```
http://localhost:8008/tasks/01_xhr_karten_aufgabe/index.html
http://localhost:8018/tasks/01_xhr_karten_loesung/index.html
```
