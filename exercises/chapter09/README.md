# Übungsaufgaben zu Kapitel 9: REST

Diese 3 Übungen decken die Themen des Kapitels ab (9.1–9.4: REST-Grundprinzipien,
mehrere Repräsentationen und zustandslose Kommunikation) und bilden den
Abschluss des Kurses: von der Planung einer REST-Schnittstelle über eine
vollständige CRUD-Schnittstelle bis zu einem Client, der **die
Portfolio-Website tatsächlich mit echten Daten versorgt**.

**Durchgängiges Projekt:** Die Ressource dieser REST-Schnittstelle ist
"Projekt" (id, titel, technologie, jahr, link) - genau die Daten, die seit
Kapitel 5 auf der Seite "Projekte" angezeigt werden. Übung 3 ist der
Abschluss der gesamten Website: Die Projekte-Seite lädt, erstellt,
bearbeitet und löscht ihre Projekte ab jetzt ausschließlich über die
selbst gebaute REST-Schnittstelle aus Übung 2.

| # | Thema (Kapitel) | Aufgabendatei/-ordner | Lösungsdatei/-ordner |
|---|---|---|---|
| 1 | REST-Routendesign (9.1) | `01_rest_design_aufgabe/routen.php` | `../../solutions/chapter09/01_rest_design_loesung/routen.php` |
| 2 | REST-Schnittstelle mit allen CRUD-Operationen (9.2) | `02_rest_api_aufgabe/` (Website + `api/service.php`) | `../../solutions/chapter09/02_rest_api_loesung/` |
| 3 | REST-Client mit fetch (9.2, 9.3) | `03_rest_client_aufgabe/` (Website, `projekte.html` als REST-Client) | `../../solutions/chapter09/03_rest_client_loesung/` |

## Wie die Website in diesem Kapitel fertiggestellt wird

- **Übung 1** entwirft die Routen der REST-Schnittstelle rein auf
  Code-Ebene (ohne HTTP-Server) - eine Routentabelle für die Ressource
  "Projekt" sowie eine kleine Zuordnungslogik, die zu Methode+Pfad die
  passende Aktion findet.
- **Übung 2** setzt die Schnittstelle dafür tatsächlich um: Der komplette
  aktuelle Stand der Website bekommt einen neuen Unterordner `api/` mit
  `service.php`. Zuerst entstehen die lesenden Operationen
  `GET /projekte` und `GET /projekt/{id}` (JSON), danach die schreibenden
  Operationen `POST /projekt`, `PUT /projekt/{id}` und
  `DELETE /projekt/{id}`. Die Projekte liegen dabei in der PHP-Session
  (keine Datenbank nötig); Session-Initialisierung und CORS-Header sind
  vorgegeben. Damit die "schönen" REST-URLs wie `api/projekt/2` überhaupt
  bei `service.php` ankommen, ist serverseitiges URL-Rewriting nötig - das
  übernimmt hier zentral die `nginx.conf` des Docker-Setups (siehe
  "Wie die Umleitung mit nginx funktioniert" unten), nicht die einzelne
  Übungsdatei. Die Projekte-Seite selbst nutzt diese Schnittstelle noch
  nicht - das ist Gegenstand von Übung 3.
- **Übung 3** ist der Abschluss des gesamten Kurses: `projekte.html`
  lädt seine Projekt-Karten (aus Kapitel 7) jetzt per `fetch()` von
  `api/projekte`, legt über den Button "Neues Projekt anlegen" per `POST`
  neue Projekte an, speichert Änderungen aus dem Bearbeiten-Modal (aus
  Kapitel 7, Übung 3) jetzt tatsächlich per `PUT`, und der neue
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
  `api/service.php`-Dateien lassen sich über den Docker-Webserver
  aufrufen (das URL-Rewriting auf `service.php` ist bereits zentral über
  die `nginx.conf` eingerichtet, siehe unten), auch wenn einzelne
  Operationen erst nach Bearbeitung der TODOs die erwartete Antwort
  liefern.
- Die TODOs beschreiben nur den **zu erzielenden Effekt** (was am Ende im
  Browser, in der Konsole oder in der Server-Antwort zu sehen sein soll),
  nicht den Lösungsweg. Welche Elemente, Selektoren, Eigenschaften,
  Funktionen oder Sprachmittel Sie dafür einsetzen, entscheiden Sie selbst.
  Vorgegebene Namen (Funktionen, ids, Variablen, Schlüssel) sind
  einzuhalten, weil anderer Code darauf zugreift.

## Aufbau jeder Lösungsdatei

- Enthält eine vollständige, funktionsfähige Musterlösung ohne verbleibende
  TODO-Kommentare.
- Kann als Referenz für die Korrektur, zur Selbstkontrolle oder – im Fall
  von Übung 2 – als laufende Schnittstelle für den Client aus Übung 3
  verwendet werden.

## Didaktischer Hinweis

Die Übungen bauen inhaltlich aufeinander auf: Übung 1 entwirft die Routen
einer REST-Schnittstelle rein auf Code-Ebene (ohne HTTP-Server), Übung 2
setzt die Schnittstelle mit lesenden und schreibenden Operationen (Read,
Create, Update, Delete) und session-basierter Datenhaltung tatsächlich um,
und Übung 3 konsumiert die Schnittstelle aus Übung 2 über einen
fetch-basierten JavaScript-Client - direkt in der echten Projekte-Seite der
Website. Der Schwierigkeitsgrad steigt entsprechend von Übung 1
(Routendesign ohne Server) zu Übung 3 (vollständiges Zusammenspiel aus
Client und CRUD-Schnittstelle).

Die Übungen sind dennoch grundsätzlich unabhängig voneinander lösbar: Wer
z.B. nur Übung 3 bearbeiten möchte, findet in deren Aufgabenordner die
fertige Schnittstelle aus Übung 2 vor, ohne Übung 1 oder 2 gelöst zu haben.
Übung 2 lässt sich in zwei Etappen bearbeiten: erst die lesenden
(TODO 1–2), dann die schreibenden Operationen (TODO 3–5).

Bei Bedarf lassen sich die Übungen leicht erweitern, z.B. um eine
XML-Repräsentation zusätzlich zu JSON (Kapitel 9.3), um eine echte
Datenbank (PDO/MySQLi) anstelle der Session, oder um eine Anmeldung
(Kapitel 6), damit nur Alex Berger selbst Projekte bearbeiten kann.

## Wie die Umleitung mit nginx funktioniert

Ein REST-Client ruft URLs wie `api/projekte` oder `api/projekt/2` auf -
Dateien mit diesen Namen gibt es aber nicht, es gibt nur `api/service.php`.
Damit trotzdem jede Anfrage bei `service.php` landet (statt einen 404 zu
erzeugen), braucht der Webserver serverseitiges URL-Rewriting.

Bei nginx geschieht das nicht dezentral pro Verzeichnis - nginx wertet
`.htaccess`-Dateien grundsätzlich nicht aus -, sondern zentral in der
Server-Konfiguration `nginx.conf` mit sogenannten `location`-Blöcken. Die
relevanten Blöcke in der `nginx.conf` dieses Ordners (analog in
`../../solutions/chapter09/nginx.conf`) sehen vereinfacht so aus:

```nginx
location ~ ^/(02_rest_api_aufgabe|03_rest_client_aufgabe)/api/service\.php$ {
    fastcgi_pass php:9000;
    fastcgi_index index.php;
    fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    include fastcgi_params;
}

location ~ ^/(02_rest_api_aufgabe|03_rest_client_aufgabe)/api(/.*)?$ {
    try_files $uri $uri/ /$1/api/service.php?_url=$2;
}
```

- Der **zweite** Block greift für jede Anfrage unterhalb eines
  `api/`-Pfads, z.B. `.../api/projekt/2`. `try_files` prüft der Reihe nach,
  ob eine passende Datei (`$uri`) oder ein passendes Verzeichnis (`$uri/`)
  existiert - das ist hier nie der Fall -, und leitet die Anfrage
  andernfalls intern an `api/service.php` weiter. Der ursprüngliche Pfad
  (`/projekt/2`) wird dabei als Query-Parameter `_url` angehängt, sodass
  `service.php` ihn über `$_REQUEST['_url']` auslesen kann.
- Der **erste**, spezifischere Block sorgt dafür, dass genau diese intern
  weitergeleitete Anfrage an `service.php` tatsächlich von PHP-FPM
  ausgeführt wird (`fastcgi_pass`), statt von der allgemeineren Regel
  darunter als statische Datei ausgeliefert zu werden. Er muss deshalb in
  der `nginx.conf` **vor** dem zweiten Block stehen: nginx verwendet bei
  mehreren passenden `location ~`-Regeln immer die zuerst im File
  stehende.

Diese Konfiguration ist für alle Übungsordner mit `api/`-Unterordner
(Übung 2 und 3) bereits vollständig eingerichtet und ist kein Teil der
Übungen - Sie müssen also weder `nginx.conf` noch das Rewriting selbst
bearbeiten, sondern nur `api/service.php`.

## Ausführung mit Docker

Dieser Ordner sowie `../../solutions/chapter09/` haben je eine eigene
`docker-compose.yml`, die einen nginx-Webserver zusammen mit einem
PHP-FPM-Container startet und unabhängig vom jeweils anderen Ordner
lauffähig ist:

| Ordner | Port | docker-compose.yml |
|---|---|---|
| `exercises/chapter09/` (Aufgaben) | `8009` | in diesem Ordner |
| `solutions/chapter09/` (Lösungen) | `8019` | in `../../solutions/chapter09/` |

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
   - `http://localhost:8019/02_rest_api_loesung/api/projekte` – lesende
     GET-Anfrage, kann direkt im Browser geöffnet werden.
   - `http://localhost:8019/02_rest_api_loesung/api/projekt/1` – GET
     auf ein einzelnes Projekt.
   - `http://localhost:8009/03_rest_client_aufgabe/projekte.html` – die
     echte, um die REST-Schnittstelle ergänzte Projekte-Seite der Website.
     Client und Schnittstelle laufen hier im selben Ordner/Container und
     sprechen sich daher über einen einfachen, relativen (same-origin)
     Pfad (`api/...`) an – keine CORS-Konfiguration nötig. Die
     mitgelieferten CORS-Header in `api/service.php` sind trotzdem gesetzt,
     falls die Schnittstelle später einmal separat betrieben werden soll.

   Für GET-Anfragen genügt der Browser. Für POST-, PUT- und
   DELETE-Anfragen wird dagegen ein Werkzeug benötigt, das diese
   HTTP-Methoden senden kann, da der Browser beim einfachen Aufrufen einer
   Adresse immer nur GET-Anfragen sendet. Jeder Übungsordner mit
   `api/`-Unterordner (Übung 2 und 3) enthält dafür bereits eine Datei
   `api/tests.http` mit vorbereiteten Requests für alle Operationen
   (inkl. Erfolgs- und Fehlerfällen wie einer nicht existierenden id).
   Sie lässt sich direkt im Editor ausführen, sofern eine passende
   Erweiterung installiert ist (z.B. "REST Client" in VS Code; PhpStorm/
   IntelliJ bringen einen HTTP Client bereits eingebaut mit) - einfach
   die gewünschte Datei öffnen und den jeweiligen Request per Klick auf
   "Send Request" (bzw. das grüne Pfeil-Symbol über der Anfrage)
   abschicken.

   Alternativ funktioniert auch curl, z.B.:

   ```
   curl -i -X POST -H "Content-Type: application/json" \
        -d '{"titel":"Neues Projekt","technologie":"Vue.js","jahr":2027,"link":"https://example.com"}' \
        http://localhost:8019/02_rest_api_loesung/api/projekt
   ```

3. Nach der Bearbeitung den jeweiligen Container wieder stoppen:

   ```
   docker compose down
   ```
