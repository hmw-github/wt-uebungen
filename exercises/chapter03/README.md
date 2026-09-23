# Übungsaufgaben zu Kapitel 3: HTML

Diese 7 Übungen decken alle Themen des Kapitels ab (3.2–3.8) und sind so
konzipiert, dass sie direkt nach der jeweiligen Wiederholung im
Vorlesungsteil bearbeitet werden können.

**Durchgängiges Projekt:** Ab diesem Kapitel bauen Sie Schritt für Schritt
Ihre eigene kleine Portfolio-Website für die fiktive Person "Alex Berger"
auf – mit einer Startseite, den Unterseiten "Über mich", "Projekte" und
"Kontakt" sowie einem Navigationsmenü, über das alle Seiten erreichbar
sind. Diese Website zieht sich durch den gesamten Kurs: In Kapitel 4 wird
sie mit CSS gestaltet, in Kapitel 5 mit JavaScript interaktiver gemacht, in
Kapitel 6 auf PHP umgestellt, in Kapitel 7 mit Bootstrap überarbeitet und
ab Kapitel 8/9 über AJAX bzw. eine selbst gebaute REST-Schnittstelle mit
Daten versorgt.

Jede Übung besteht aus einem Aufgabenordner in diesem Verzeichnis und einem
gleichnamigen Lösungsordner im Ordner `../../solutions/chapter03/`. Jeder
Ordner enthält den **kompletten aktuellen Stand der Website**: bereits
gelöste Seiten aus früheren Übungen liegen unverändert mit dabei, damit die
Navigation zwischen den Seiten jederzeit funktioniert und Sie den
Fortschritt der Gesamtseite im Browser nachvollziehen können.

| # | Thema (Kapitel) | Aufgabenordner | Lösungsordner |
|---|---|---|---|
| 1 | Dokumentaufbau & Syntax (3.2) | `01_grundgeruest_aufgabe/` | `../../solutions/chapter03/01_grundgeruest_loesung/` |
| 2 | Textstrukturierung & -formatierung (3.3) | `02_textstrukturierung_aufgabe/` | `../../solutions/chapter03/02_textstrukturierung_loesung/` |
| 3 | Listen (3.4) | `03_listen_aufgabe/` | `../../solutions/chapter03/03_listen_loesung/` |
| 4 | Hyperlinks (3.5) | `04_hyperlinks_aufgabe/` | `../../solutions/chapter03/04_hyperlinks_loesung/` |
| 5 | Bilder (3.6) | `05_bilder_aufgabe/` | `../../solutions/chapter03/05_bilder_loesung/` |
| 6 | Tabellen (3.7) | `06_tabellen_aufgabe/` | `../../solutions/chapter03/06_tabellen_loesung/` |
| 7 | Formulare (3.8) | `07_formulare_aufgabe/` | `../../solutions/chapter03/07_formulare_loesung/` |

## Wie die Website in diesem Kapitel entsteht

- **Übung 1** legt das HTML5-Grundgerüst aller vier Seiten an
  (`index.html`, `ueber-mich.html`, `projekte.html`, `kontakt.html`).
- **Übung 2** füllt die Startseite mit strukturiertem Vorstellungstext.
- **Übung 3** ergänzt auf der Seite "Über mich" Werdegang und Fähigkeiten
  als Listen.
- **Übung 4** verdrahtet die Seiten über ein Navigationsmenü (Header mit
  Logo und `nav`) sowie einen Footer miteinander und führt zusätzlich eine
  Impressum-Seite in einem Unterordner (`rechtliches/impressum.html`) ein,
  um auch einen relativen Link ins übergeordnete Verzeichnis zu üben. Ab
  hier ist die Website zum ersten Mal vollständig über das Menü
  navigierbar.
- **Übung 5** ergänzt ein Profilfoto auf der Seite "Über mich".
- **Übung 6** stellt die Projekte von Alex Berger als Tabelle auf der Seite
  "Projekte" dar (dieselben drei Beispielprojekte, die auch in späteren
  Kapiteln – JavaScript, PHP, REST – wiederverwendet werden).
- **Übung 7** ergänzt ein Kontaktformular auf der Seite "Kontakt", dessen
  `action` bereits auf eine `kontakt-verarbeiten.php` verweist, die in
  Kapitel 6 (PHP) tatsächlich umgesetzt wird.

## Aufbau jeder Aufgabendatei

- Die Aufgabenstellung steht als HTML-Kommentar am Dateianfang, gegliedert
  in einzelne nummerierte TODOs, die inhaltlich genau den zu ergänzenden
  Stellen im Code entsprechen.
- Die zu bearbeitenden Stellen sind im Dokument selbst durch
  `<!-- TODO n: ... -->`-Kommentare markiert (leer, ohne vorgegebenen Code),
  sodass Studierende direkt im Browser/Editor sehen, wo etwas fehlt.
- Bereits in einer früheren Übung fertiggestellte Seiten bzw. Seitenteile
  (z.B. Navigation und Footer auf Seiten, die in der aktuellen Übung nicht
  im Fokus stehen) sind bereits vollständig enthalten und nicht Teil der
  TODOs.
- Die Dateien sind vollständig lauffähige (wenn auch unvollständige)
  HTML-Dokumente – Studierende können den jeweiligen Ordner direkt im
  Browser öffnen (`index.html` per Doppelklick) und ihren Fortschritt sofort
  visuell überprüfen, inklusive funktionierender Links zwischen den Seiten.

## Aufbau jeder Lösungsdatei

- Enthält eine vollständige, funktionsfähige Musterlösung für den
  jeweiligen Stand der Website.
- Kann als Referenz für die Korrektur oder zur Selbstkontrolle verwendet
  werden.

## Didaktischer Hinweis

Die Übungen bauen ab dieser Kapitelüberarbeitung bewusst eng aufeinander
auf, da sie gemeinsam eine einzige, zusammenhängende Website ergeben. Wer
dennoch nur eine einzelne Übung passend zur Folienreihenfolge bearbeiten
möchte, kann jederzeit direkt mit der Musterlösung der vorherigen Übung als
Ausgangspunkt weiterarbeiten. Der Schwierigkeitsgrad steigt leicht von
Übung 1 (reines Grundgerüst für vier einfache Seiten) zu Übung 7
(vollständiges Kontaktformular mit mehreren Eingabetypen).
