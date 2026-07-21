# Übungsaufgaben zu Kapitel 8: AJAX

Diese 6 Übungen decken alle Themen des Kapitels ab (8.1–8.6): das
AJAX-Prinzip und XMLHttpRequest, den Einsatz von AJAX am Beispiel eines
Namens-Vorschlags und einer IP-Abfrage, die moderne Fetch-API (GET und
POST), Promises sowie async/await. Sie sind so konzipiert, dass sie direkt
nach der jeweiligen Wiederholung im Vorlesungsteil bearbeitet werden
können. Da in diesem Kapitel Client (HTML/JavaScript) und Server (PHP)
zusammenspielen, besteht jede Übung mit Serverkontakt aus einem eigenen
Aufgabenordner in diesem Verzeichnis und einem eigenen Lösungsordner im
Ordner `../../solutions/chapter08/`, jeweils mit mindestens einer
`index.html` und einer PHP-Datei. Nur die rein clientseitige
Promises-Übung (Nr. 3) besteht aus einzelnen HTML-Dateien.

| # | Thema (Kapitel) | Aufgabendatei | Lösungsdatei |
|---|---|---|---|
| 1 | AJAX-Prinzip & XMLHttpRequest (8.1–8.2) | `01_xhr_grundlagen_aufgabe/` | `../../solutions/chapter08/01_xhr_grundlagen_loesung/` |
| 2 | Einsatz von AJAX - IP-Abfrage (8.2–8.3) | `02_xhr_ip_aufgabe/` | `../../solutions/chapter08/02_xhr_ip_loesung/` |
| 3 | Promises (8.5) | `03_promises_aufgabe.html` | `../../solutions/chapter08/03_promises_loesung.html` |
| 4 | Fetch API mit GET (8.4) | `04_fetch_get_aufgabe/` | `../../solutions/chapter08/04_fetch_get_loesung/` |
| 5 | Fetch API mit POST & async/await (8.4/8.6) | `05_fetch_post_async_await_aufgabe/` | `../../solutions/chapter08/05_fetch_post_async_await_loesung/` |
| 6 | Kapitelübergreifende Übung - Protokoll mit AJAX (8.2/8.4) | `06_ajax_protokoll_aufgabe/` | `../../solutions/chapter08/06_ajax_protokoll_loesung/` |

## Aufbau jeder Aufgabendatei

- Die Aufgabenstellung steht als HTML-Kommentar (bzw. als `// TODO`-Block
  in PHP-Dateien) am Dateianfang, gegliedert in einzelne nummerierte
  TODOs, die inhaltlich genau den zu ergänzenden Stellen im Code
  entsprechen.
- Die zu bearbeitenden Stellen sind im Dokument selbst durch
  `<!-- TODO n: ... -->`- bzw. `// TODO n: ...`-Kommentare markiert (leer,
  ohne vorgegebenen Code), sodass Studierende direkt im Browser/Editor
  sehen, wo etwas fehlt.
- Alle Übungen mit Serverkontakt liegen in einem eigenen
  `..._aufgabe/`-Ordner (mit `index.html` sowie einer oder mehreren
  PHP-Dateien), damit Client- und Serverteil zusammen als eigenständiges,
  lauffähiges Mini-Projekt getestet werden können.
- Die Dateien sind vollständig lauffähige (wenn auch unvollständige)
  Anwendungen – Studierende können sie direkt über den in Docker
  laufenden PHP-Server aufrufen und ihren Fortschritt sofort im Browser
  überprüfen.

## Aufbau jeder Lösungsdatei

- Enthält eine vollständige, funktionsfähige Musterlösung (Client- und
  Serverteil).
- Kann als Referenz für die Korrektur oder zur Selbstkontrolle verwendet
  werden.

## Didaktischer Hinweis

Die Übungen bauen inhaltlich leicht aufeinander auf: Übung 4 verwendet
denselben Server-Endpunkt wie Übung 1, zeigt aber, wie derselbe
Anwendungsfall mit der moderneren Fetch-API statt XMLHttpRequest gelöst
wird; Übung 6 kombiniert POST-Requests, JSON-Kommunikation und
serverseitige Sitzungsverwaltung zu einer kleinen, vollständigen
AJAX-Anwendung. Die Übungen sind aber unabhängig voneinander lösbar und
können auch einzeln passend zur jeweiligen Folienreihenfolge im
Foliensatz eingesetzt werden. Der Schwierigkeitsgrad steigt leicht von
Übung 1 (grundlegender XMLHttpRequest-Aufruf) zu Übung 6 (vollständiges
AJAX-Protokoll mit Sitzungsverwaltung).

Bei Bedarf lassen sich die Übungen leicht erweitern, z.B. um zusätzliche
Fehlerbehandlung, um eine persistente Speicherung (Datei/Datenbank)
anstelle der Session, oder um weitere Fetch-Methoden (PUT, DELETE).

## Ausführung mit Docker

Da diese Übungen PHP-Endpunkte enthalten, wird ein PHP-fähiger Webserver
benötigt. Sowohl dieser Ordner als auch `../../solutions/chapter08/` haben
dafür je eine eigene `docker-compose.yml`, die einen nginx-Webserver
zusammen mit einem PHP-FPM-Container startet. Beide Setups sind unabhängig
voneinander lauffähig:

| Ordner | Port | docker-compose.yml |
|---|---|---|
| `exercises/chapter08/` (Aufgaben) | `8008` | in diesem Ordner |
| `solutions/chapter08/` (Lösungen) | `8018` | in `../../solutions/chapter08/` |

1. Im Terminal in den gewünschten Ordner wechseln und den Container starten,
   z.B. für die Aufgaben:

   ```
   cd exercises/chapter08
   docker compose up -d
   ```

   bzw. für die Lösungen:

   ```
   cd solutions/chapter08
   docker compose up -d
   ```

2. Im Browser die gewünschte Übung öffnen, z.B.:

   ```
   http://localhost:8008/01_xhr_grundlagen_aufgabe/index.html
   http://localhost:8018/06_ajax_protokoll_loesung/index.html
   ```

   Die rein clientseitige Übung 3 (`03_promises_aufgabe.html` bzw.
   `03_promises_loesung.html`) kann ebenfalls über den jeweiligen Server
   geöffnet werden oder alternativ direkt als lokale Datei im Browser, da
   sie keinen PHP-Endpunkt benötigt.

3. Nach dem Testen den jeweiligen Container wieder stoppen:

   ```
   docker compose down
   ```
