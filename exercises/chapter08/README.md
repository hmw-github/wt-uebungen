# Übungsaufgaben zu Kapitel 8: AJAX

Diese 6 Übungen decken alle Themen des Kapitels ab (8.1–8.6): das
AJAX-Prinzip und XMLHttpRequest, den Einsatz von AJAX am Beispiel eines
Technologie-Vorschlags und einer IP-Abfrage, die moderne Fetch-API (GET und
POST), Promises sowie async/await.

**Durchgängiges Projekt:** Übung 6 greift direkt in die Portfolio-Website
ein (siehe unten) und besteht daher aus dem kompletten aktuellen Stand der
Website. Die Übungen 1, 2, 4 und 5 sind eigenständige Mini-Projekte (Client
+ PHP-Server-Teil, jeweils in einem eigenen Ordner), Übung 3 ist eine rein
clientseitige einzelne HTML-Datei.

| # | Thema (Kapitel) | Aufgabendatei/-ordner | Lösungsdatei/-ordner |
|---|---|---|---|
| 1 | AJAX-Prinzip & XMLHttpRequest (8.1–8.2) | `01_xhr_grundlagen_aufgabe/` | `../../solutions/chapter08/01_xhr_grundlagen_loesung/` |
| 2 | Einsatz von AJAX - IP-Abfrage (8.2–8.3) | `02_xhr_ip_aufgabe/` | `../../solutions/chapter08/02_xhr_ip_loesung/` |
| 3 | Promises (8.5) | `03_promises_aufgabe.html` | `../../solutions/chapter08/03_promises_loesung.html` |
| 4 | Fetch API mit GET (8.4) | `04_fetch_get_aufgabe/` | `../../solutions/chapter08/04_fetch_get_loesung/` |
| 5 | Fetch API mit POST & async/await (8.4/8.6) | `05_fetch_post_async_await_aufgabe/` | `../../solutions/chapter08/05_fetch_post_async_await_loesung/` |
| 6 | Kapitelübergreifende Übung - Gästebuch mit AJAX (8.2/8.4) | `06_ajax_protokoll_aufgabe/` | `../../solutions/chapter08/06_ajax_protokoll_loesung/` |

## Wie sich die Übungen aufteilen

- **Übung 1** baut einen "Technologie-Finder" (Autocomplete über die
  Technologien von Alex Berger) mit klassischem `XMLHttpRequest`.
- **Übung 2** fragt per `XMLHttpRequest` die eigene IP-Adresse beim Server ab.
- **Übung 3** ist eine reine JavaScript-Übung zu Promises (kein Server nötig).
- **Übung 4** löst genau dieselbe Aufgabe wie Übung 1 (derselbe
  `hinweis.php`-Server-Endpunkt), diesmal aber mit der modernen Fetch-API
  statt `XMLHttpRequest`.
- **Übung 5** sendet eine kleine "Projekt-Idee einreichen"-Eingabe per
  Fetch/POST (JSON) an den Server und liest die Antwort mit async/await aus.
- **Übung 6** ist der Höhepunkt des Kapitels und greift direkt in die
  Website ein: Das Gästebuch aus Kapitel 6 (Session-Handling/MVC2) lädt
  seine Einträge jetzt nicht mehr per Seitenneuladen, sondern per AJAX
  nach. Dazu kommt eine neue Datei `gaestebuch/api.php` hinzu, die
  dasselbe Model (`Gästebuch.php`) wie schon der `Controller` verwendet
  und JSON-Anfragen (`{"action":"list"}` bzw.
  `{"action":"save","message":"..."}`) beantwortet.
  `gaestebuch/GaestebuchView.php` wird entsprechend angepasst (kein
  serverseitig gerenderter Formular-Reload mehr, sondern `fetch()` beim
  Laden der Seite und beim Absenden).

## Aufbau jeder Aufgabendatei

- Die Aufgabenstellung steht als HTML-Kommentar (bzw. als `// TODO`-Block
  in PHP-Dateien) am Dateianfang, gegliedert in einzelne nummerierte
  TODOs, die inhaltlich genau den zu ergänzenden Stellen im Code
  entsprechen.
- Die zu bearbeitenden Stellen sind im Dokument selbst durch
  `<!-- TODO n: ... -->`- bzw. `// TODO n: ...`-Kommentare markiert (leer,
  ohne vorgegebenen Code), sodass Studierende direkt im Browser/Editor
  sehen, wo etwas fehlt.
- Die Ordner bzw. Dateien sind vollständig lauffähige (wenn auch
  unvollständige) Anwendungen – Studierende können sie direkt über den in
  Docker laufenden PHP-Server aufrufen und ihren Fortschritt sofort im
  Browser überprüfen.

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
AJAX-Gästebuch mit Sitzungsverwaltung).

Bei Bedarf lassen sich die Übungen leicht erweitern, z.B. um zusätzliche
Fehlerbehandlung, um eine persistente Speicherung (Datei/Datenbank)
anstelle der Session, oder um weitere Fetch-Methoden (PUT, DELETE) - genau
das entsteht in Kapitel 9 (REST).

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
   http://localhost:8018/06_ajax_protokoll_loesung/index.php
   http://localhost:8008/06_ajax_protokoll_aufgabe/gaestebuch/index.php
   ```

   Die rein clientseitige Übung 3 (`03_promises_aufgabe.html` bzw.
   `03_promises_loesung.html`) kann ebenfalls über den jeweiligen Server
   geöffnet werden oder alternativ direkt als lokale Datei im Browser, da
   sie keinen PHP-Endpunkt benötigt.

3. Nach dem Testen den jeweiligen Container wieder stoppen:

   ```
   docker compose down
   ```
