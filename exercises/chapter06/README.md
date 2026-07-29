# Übungsaufgaben zu Kapitel 6: PHP

Diese 7 Übungen decken alle Themen des Kapitels ab (6.1–6.5: serverseitige
HTML-Generierung, PHP-Sprachkonzepte, Formularverarbeitung, Session-Handling
und das Model-View-Controller-Muster).

**Durchgängiges Projekt:** Die Portfolio-Website aus den Kapiteln 3–5 wird
in diesem Kapitel schrittweise "serverseitig". Übung 1, 5, 6 und 7 greifen
direkt in die Website ein und bestehen daher aus einem Aufgabenordner mit
dem kompletten aktuellen Stand der Website. Übung 2–4 sind dagegen bewusst
eigenständige, einzelne PHP-Dateien (wie im Original-Kurskonzept), die
grundlegende PHP-Konzepte anhand derselben Projektdaten (Technologien,
Jahre, die Klassen Projekt/Webprojekt) einüben.

| # | Thema (Kapitel) | Aufgabendatei/-ordner | Lösungsdatei/-ordner |
|---|---|---|---|
| 1 | PHP-Grundlagen und Ausgabe (6.1/6.2) | `01_grundlagen_ausgabe_aufgabe/` | `../../solutions/chapter06/01_grundlagen_ausgabe_loesung/` |
| 2 | Kontrollstrukturen und Arrays (6.2) | `02_kontrollstrukturen_arrays_aufgabe.php` | `../../solutions/chapter06/02_kontrollstrukturen_arrays_loesung.php` |
| 3 | Funktionen und Klassen (6.2) | `03_funktionen_klassen_aufgabe.php` | `../../solutions/chapter06/03_funktionen_klassen_loesung.php` |
| 4 | Formularverarbeitung mit GET (6.3) | `04_formular_get_aufgabe.php` | `../../solutions/chapter06/04_formular_get_loesung.php` |
| 5 | Formularverarbeitung mit POST (6.3) | `05_formular_post_aufgabe/` | `../../solutions/chapter06/05_formular_post_loesung/` |
| 6 | Session-Handling (6.4) | `06_sessions_aufgabe/` | `../../solutions/chapter06/06_sessions_loesung/` |
| 7 | Model-View-Controller-Muster (6.5) | `07_mvc2_aufgabe/` | `../../solutions/chapter06/07_mvc2_loesung/` |

## Wie sich die Website in diesem Kapitel verändert

- **Übung 1** macht aus der statischen Startseite `index.html` eine
  `index.php`: ein "Steckbrief"-Abschnitt mit Variablen, `gettype()`,
  String-Verkettung und `date()` kommt hinzu. Alle Links auf die
  Startseite werden in der gesamten Website entsprechend auf `index.php`
  angepasst.
- **Übungen 2–4** sind eigenständige Dateien und behandeln
  Kontrollstrukturen/Arrays, Funktionen/Klassen (die Klassen
  `Projekt`/`Webprojekt` kennen Sie bereits aus JavaScript, Kapitel 5,
  Übung 5 - hier entstehen sie in PHP) sowie Formularverarbeitung mit GET
  anhand eines kleinen "Projekte filtern"-Suchformulars.
- **Übung 5** setzt `kontakt-verarbeiten.php` um - genau die Datei, auf
  die das Kontaktformular aus Kapitel 3 (Übung 7) bereits verweist. Das
  Formular wird jetzt tatsächlich ausgewertet (inkl. `htmlspecialchars()`
  gegen XSS).
- **Übung 6** macht aus `kontakt.html` eine `kontakt.php` und ergänzt ein
  sitzungsbasiertes Gästebuch: Besucher/-innen können eine kurze Nachricht
  hinterlassen, die für die Dauer der Session gesammelt wird.
- **Übung 7** teilt genau dieses Gästebuch nach dem MVC2-Muster auf einen
  eigenen Einstiegspunkt `gaestebuch/index.php` auf
  (`Controller.php`/`Gästebuch.php`/`GaestebuchView.php`); `kontakt.php`
  verlinkt fortan nur noch dorthin. In Kapitel 8 (AJAX) wird dieses
  Gästebuch so erweitert, dass neue Einträge ohne Seitenneuladen erscheinen.

## Aufbau jeder Aufgabendatei

- Die Aufgabenstellung steht als Kommentar am Dateianfang (HTML-Kommentar
  `<!-- -->` bzw. PHP-Kommentar `/* */`, je nachdem womit die Datei beginnt),
  gegliedert in einzelne nummerierte TODOs, die inhaltlich genau den zu
  ergänzenden Stellen im Code entsprechen.
- Die zu bearbeitenden Stellen sind im Dokument selbst durch
  `<!-- TODO n: ... -->`- bzw. `// TODO n: ...`-Kommentare markiert (leer,
  ohne vorgegebenen Code), sodass Studierende direkt im Editor sehen, wo
  etwas fehlt.
- Die Dateien bzw. Ordner sind vollständig lauffähige (wenn auch
  unvollständige) PHP-Seiten – Studierende können sie jederzeit über einen
  lokalen PHP-Webserver aufrufen und ihren Fortschritt sofort im Browser
  überprüfen.
- Bei Übung 7 (MVC2) sind die TODOs auf mehrere Dateien im Unterordner
  `gaestebuch/` (Controller, Model, View) verteilt; die Verdrahtung
  (Autoloading, Session-Start, Aufruf des Controllers) in
  `gaestebuch/index.php` ist bereits vollständig fertig, damit sich die
  Studierenden auf die eigentlichen MVC-Verantwortlichkeiten konzentrieren
  können.

## Aufbau jeder Lösungsdatei

- Enthält eine vollständige, funktionsfähige Musterlösung ohne verbleibende
  TODO-Kommentare.
- Kann als Referenz für die Korrektur oder zur Selbstkontrolle verwendet werden.

## Didaktischer Hinweis

Die Übungen bauen inhaltlich leicht aufeinander auf (z.B. verwendet Übung 5
das Kontaktformular aus Kapitel 3, und Übung 7 baut direkt auf dem
Gästebuch aus Übung 6 auf, das dort lediglich in das MVC2-Muster überführt
wird), sind aber unabhängig voneinander lösbar und können auch einzeln
passend zur jeweiligen Folienreihenfolge im Foliensatz eingesetzt werden.
Der Schwierigkeitsgrad steigt leicht von Übung 1 (reine Sprachgrundlagen)
zu Übung 7 (vollständige Aufteilung einer Anwendung nach dem MVC2-Muster
mit Autoloading).

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

2. Im Browser die gewünschte Übungsdatei bzw. den gewünschten Übungsordner
   aufrufen, z.B.:

   ```
   http://localhost:8006/01_grundlagen_ausgabe_aufgabe/index.php
   http://localhost:8016/06_sessions_loesung/kontakt.php
   http://localhost:8006/07_mvc2_aufgabe/gaestebuch/index.php
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
