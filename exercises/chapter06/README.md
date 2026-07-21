# Übungsaufgaben zu Kapitel 6: PHP

Diese 7 Übungen decken alle Themen des Kapitels ab (6.1–6.5: serverseitige
HTML-Generierung, PHP-Sprachkonzepte, Formularverarbeitung, Session-Handling
und das Model-View-Controller-Muster) und sind so konzipiert, dass sie direkt
nach der jeweiligen Wiederholung im Vorlesungsteil bearbeitet werden können.
Jede Übung besteht aus einer Aufgabendatei in diesem Ordner und einer
Lösungsdatei im Ordner `../../solutions/chapter06/` (bzw. bei Übung 7 aus
zwei Ordnern mit mehreren Dateien, da hier das MVC2-Muster mit mehreren
Klassen umgesetzt wird).

| # | Thema (Kapitel) | Aufgabendatei | Lösungsdatei |
|---|---|---|---|
| 1 | PHP-Grundlagen und Ausgabe (6.1/6.2) | `01_grundlagen_ausgabe_aufgabe.php` | `../../solutions/chapter06/01_grundlagen_ausgabe_loesung.php` |
| 2 | Kontrollstrukturen und Arrays (6.2) | `02_kontrollstrukturen_arrays_aufgabe.php` | `../../solutions/chapter06/02_kontrollstrukturen_arrays_loesung.php` |
| 3 | Funktionen und Klassen (6.2) | `03_funktionen_klassen_aufgabe.php` | `../../solutions/chapter06/03_funktionen_klassen_loesung.php` |
| 4 | Formularverarbeitung mit GET (6.3) | `04_formular_get_aufgabe.php` | `../../solutions/chapter06/04_formular_get_loesung.php` |
| 5 | Formularverarbeitung mit POST (6.3) | `05_formular_post_aufgabe.php` | `../../solutions/chapter06/05_formular_post_loesung.php` |
| 6 | Session-Handling (6.4) | `06_sessions_aufgabe.php` | `../../solutions/chapter06/06_sessions_loesung.php` |
| 7 | Model-View-Controller-Muster (6.5) | `07_mvc2_aufgabe/` (mehrere Dateien) | `../../solutions/chapter06/07_mvc2_loesung/` (mehrere Dateien) |

## Aufbau jeder Aufgabendatei

- Die Aufgabenstellung steht als Kommentar am Dateianfang (HTML-Kommentar
  `<!-- -->` bzw. PHP-Kommentar `/* */`, je nachdem womit die Datei beginnt),
  gegliedert in einzelne nummerierte TODOs, die inhaltlich genau den zu
  ergänzenden Stellen im Code entsprechen.
- Die zu bearbeitenden Stellen sind im Dokument selbst durch
  `<!-- TODO n: ... -->`- bzw. `// TODO n: ...`-Kommentare markiert (leer,
  ohne vorgegebenen Code), sodass Studierende direkt im Editor sehen, wo
  etwas fehlt.
- Die Dateien sind vollständig lauffähige (wenn auch unvollständige)
  PHP-Seiten – Studierende können sie jederzeit über einen lokalen
  PHP-Webserver aufrufen und ihren Fortschritt sofort im Browser überprüfen.
- Bei Übung 7 (MVC2) sind die TODOs auf mehrere Dateien (Controller, Model,
  View) verteilt; die Verdrahtung (Autoloading, Session-Start, Aufruf des
  Controllers) in `index.php` ist bereits vollständig fertig, damit sich
  die Studierenden auf die eigentlichen MVC-Verantwortlichkeiten
  konzentrieren können.

## Aufbau jeder Lösungsdatei

- Enthält eine vollständige, funktionsfähige Musterlösung ohne verbleibende
  TODO-Kommentare.
- Kann als Referenz für die Korrektur oder zur Selbstkontrolle verwendet werden.

## Didaktischer Hinweis

Die Übungen bauen inhaltlich leicht aufeinander auf (z.B. verwendet Übung 5
das Formular-Konzept aus Übung 4 weiter, und Übung 7 baut direkt auf dem
Session-Protokoll aus Übung 6 auf, das dort lediglich in das MVC2-Muster
überführt wird), sind aber unabhängig voneinander lösbar und können auch
einzeln passend zur jeweiligen Folienreihenfolge im Foliensatz eingesetzt
werden. Der Schwierigkeitsgrad steigt leicht von Übung 1 (reine
Sprachgrundlagen) zu Übung 7 (vollständige Aufteilung einer Anwendung nach
dem MVC2-Muster mit Autoloading).

Bei Bedarf lassen sich die Übungen leicht erweitern, z.B. um zusätzliche
Verständnisfragen (wie in den Folien bereits vorhanden) oder um eine
Anbindung an eine Datenbank, sobald ein späteres Kapitel Datenbankzugriff
(z.B. PDO/MySQLi) behandelt.

## Ausführung mit Docker

Da PHP-Dateien einen Webserver mit PHP-Interpreter benötigen (ein Doppelklick
im Dateibrowser reicht anders als bei den HTML-Übungen aus Kapitel 3 nicht
aus), liegt sowohl diesem Ordner als auch `../../solutions/chapter06/` je
eine eigene `docker-compose.yml` bei. Beide starten einen nginx-Webserver
(Port 80 im Container) zusammen mit einem PHP-FPM-Container und sind völlig
unabhängig voneinander lauffähig – die Lösungen benötigen also nicht den
Aufgaben-Container und umgekehrt.

| Ordner | Port | docker-compose.yml |
|---|---|---|
| `exercises/chapter06/` (Aufgaben) | `8006` | in diesem Ordner |
| `solutions/chapter06/` (Lösungen) | `8016` | in `../../solutions/chapter06/` |

1. Im Terminal in den gewünschten Ordner wechseln und den Container starten,
   z.B. für die Aufgaben:

   ```
   cd exercises/chapter06
   docker compose up -d
   ```

   bzw. für die Lösungen:

   ```
   cd solutions/chapter06
   docker compose up -d
   ```

2. Im Browser die gewünschte Übungsdatei aufrufen, z.B.:

   ```
   http://localhost:8006/01_grundlagen_ausgabe_aufgabe.php
   http://localhost:8016/06_sessions_loesung.php
   ```

   Für die MVC2-Übung (Übung 7) wird stattdessen der `index.php`-Einstiegspunkt
   im jeweiligen Unterordner aufgerufen:

   ```
   http://localhost:8006/07_mvc2_aufgabe/index.php
   http://localhost:8016/07_mvc2_loesung/index.php
   ```

3. Nach dem Bearbeiten einer Aufgabendatei die Seite im Browser einfach neu
   laden – Änderungen an den PHP-Dateien werden sofort übernommen (per
   Bind-Mount eingebunden), ein Neustart des Containers ist nicht nötig.

4. Wenn fertig, den jeweiligen Container wieder stoppen:

   ```
   docker compose down
   ```

PHP-Sessions (Übung 6 und 7) funktionieren mit diesem Setup ohne weitere
Konfiguration, da PHP standardmäßig Sessions dateibasiert innerhalb des
PHP-Containers speichert.
