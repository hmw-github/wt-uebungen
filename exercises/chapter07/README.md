# Übungsaufgaben zu Kapitel 7: Bootstrap

Diese 7 Übungen decken die zentralen Themen des Kapitels ab (7.2–7.9:
Container, Grid, Tabellen, Buttons, Cards, Tabs, Formulare, Modal).

**Durchgängiges Projekt:** Die Portfolio-Website aus den Kapiteln 3–6 wird
in diesem Kapitel Schritt für Schritt mit Bootstrap 5 überarbeitet. Jede
Übung besteht daher aus einem Aufgabenordner mit dem kompletten aktuellen
Stand der Website und einem gleichnamigen Lösungsordner im Ordner
`../../solutions/chapter07/`.

| # | Thema (Kapitel) | Aufgabenordner | Lösungsordner |
|---|---|---|---|
| 1 | Container & Grid (7.2–7.3) | `01_container_grid_aufgabe/` | `../../solutions/chapter07/01_container_grid_loesung/` |
| 2 | Tabellen (7.4) | `02_tabellen_aufgabe/` | `../../solutions/chapter07/02_tabellen_loesung/` |
| 3 | Buttons (7.5) | `03_buttons_aufgabe/` | `../../solutions/chapter07/03_buttons_loesung/` |
| 4 | Cards (7.6) | `04_cards_aufgabe/` | `../../solutions/chapter07/04_cards_loesung/` |
| 5 | Tabs (7.7) | `05_tabs_aufgabe/` | `../../solutions/chapter07/05_tabs_loesung/` |
| 6 | Formulare (7.8) | `06_formulare_aufgabe/` | `../../solutions/chapter07/06_formulare_loesung/` |
| 7 | Modal (7.9) | `07_modal_aufgabe/` | `../../solutions/chapter07/07_modal_loesung/` |

## Wie die Website in diesem Kapitel überarbeitet wird

- **Übung 1** bindet Bootstrap 5 site-weit über das offizielle CDN ein
  (bereits fertig in allen Seiten ergänzt – kein TODO) und ergänzt auf der
  Startseite einen Abschnitt "Meine Stärken" mit Bootstrap-Grid. Die
  Gegenüberstellung von `container` und `container-fluid` findet auf der
  neuen Seite `technik-spielwiese.php` statt (einer Sammlung kleiner
  Code-Demos, die dort auch die PHP-/JavaScript-Schnipsel früherer Kapitel
  bündelt, damit die Startseite aufgeräumt bleibt).
- **Übung 2** gestaltet die Projekttabelle mit Bootstrap-Tabellenklassen.
- **Übung 3** ersetzt die eigene CSS-Klasse `.btn` aus Kapitel 4 durch
  echte Bootstrap-Button-Klassen (`btn-primary`, `btn-secondary`, ...) auf
  der Startseite, der Projekte-Seite und der Kontaktseite.
- **Übung 4** ist der große Umbau der Projekte-Seite: Statt der Tabelle
  gibt es jetzt ein Karten-Deck (eine Card pro Projekt) mit
  "Bearbeiten"-Button (der vorerst nur eine Meldung anzeigt).
- **Übung 5** wandelt die Abschnitte "Werdegang", "Fähigkeiten" und
  "Begriffe" auf der Seite "Über mich" in Bootstrap-Tabs um.
- **Übung 6** gestaltet das Kontaktformular mit Bootstrap-Formularklassen
  inkl. einer einfachen clientseitigen Prüfung des E-Mail-Felds.
- **Übung 7** baut auf Übung 4 auf: Der "Bearbeiten"-Button der
  Projekt-Karten öffnet jetzt ein Bootstrap-Modal mit einem
  Bearbeitungsformular. Diese Änderungen sind noch rein clientseitig und
  gehen beim Neuladen der Seite verloren – in Kapitel 9 (REST) entsteht
  die echte Schnittstelle, die Änderungen dauerhaft speichert.

## Aufbau jeder Aufgabendatei

- Die Aufgabenstellung steht als HTML-Kommentar am Dateianfang, gegliedert
  in einzelne nummerierte TODOs, die inhaltlich genau den zu ergänzenden
  Stellen im Code entsprechen.
- Die zu bearbeitenden Stellen sind im Dokument selbst durch
  `<!-- TODO n: ... -->`-Kommentare markiert (leer, ohne vorgegebenen Code),
  sodass Studierende direkt im Browser/Editor sehen, wo etwas fehlt.
- Die Dateien sind vollständig lauffähige (wenn auch unvollständige)
  HTML/PHP-Dokumente. Da jeder Übungsordner PHP-Endpunkte enthält
  (`kontakt-verarbeiten.php` u.a.), reicht ein einfacher Doppelklick im
  Dateibrowser nicht aus – Studierende rufen den jeweiligen Ordner
  stattdessen über den in Docker laufenden PHP-Server auf (siehe
  "Ausführung mit Docker" unten) und überprüfen ihren Fortschritt sofort
  im Browser.
- Bootstrap 5 wird ab Übung 1 in jeder Seite bereits fertig über das
  offizielle CDN eingebunden (CSS im head, Bundle-JS mit Popper vor dem
  schließenden body-Tag) – das Einbinden von Bootstrap selbst ist kein
  TODO, da es reine Boilerplate und nicht das eigentliche Lernziel der
  Übung ist.

## Aufbau jeder Lösungsdatei

- Enthält eine vollständige, funktionsfähige Musterlösung.
- Kann als Referenz für die Korrektur oder zur Selbstkontrolle verwendet werden.

## Didaktischer Hinweis

Die Übungen bauen inhaltlich aufeinander auf: Übung 4 (Cards) legt das
Projekt-Karten-Deck an, das Übung 7 (Modal) wiederaufgreift und um ein
Bearbeitungsformular in einem Modal erweitert (statt der einfachen
Platzhalter-Meldung aus Übung 4). Alle anderen Übungen sind unabhängig
voneinander lösbar und können auch einzeln passend zur jeweiligen
Folienreihenfolge im Foliensatz eingesetzt werden. Der Schwierigkeitsgrad
steigt leicht von Übung 1 (Container/Grid als Layout-Grundlage) zu Übung 7
(Zusammenspiel aus Cards, Formularfeldern und JavaScript-gesteuertem Modal).

Bei Bedarf lassen sich die Übungen leicht erweitern, z.B. um zusätzliche
Verständnisfragen (wie in den Folien bereits vorhanden) oder um weitere
Bootstrap-Komponenten (Alerts, Navbar, Badges), sobald diese im Kurs
vertieft werden.

## Ausführung mit Docker

Da jeder Übungsordner PHP-Endpunkte enthält (aus Kapitel 6 übernommen),
wird ein PHP-fähiger Webserver benötigt. Sowohl dieser Ordner als auch
`../../solutions/chapter07/` haben dafür je eine eigene
`docker-compose.yml`, die einen nginx-Webserver zusammen mit einem
PHP-FPM-Container startet. Beide Setups sind unabhängig voneinander
lauffähig – die Lösungen benötigen also nicht den Aufgaben-Container und
umgekehrt. Xdebug ist bereits vorkonfiguriert (siehe `xdebug.ini`), sodass
sich einzelne TODO-Stellen bei Bedarf auch per Schritt-für-Schritt-Debugger
in der IDE untersuchen lassen.

| Ordner | Port | docker-compose.yml |
|---|---|---|
| `exercises/chapter07/` (Aufgaben) | `8007` | in diesem Ordner |
| `solutions/chapter07/` (Lösungen) | `8017` | in `../../solutions/chapter07/` |

1. Im Terminal in den gewünschten Ordner wechseln und den Container starten,
   z.B. für die Aufgaben:

   ```
   cd exercises/chapter07
   docker compose up -d
   ```

   bzw. für die Lösungen:

   ```
   cd solutions/chapter07
   docker compose up -d
   ```

2. Im Browser die gewünschte Übung öffnen, z.B.:

   ```
   http://localhost:8007/01_container_grid_aufgabe/index.php
   http://localhost:8017/07_modal_loesung/index.php
   ```

3. Nach dem Bearbeiten einer Aufgabendatei die Seite im Browser einfach neu
   laden – Änderungen an den Dateien werden sofort übernommen (per
   Bind-Mount eingebunden), ein Neustart des Containers ist nicht nötig.

4. Wenn fertig, den jeweiligen Container wieder stoppen:

   ```
   docker compose down
   ```
