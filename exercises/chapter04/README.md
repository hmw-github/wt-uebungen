# Übungsaufgaben zu Kapitel 4: CSS

Diese 7 Übungen decken die zentralen Themen des Kapitels ab (4.2–4.6) und
sind so konzipiert, dass sie direkt nach der jeweiligen Wiederholung im
Vorlesungsteil bearbeitet werden können.

**Durchgängiges Projekt:** Diese Übungen setzen die Portfolio-Website aus
Kapitel 3 fort und gestalten sie mit CSS. Jede Übung besteht aus einem
Aufgabenordner in diesem Verzeichnis und einem gleichnamigen Lösungsordner
im Ordner `../../solutions/chapter04/`. Jeder Ordner enthält den
kompletten aktuellen Stand der Website (vier HTML-Seiten,
`rechtliches/impressum.html`, die Bild-Assets sowie den Ordner `css/` mit
`style.css` und `druck.css`).

| # | Thema (Kapitel) | Aufgabenordner | Lösungsordner |
|---|---|---|---|
| 1 | Einbinden von CSS (4.2) | `01_einbindung_aufgabe/` | `../../solutions/chapter04/01_einbindung_loesung/` |
| 2 | Grundlagen CSS-Selektoren (4.3) | `02_selektoren_grundlagen_aufgabe/` | `../../solutions/chapter04/02_selektoren_grundlagen_loesung/` |
| 3 | Boxmodell (4.4) | `03_boxmodell_aufgabe/` | `../../solutions/chapter04/03_boxmodell_loesung/` |
| 4 | Text und Schrift (4.4) | `04_text_und_schrift_aufgabe/` | `../../solutions/chapter04/04_text_und_schrift_loesung/` |
| 5 | Display und Flexbox (4.4) | `05_display_und_flexbox_aufgabe/` | `../../solutions/chapter04/05_display_und_flexbox_loesung/` |
| 6 | Fortgeschrittene Selektoren (4.5) | `06_fortgeschrittene_selektoren_aufgabe/` | `../../solutions/chapter04/06_fortgeschrittene_selektoren_loesung/` |
| 7 | Responsive Web Design (4.6) | `07_responsive_design_aufgabe/` | `../../solutions/chapter04/07_responsive_design_loesung/` |

## Wie die Website in diesem Kapitel weiterentwickelt wird

Anders als in Kapitel 3 ändern sich die vier HTML-Seiten ab Übung 2 kaum
noch – im Mittelpunkt steht die **eine gemeinsame Datei `css/style.css`**,
die von Übung zu Übung um einen neuen Themenblock wächst (bereits gelöste
Blöcke aus früheren Übungen bleiben dabei unverändert erhalten):

- **Übung 1** bindet `css/style.css` sowie ein separates
  Druck-Stylesheet `css/druck.css` (`media="print"`) in allen Seiten ein
  und ergänzt einen minimalen Reset.
- **Übung 2** vergibt über Typ-, Klassen- und ID-Selektoren die
  Grundfarben und Schriftart der Seite.
- **Übung 3** wendet das Boxmodell auf Navigation, Buttons, Tabellenzellen
  und den Footer an (padding, border, margin, border-radius).
- **Übung 4** verfeinert die Typografie (Schriftart der Überschriften,
  Zeilenhöhe, Schriftgrad).
- **Übung 5** bringt Header und Footer per Flexbox in Form (Logo und
  Navigation nebeneinander, Footer-Links zentriert).
- **Übung 6** ergänzt Pseudoklassen (`:hover`, `:nth-child`),
  Attributselektoren (`input[type="..."]`) und ein Pseudoelement
  (`::after`) für einen kleinen Pfeil hinter externen Links. Zusätzlich
  wird die Projekttabelle mit einem farbig abgesetzten Tabellenkopf
  (`thead`) und einer Hover-Hervorhebung der Zeilen (`tr:hover`)
  verschönert.
- **Übung 7** macht die Website mit einem Media Query
  (`max-width: 600px`) für Smartphones nutzbar: Navigation und
  Formularfelder passen sich auf schmalen Bildschirmen an.

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

Die Übungen bauen ab dieser Kapitelüberarbeitung bewusst eng aufeinander
auf, da `style.css` von Übung zu Übung weiterwächst. Wer dennoch nur eine
einzelne Übung passend zur Folienreihenfolge bearbeiten möchte, kann
jederzeit direkt mit der Musterlösung der vorherigen Übung als
Ausgangspunkt weiterarbeiten. Der Schwierigkeitsgrad steigt leicht von
Übung 1 (einfache Einbindung von CSS) zu Übung 7 (vollständiges
responsives Verhalten über einen Media-Query-Breakpoint).

Bei Bedarf lassen sich die Übungen leicht erweitern, z.B. um zusätzliche
Verständnisfragen (wie in den Folien bereits vorhanden) oder um eine
Kombination mit JavaScript, sobald Kapitel 5 behandelt wird.
