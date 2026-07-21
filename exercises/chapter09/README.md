# Übungsaufgaben zu Kapitel 9: REST

Diese 4 Übungen decken die Themen des Kapitels ab (9.1–9.4: REST-Grundprinzipien,
das Beispiel einer Bestellungsverwaltung, mehrere Repräsentationen und
zustandslose Kommunikation) und sind so konzipiert, dass sie direkt nach der
jeweiligen Wiederholung im Vorlesungsteil bearbeitet werden können. Die
Übungen bauen aufeinander auf: von der Planung einer REST-Schnittstelle über
eine rein lesende Schnittstelle bis zu einer vollständigen CRUD-Schnittstelle
mit dazugehörigem JavaScript-Client. Jede Übung besteht aus einem
Aufgabenordner in diesem Verzeichnis und einem Lösungsordner mit denselben
Dateien im Ordner `../../solutions/chapter09/`.

| # | Thema (Kapitel) | Aufgabendatei | Lösungsdatei |
|---|---|---|---|
| 1 | REST-Routendesign (9.1) | `01_rest_design_aufgabe/routen.php` | `../../solutions/chapter09/01_rest_design_loesung/routen.php` |
| 2 | Lesende REST-Schnittstelle (9.2) | `02_rest_get_api_aufgabe/` (`.htaccess`, `service.php`) | `../../solutions/chapter09/02_rest_get_api_loesung/` (`.htaccess`, `service.php`) |
| 3 | Vollständige CRUD-Schnittstelle (9.2) | `03_rest_crud_api_aufgabe/` (`.htaccess`, `service.php`) | `../../solutions/chapter09/03_rest_crud_api_loesung/` (`.htaccess`, `service.php`) |
| 4 | REST-Client mit fetch (9.2, 9.3) | `04_rest_client_aufgabe/index.html` | `../../solutions/chapter09/04_rest_client_loesung/index.html` |

## Aufbau jeder Aufgabendatei

- Die Aufgabenstellung steht als Kommentar am Dateianfang (bei PHP-Dateien
  `/* ... */`, bei HTML-Dateien `<!-- ... -->`), gegliedert in einzelne
  nummerierte TODOs, die inhaltlich genau den zu ergänzenden Stellen im Code
  entsprechen.
- Die zu bearbeitenden Stellen sind im Code selbst durch
  `// TODO n: ...` bzw. `<!-- TODO n: ... -->`-Kommentare markiert (ohne
  vorgegebenen Code), sodass Studierende direkt im Editor sehen, wo etwas
  fehlt.
- Die Dateien sind vollständig lauffähig (wenn auch fachlich unvollständig):
  Die PHP-Dateien lassen sich ohne Syntaxfehler ausführen, die
  `.htaccess`/`service.php`-Paare lassen sich über den Docker-Webserver
  aufrufen, auch wenn einzelne Operationen erst nach Bearbeitung der TODOs
  die erwartete Antwort liefern.

## Aufbau jeder Lösungsdatei

- Enthält eine vollständige, funktionsfähige Musterlösung ohne verbleibende
  TODO-Kommentare.
- Kann als Referenz für die Korrektur, zur Selbstkontrolle oder – im Fall
  von Übung 3 – als laufende Schnittstelle für den Client aus Übung 4
  verwendet werden.

## Didaktischer Hinweis

Die Übungen bauen inhaltlich aufeinander auf: Übung 1 entwirft die Routen
einer REST-Schnittstelle rein auf Code-Ebene (ohne HTTP-Server), Übung 2
setzt eine lesende Schnittstelle dafür tatsächlich um, Übung 3 erweitert
diese um schreibende Operationen (Create, Update, Delete) mit
session-basierter Datenhaltung, und Übung 4 konsumiert die Schnittstelle aus
Übung 3 über einen einfachen fetch-basierten JavaScript-Client. Der
Schwierigkeitsgrad steigt entsprechend von Übung 1 (Routendesign ohne
Server) zu Übung 4 (vollständiges Zusammenspiel aus Client und
CRUD-Schnittstelle).

Die Übungen sind dennoch grundsätzlich unabhängig voneinander lösbar: Wer
z.B. nur Übung 3 bearbeiten möchte, kann direkt die Musterlösung von Übung 2
als Ausgangspunkt betrachten, ohne Übung 1 gelöst zu haben.

Bei Bedarf lassen sich die Übungen leicht erweitern, z.B. um eine
XML-Repräsentation zusätzlich zu JSON (Kapitel 9.3) oder um eine
CORS-Preflight-Behandlung (`OPTIONS`-Anfragen mit
`Access-Control-Allow-Origin`), sobald der Client von einem anderen Origin
aus auf die Schnittstelle zugreifen soll.

## Ausführung mit Docker

Dieser Ordner sowie `../../solutions/chapter09/` haben je eine eigene
`docker-compose.yml`, die einen nginx-Webserver zusammen mit einem
PHP-FPM-Container startet und unabhängig vom jeweils anderen Ordner
lauffähig ist:

| Ordner | Port | docker-compose.yml |
|---|---|---|
| `exercises/chapter09/` (Aufgaben) | `8009` | in diesem Ordner |
| `solutions/chapter09/` (Lösungen) | `8019` | in `../../solutions/chapter09/` |

Die in Kapitel 9.2 vorgestellte `.htaccess`-Regel (Weiterleitung aller
Anfragen an `service.php` mit dem Pfad als `_url`-Query-Parameter) liegt
weiterhin unverändert in den jeweiligen Übungsordnern, da sie Teil der
Aufgabenstellung bzw. Musterlösung ist. Da nginx – anders als Apache –
keine `.htaccess`-Dateien auswertet, ist die gleichwertige Weiterleitung
zusätzlich direkt in der `nginx.conf` des jeweiligen Docker-Setups
hinterlegt, damit die Übungen unter nginx trotzdem lauffähig sind.

1. Im Terminal in den gewünschten Ordner wechseln und den Container starten,
   z.B. für die Aufgaben:

   ```
   cd exercises/chapter09
   docker compose up -d
   ```

   bzw. für die Lösungen:

   ```
   cd solutions/chapter09
   docker compose up -d
   ```

2. Anschließend sind die Übungsordner erreichbar, z.B.:
   - `http://localhost:8019/02_rest_get_api_loesung/buecher` – lesende
     GET-Anfrage, kann direkt im Browser geöffnet werden.
   - `http://localhost:8019/03_rest_crud_api_loesung/buch/1` – GET auf ein
     einzelnes Buch.
   - `http://localhost:8009/04_rest_client_aufgabe/index.html` – der
     JavaScript-Client aus Übung 4. Da die Aufgaben- und Lösungs-Container
     getrennte, eigenständige Docker-Setups mit unterschiedlichen Ports
     sind, spricht dieser Client die Musterlösung von Übung 3
     containerübergreifend unter `http://localhost:8019/...` an (Cross-Origin).
     Die Musterlösung von `service.php` (Übung 2 und 3) setzt dafür
     passende CORS-Header (`Access-Control-Allow-Origin` u.a., siehe
     Kapitel 9.2 zu CORS-Preflight-Anfragen). Der Lösungs-Client unter
     `http://localhost:8019/04_rest_client_loesung/index.html` läuft
     dagegen im selben Container wie die Schnittstelle und nutzt daher
     einen einfachen, relativen (same-origin) Pfad.

   Für GET-Anfragen genügt der Browser oder ein REST-Client (z.B. Postman).
   Für POST-, PUT- und DELETE-Anfragen wird ein Werkzeug benötigt, das
   diese HTTP-Methoden senden kann, z.B. curl oder Postman, da der Browser
   beim einfachen Aufrufen einer Adresse immer nur GET-Anfragen sendet.
   Beispiel mit curl:

   ```
   curl -i -X POST -H "Content-Type: application/json" \
        -d '{"titel":"Neues Buch","autor":"Neue Autorin"}' \
        http://localhost:8019/03_rest_crud_api_loesung/buch
   ```

3. Nach der Bearbeitung den jeweiligen Container wieder stoppen:

   ```
   docker compose down
   ```
