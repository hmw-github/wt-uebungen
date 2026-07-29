# Übungsaufgaben zu Kapitel 9: REST

Diese 4 Übungen decken die Themen des Kapitels ab (9.1–9.4: REST-Grundprinzipien,
mehrere Repräsentationen und zustandslose Kommunikation) und bilden den
Abschluss des Kurses: von der Planung einer REST-Schnittstelle über eine
rein lesende Schnittstelle bis zu einer vollständigen CRUD-Schnittstelle,
die **die Portfolio-Website tatsächlich mit echten Daten versorgt**.

**Durchgängiges Projekt:** Die Ressource dieser REST-Schnittstelle ist
"Projekt" (id, titel, technologie, jahr, link) - genau die Daten, die seit
Kapitel 5 auf der Seite "Projekte" angezeigt werden. Übung 4 ist der
Abschluss der gesamten Website: Die Projekte-Seite lädt, erstellt,
bearbeitet und löscht ihre Projekte ab jetzt ausschließlich über die
selbst gebaute REST-Schnittstelle aus Übung 3.

| # | Thema (Kapitel) | Aufgabendatei/-ordner | Lösungsdatei/-ordner |
|---|---|---|---|
| 1 | REST-Routendesign (9.1) | `01_rest_design_aufgabe/routen.php` | `../../solutions/chapter09/01_rest_design_loesung/routen.php` |
| 2 | Lesende REST-Schnittstelle (9.2) | `02_rest_get_api_aufgabe/` (Website + `api/.htaccess`, `api/service.php`) | `../../solutions/chapter09/02_rest_get_api_loesung/` |
| 3 | Vollständige CRUD-Schnittstelle (9.2) | `03_rest_crud_api_aufgabe/` (Website + `api/.htaccess`, `api/service.php`) | `../../solutions/chapter09/03_rest_crud_api_loesung/` |
| 4 | REST-Client mit fetch (9.2, 9.3) | `04_rest_client_aufgabe/` (Website, `projekte.html` als REST-Client) | `../../solutions/chapter09/04_rest_client_loesung/` |

## Wie die Website in diesem Kapitel fertiggestellt wird

- **Übung 1** entwirft die Routen der REST-Schnittstelle rein auf
  Code-Ebene (ohne HTTP-Server) - eine Routentabelle für die Ressource
  "Projekt" sowie eine kleine Zuordnungslogik, die zu Methode+Pfad die
  passende Aktion findet.
- **Übung 2** setzt eine rein lesende Schnittstelle dafür tatsächlich um:
  Der komplette aktuelle Stand der Website bekommt einen neuen Unterordner
  `api/` mit `.htaccess` (Apache-Rewriting auf `service.php`) und
  `service.php` (liefert `GET /projekte` und `GET /projekt/{id}` als
  JSON). Die Projekte-Seite selbst nutzt diese Schnittstelle noch nicht -
  das ist Gegenstand von Übung 4.
- **Übung 3** erweitert `api/service.php` um die schreibenden Operationen
  `POST /projekt`, `PUT /projekt/{id}` und `DELETE /projekt/{id}` mit
  session-basierter Datenhaltung (keine Datenbank nötig) sowie CORS-Headern.
- **Übung 4** ist der Abschluss des gesamten Kurses: `projekte.html`
  lädt seine Projekt-Karten (aus Kapitel 7) jetzt per `fetch()` von
  `api/projekte`, legt über den Button "Neues Projekt anlegen" per `POST`
  neue Projekte an, speichert Änderungen aus dem Bearbeiten-Modal (aus
  Kapitel 7, Übung 7) jetzt tatsächlich per `PUT`, und der neue
  "Löschen"-Button auf jeder Karte entfernt ein Projekt per `DELETE`.
  Aus der anfangs rein statischen HTML-Seite aus Kapitel 3 ist damit eine
  vollständige Webanwendung mit eigener REST-Schnittstelle geworden.

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
  `api/.htaccess`/`api/service.php`-Paare lassen sich über den
  Docker-Webserver aufrufen, auch wenn einzelne Operationen erst nach
  Bearbeitung der TODOs die erwartete Antwort liefern.

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
Übung 3 über einen fetch-basierten JavaScript-Client - direkt in der
echten Projekte-Seite der Website. Der Schwierigkeitsgrad steigt
entsprechend von Übung 1 (Routendesign ohne Server) zu Übung 4
(vollständiges Zusammenspiel aus Client und CRUD-Schnittstelle).

Die Übungen sind dennoch grundsätzlich unabhängig voneinander lösbar: Wer
z.B. nur Übung 3 bearbeiten möchte, kann direkt die Musterlösung von Übung 2
als Ausgangspunkt betrachten, ohne Übung 1 gelöst zu haben.

Bei Bedarf lassen sich die Übungen leicht erweitern, z.B. um eine
XML-Repräsentation zusätzlich zu JSON (Kapitel 9.3), um eine echte
Datenbank (PDO/MySQLi) anstelle der Session, oder um eine Anmeldung
(Kapitel 6), damit nur Alex Berger selbst Projekte bearbeiten kann.

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
weiterhin unverändert in `api/.htaccess` der jeweiligen Übungsordner, da
sie Teil der Aufgabenstellung bzw. Musterlösung ist. Da nginx – anders als
Apache – keine `.htaccess`-Dateien auswertet, ist die gleichwertige
Weiterleitung zusätzlich direkt in der `nginx.conf` des jeweiligen
Docker-Setups hinterlegt, damit die Übungen unter nginx trotzdem
lauffähig sind.

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
   - `http://localhost:8019/02_rest_get_api_loesung/api/projekte` – lesende
     GET-Anfrage, kann direkt im Browser geöffnet werden.
   - `http://localhost:8019/03_rest_crud_api_loesung/api/projekt/1` – GET
     auf ein einzelnes Projekt.
   - `http://localhost:8009/04_rest_client_aufgabe/projekte.html` – die
     echte, um die REST-Schnittstelle ergänzte Projekte-Seite der Website.
     Client und Schnittstelle laufen hier im selben Ordner/Container und
     sprechen sich daher über einen einfachen, relativen (same-origin)
     Pfad (`api/...`) an – keine CORS-Konfiguration nötig. Die
     mitgelieferten CORS-Header in `api/service.php` sind trotzdem gesetzt,
     falls die Schnittstelle später einmal separat betrieben werden soll.

   Für GET-Anfragen genügt der Browser oder ein REST-Client (z.B. Postman).
   Für POST-, PUT- und DELETE-Anfragen wird ein Werkzeug benötigt, das
   diese HTTP-Methoden senden kann, z.B. curl oder Postman, da der Browser
   beim einfachen Aufrufen einer Adresse immer nur GET-Anfragen sendet.
   Beispiel mit curl:

   ```
   curl -i -X POST -H "Content-Type: application/json" \
        -d '{"titel":"Neues Projekt","technologie":"Vue.js","jahr":2027,"link":"https://example.com"}' \
        http://localhost:8019/03_rest_crud_api_loesung/api/projekt
   ```

3. Nach der Bearbeitung den jeweiligen Container wieder stoppen:

   ```
   docker compose down
   ```
