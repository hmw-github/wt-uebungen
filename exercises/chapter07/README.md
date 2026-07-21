# Übungsaufgaben zu Kapitel 7: Bootstrap

Diese 7 Übungen decken die zentralen Themen des Kapitels ab (7.2–7.9:
Container, Grid, Tabellen, Buttons, Cards, Tabs, Formulare, Modal) und sind
so konzipiert, dass sie direkt nach der jeweiligen Wiederholung im
Vorlesungsteil bearbeitet werden können. Jede Übung besteht aus einer
Aufgabendatei (in diesem Ordner) und einer Lösungsdatei im Ordner
`../../solutions/chapter07/`:

| # | Thema (Kapitel) | Aufgabendatei | Lösungsdatei |
|---|---|---|---|
| 1 | Container & Grid (7.2–7.3) | `01_container_grid_aufgabe.html` | `../../solutions/chapter07/01_container_grid_loesung.html` |
| 2 | Tabellen (7.4) | `02_tabellen_aufgabe.html` | `../../solutions/chapter07/02_tabellen_loesung.html` |
| 3 | Buttons (7.5) | `03_buttons_aufgabe.html` | `../../solutions/chapter07/03_buttons_loesung.html` |
| 4 | Cards (7.6) | `04_cards_aufgabe.html` | `../../solutions/chapter07/04_cards_loesung.html` |
| 5 | Tabs (7.7) | `05_tabs_aufgabe.html` | `../../solutions/chapter07/05_tabs_loesung.html` |
| 6 | Formulare (7.8) | `06_formulare_aufgabe.html` | `../../solutions/chapter07/06_formulare_loesung.html` |
| 7 | Modal (7.9) | `07_modal_aufgabe.html` | `../../solutions/chapter07/07_modal_loesung.html` |

## Aufbau jeder Aufgabendatei

- Die Aufgabenstellung steht als HTML-Kommentar am Dateianfang, gegliedert
  in einzelne nummerierte TODOs, die inhaltlich genau den zu ergänzenden
  Stellen im Code entsprechen.
- Die zu bearbeitenden Stellen sind im Dokument selbst durch
  `<!-- TODO n: ... -->`-Kommentare markiert (leer, ohne vorgegebenen Code),
  sodass Studierende direkt im Browser/Editor sehen, wo etwas fehlt.
- Die Dateien sind vollständig lauffähige (wenn auch unvollständige)
  HTML-Dokumente – Studierende können sie direkt im Browser öffnen und ihren
  Fortschritt sofort visuell überprüfen.
- Bootstrap 5 wird in jeder Datei bereits fertig über das offizielle CDN
  eingebunden (CSS im head, Bundle-JS mit Popper vor dem schließenden
  body-Tag) – das Einbinden von Bootstrap selbst ist kein TODO, da es reine
  Boilerplate und nicht das eigentliche Lernziel der Übung ist.

## Aufbau jeder Lösungsdatei

- Enthält eine vollständige, funktionsfähige Musterlösung.
- Kann als Referenz für die Korrektur oder zur Selbstkontrolle verwendet werden.

## Didaktischer Hinweis

Die Übungen bauen inhaltlich leicht aufeinander auf: Übung 4 (Cards) legt
das Personen-Karten-Deck an, das Übung 7 (Modal) wiederaufgreift und um ein
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
