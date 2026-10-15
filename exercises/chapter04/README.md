# Übungsaufgaben zu Kapitel 4: CSS

Diese 3 Übungen decken die zentralen Themen des Kapitels ab (4.2–4.6):
Übung 1 behandelt die CSS-Grundlagen (Einbinden, Selektoren, Boxmodell,
Text und Schrift, 4.2–4.4), Übung 2 Layout mit Float und fortgeschrittene
Selektoren (4.4–4.5) und Übung 3 Responsive Web Design (4.6).

**Durchgängiges Projekt:** Diese Übungen setzen die Portfolio-Website aus
Kapitel 3 fort und gestalten sie mit CSS. Jede Übung besteht aus einem
Aufgabenordner in diesem Verzeichnis und einem gleichnamigen Lösungsordner
im Ordner `../../solutions/chapter04/`. Jeder Ordner enthält den
kompletten aktuellen Stand der Website (vier HTML-Seiten,
`rechtliches/impressum.html`, die Bild-Assets sowie den Ordner `css/` mit
`style.css` und `druck.css`).

| # | Thema (Kapitel) | Aufgabenordner | Lösungsordner |
|---|---|---|---|
| 1 | CSS-Grundlagen: Einbinden, Selektoren, Boxmodell, Text und Schrift (4.2–4.4) | `01_css_grundlagen_aufgabe/` | `../../solutions/chapter04/01_css_grundlagen_loesung/` |
| 2 | Display und Float, fortgeschrittene Selektoren (4.4–4.5) | `02_layout_und_selektoren_aufgabe/` | `../../solutions/chapter04/02_layout_und_selektoren_loesung/` |
| 3 | Responsive Web Design (4.6) | `03_responsive_design_aufgabe/` | `../../solutions/chapter04/03_responsive_design_loesung/` |

## Wie die Website in diesem Kapitel weiterentwickelt wird

Anders als in Kapitel 3 ändern sich die vier HTML-Seiten ab Übung 2 kaum
noch – im Mittelpunkt steht die **eine gemeinsame Datei `css/style.css`**,
die von Übung zu Übung wächst (bereits gelöste Regeln aus früheren
Übungen bleiben dabei unverändert erhalten):

- **Übung 1** legt die Grundlagen, gegliedert in vier Etappen:
  - *Einbinden (4.2):* `css/style.css` sowie ein separates
    Druck-Stylesheet `css/druck.css` (`media="print"`) in allen Seiten
    einbinden und einen minimalen Reset ergänzen.
  - *Selektoren (4.3):* über Typ-, Klassen- und ID-Selektoren die
    Grundfarben und Schriftart der Seite vergeben.
  - *Boxmodell (4.4):* Navigation, Buttons, Tabellenzellen und Footer mit
    padding, border, margin und border-radius gestalten.
  - *Text und Schrift (4.4):* die Typografie verfeinern (Schriftart der
    Überschriften, Zeilenhöhe, Schriftgrad).
- **Übung 2** bringt Header und Footer mit `float` und `text-align` in
  Form (Logo links, Navigation rechts daneben,
  Footer-Links zentriert) und ergänzt
  Pseudoklassen (`:hover`, `:nth-child`), Attributselektoren
  (`input[type="..."]`) und ein Pseudoelement (`::after`) für einen
  kleinen Pfeil hinter externen Links. Zusätzlich wird die Projekttabelle
  mit einem farbig abgesetzten Tabellenkopf (`thead`) und einer
  Hover-Hervorhebung der Zeilen (`tr:hover`) verschönert.
- **Übung 3** macht die Website mit einem Media Query
  (`max-width: 600px`) für Smartphones nutzbar: Navigation und
  Formularfelder passen sich auf schmalen Bildschirmen an.

Die TODO-Nummern zählen pro Datei; `_todos.md` ordnet sie zusätzlich den
Kapitelthemen zu.

## Aufbau jeder Aufgabendatei

- Die Aufgabenstellung steht als HTML- bzw. CSS-Kommentar am Dateianfang,
  gegliedert in einzelne nummerierte TODOs, die inhaltlich genau den zu
  ergänzenden Stellen im Code entsprechen.
- Die zu bearbeitenden Stellen sind im Dokument selbst durch
  `<!-- TODO n: ... -->` bzw. `/* TODO n: ... */`-Kommentare markiert (leer,
  ohne vorgegebenen Code), sodass Studierende direkt im Browser/Editor sehen,
  wo etwas fehlt.
- Bereits in einer früheren Übung fertiggestellte CSS-Regeln bleiben
  unverändert im jeweiligen `style.css` erhalten und sind nicht Teil der
  TODOs.
- Die Ordner sind vollständig lauffähige (wenn auch unvollständige)
  Websites – Studierende können `index.html` direkt im Browser öffnen und
  ihren Fortschritt sofort visuell überprüfen.

## Aufbau jeder Lösungsdatei

- Enthält eine vollständige, funktionsfähige Musterlösung für den
  jeweiligen Stand der Website.
- Kann als Referenz für die Korrektur oder zur Selbstkontrolle verwendet werden.

## Didaktischer Hinweis

Die Übungen bauen bewusst eng aufeinander auf, da `style.css` von Übung
zu Übung weiterwächst. Übung 1 ist umfangreich und lässt sich entlang der
Themen in Etappen bearbeiten (die Gruppierung in `style.css` und
`_todos.md` folgt der Folienreihenfolge). Wer eine Übung nicht vollständig
gelöst hat, kann für die nächste direkt mit dem vorgegebenen Stand im
Aufgabenordner (der der Musterlösung der vorherigen Übung entspricht)
weiterarbeiten. Der Schwierigkeitsgrad steigt leicht von Übung 1
(Einbindung und einfache Regeln) zu Übung 3 (responsives Verhalten über
einen Media-Query-Breakpoint).
