# Übungsaufgaben zu Kapitel 6: PHP

Diese 4 Übungen decken alle Themen des Kapitels ab (6.1–6.5: serverseitige
HTML-Generierung, PHP-Sprachkonzepte, Formularverarbeitung, Session-Handling
und das Model-View-Controller-Muster).

**Durchgängiges Projekt:** Die Portfolio-Website aus den Kapiteln 3–5 wird
in diesem Kapitel schrittweise "serverseitig". Übung 2, 3 und 4 greifen
direkt in die Website ein und bestehen daher aus einem Aufgabenordner mit
dem kompletten aktuellen Stand der Website (deren Startseite `index.php`
dort bereits fertig vorliegt). Übung 1 ist dagegen bewusst eine
eigenständige, einzelne PHP-Datei ohne Bezug zur Website (wie im
Original-Kurskonzept), die grundlegende PHP-Sprachkonzepte anhand der
Projektdaten von Alex Berger einübt.

| # | Thema (Kapitel) | Aufgabendatei/-ordner | Lösungsdatei/-ordner |
|---|---|---|---|
| 1 | PHP-Grundlagen (6.1/6.2) | `01_php_basics_aufgabe.php` | `../../solutions/chapter06/01_php_basics_loesung.php` |
| 2 | Formularverarbeitung mit POST (6.3) | `02_formular_post_aufgabe/` | `../../solutions/chapter06/02_formular_post_loesung/` |
| 3 | Session-Handling (6.4) | `03_sessions_aufgabe/` | `../../solutions/chapter06/03_sessions_loesung/` |
| 4 | Model-View-Controller-Muster (6.5) | `04_mvc2_aufgabe/` | `../../solutions/chapter06/04_mvc2_loesung/` |

## Wie sich die Website in diesem Kapitel verändert

Die Startseite liegt bereits ab Übung 2 fertig als `index.php` vor (kein
Teil einer eigenen Übung); alle Links auf die Startseite wurden in der
gesamten Website bereits entsprechend auf `index.php` angepasst.

- **Übung 1** ist eine eigenständige Datei ohne Bezug zur Website und übt
  anhand der immer gleichen Projektdaten von Alex Berger grundlegende
  PHP-Sprachkonzepte ein: ein "Steckbrief"-Abschnitt mit Variablen,
  `gettype()`, String-Verkettung und `date()`, gefolgt von Abschnitten zu
  Kontrollstrukturen/Arrays sowie Funktionen/Klassen (die Klassen
  `Projekt`/`Webprojekt` kennen Sie bereits aus JavaScript, Kapitel 5,
  Übung 1 - hier entstehen sie in PHP). Diese Übung ersetzt die vormals
  drei eigenständigen Übungen "PHP-Grundlagen und Ausgabe",
  "Kontrollstrukturen und Arrays" sowie "Funktionen und Klassen".
- **Übung 2** setzt `kontakt-verarbeiten.php` um - genau die Datei, auf
  die das Kontaktformular aus Kapitel 3 (Übung 2) bereits verweist. Das
  Formular wird jetzt tatsächlich ausgewertet (inkl. `htmlspecialchars()`
  gegen XSS).
- **Übung 3** macht aus `kontakt.html` eine `kontakt.php` und ergänzt ein
  sitzungsbasiertes Gästebuch: Besucher/-innen können eine kurze Nachricht
  hinterlassen, die für die Dauer der Session gesammelt wird.
- **Übung 4** teilt genau dieses Gästebuch nach dem MVC2-Muster auf einen
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
- Bei Übung 4 (MVC2) sind die TODOs auf mehrere Dateien im Unterordner
  `gaestebuch/` (Controller, Model, View) verteilt; die Verdrahtung
  (Autoloading, Session-Start, Aufruf des Controllers) in
  `gaestebuch/index.php` ist bereits vollständig fertig, damit sich die
  Studierenden auf die eigentlichen MVC-Verantwortlichkeiten konzentrieren
  können.
- Die TODOs beschreiben nur den **zu erzielenden Effekt** (was am Ende im
  Browser, in der Konsole oder in der Server-Antwort zu sehen sein soll),
  nicht den Lösungsweg. Welche Elemente, Selektoren, Eigenschaften,
  Funktionen oder Sprachmittel Sie dafür einsetzen, entscheiden Sie selbst.
  Vorgegebene Namen (Funktionen, ids, Variablen, Schlüssel) sind
  einzuhalten, weil anderer Code darauf zugreift.

## Aufbau jeder Lösungsdatei

- Enthält eine vollständige, funktionsfähige Musterlösung ohne verbleibende
  TODO-Kommentare.
- Kann als Referenz für die Korrektur oder zur Selbstkontrolle verwendet werden.

## Didaktischer Hinweis

Die Übungen bauen inhaltlich leicht aufeinander auf (z.B. verwendet Übung 2
das Kontaktformular aus Kapitel 3, und Übung 4 baut direkt auf dem
Gästebuch aus Übung 3 auf, das dort lediglich in das MVC2-Muster überführt
wird), sind aber unabhängig voneinander lösbar und können auch einzeln
passend zur jeweiligen Folienreihenfolge im Foliensatz eingesetzt werden.
Der Schwierigkeitsgrad steigt leicht von Übung 1 (reine Sprachgrundlagen)
zu Übung 4 (vollständige Aufteilung einer Anwendung nach dem MVC2-Muster
mit Autoloading).

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
   http://localhost:8006/01_php_basics_aufgabe.php
   http://localhost:8016/03_sessions_loesung/kontakt.php
   http://localhost:8006/04_mvc2_aufgabe/gaestebuch/index.php
   ```

3. Nach dem Bearbeiten einer Aufgabendatei die Seite im Browser einfach neu
   laden – Änderungen an den PHP-Dateien werden sofort übernommen (per
   Bind-Mount eingebunden), ein Neustart des Containers ist nicht nötig.

4. Wenn fertig, den jeweiligen Container wieder stoppen:

   ```
   docker compose down
   ```

PHP-Sessions (Übung 3 und 4) funktionieren mit diesem Setup ohne weitere
Konfiguration, da PHP standardmäßig Sessions dateibasiert innerhalb des
PHP-Containers speichert.
