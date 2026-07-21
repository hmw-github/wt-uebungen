# Übungsaufgaben zu Kapitel 4: CSS

Diese 7 Übungen decken die zentralen Themen des Kapitels ab (4.2–4.6) und
sind so konzipiert, dass sie direkt nach der jeweiligen Wiederholung im
Vorlesungsteil bearbeitet werden können. Jede Übung besteht aus einer
Aufgabendatei (in diesem Ordner) und einer Lösungsdatei (im Ordner
`../../solutions/chapter04/`, siehe Tabelle):

| # | Thema (Kapitel) | Aufgabendatei | Lösungsdatei |
|---|---|---|---|
| 1 | Einbinden von CSS (4.2) | `01_einbindung_aufgabe.html` | `../../solutions/chapter04/01_einbindung_loesung.html` |
| 2 | Grundlagen CSS-Selektoren (4.3) | `02_selektoren_grundlagen_aufgabe.html` | `../../solutions/chapter04/02_selektoren_grundlagen_loesung.html` |
| 3 | Boxmodell (4.4) | `03_boxmodell_aufgabe.html` | `../../solutions/chapter04/03_boxmodell_loesung.html` |
| 4 | Text und Schrift (4.4) | `04_text_und_schrift_aufgabe.html` | `../../solutions/chapter04/04_text_und_schrift_loesung.html` |
| 5 | Display und Flexbox (4.4) | `05_display_und_flexbox_aufgabe.html` | `../../solutions/chapter04/05_display_und_flexbox_loesung.html` |
| 6 | Fortgeschrittene Selektoren (4.5) | `06_fortgeschrittene_selektoren_aufgabe.html` | `../../solutions/chapter04/06_fortgeschrittene_selektoren_loesung.html` |
| 7 | Responsive Web Design (4.6) | `07_responsive_design_aufgabe.html` | `../../solutions/chapter04/07_responsive_design_loesung.html` |

Übung 1 bringt zusätzlich zwei kleine CSS-Begleitdateien mit
(`01_einbindung_style_aufgabe.css`, `01_einbindung_druck_aufgabe.css` in
diesem Ordner, sowie die passenden `_loesung.css`-Varianten im
Lösungsordner), da hier gezielt das Einbinden von externen Stylesheets
(inkl. Druck-Stylesheet über `media="print"`) geübt wird.

## Aufbau jeder Aufgabendatei

- Die Aufgabenstellung steht als HTML- bzw. CSS-Kommentar am Dateianfang,
  gegliedert in einzelne nummerierte TODOs, die inhaltlich genau den zu
  ergänzenden Stellen im Code entsprechen.
- Die zu bearbeitenden Stellen sind im Dokument selbst durch
  `<!-- TODO n: ... -->` bzw. `/* TODO n: ... */`-Kommentare markiert (leer,
  ohne vorgegebenen Code), sodass Studierende direkt im Browser/Editor sehen,
  wo etwas fehlt.
- Die Dateien sind vollständig lauffähige (wenn auch unvollständige)
  HTML/CSS-Dokumente – Studierende können sie direkt im Browser öffnen und
  ihren Fortschritt sofort visuell überprüfen.

## Aufbau jeder Lösungsdatei

- Enthält eine vollständige, funktionsfähige Musterlösung.
- Kann als Referenz für die Korrektur oder zur Selbstkontrolle verwendet werden.

## Didaktischer Hinweis

Die Übungen bauen inhaltlich leicht aufeinander auf (z.B. nutzt Übung 3 das
Boxmodell-Wissen aus Übung 1 und 2 weiter, und Übung 7 kombiniert die
Flexbox-Kenntnisse aus Übung 5 mit Media Queries), sind aber unabhängig
voneinander lösbar und können auch einzeln passend zur jeweiligen
Folienreihenfolge im Foliensatz eingesetzt werden. Der Schwierigkeitsgrad
steigt leicht von Übung 1 (einfache Einbindungsarten von CSS) zu Übung 7
(vollständiges responsives Grid-Layout mit mehreren
Media-Query-Breakpoints).

Bei Bedarf lassen sich die Übungen leicht erweitern, z.B. um zusätzliche
Verständnisfragen (wie in den Folien bereits vorhanden) oder um eine
Kombination mit JavaScript, sobald Kapitel 5 behandelt wird.
