# Übungsaufgaben zu Kapitel 3: HTML

Diese 2 Übungen decken alle Themen des Kapitels ab (3.2–3.8): Übung 1
behandelt alle Themen außer Formularen (3.2–3.7), Übung 2 das
Kontaktformular (3.8).

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
Ordner enthält alle Seiten der Website: In Übung 2 liegen die in Übung 1
gelösten Seiten unverändert mit dabei, damit die Navigation zwischen den
Seiten funktioniert und Sie den Fortschritt der Gesamtseite im Browser
nachvollziehen können.

| # | Thema (Kapitel) | Aufgabenordner | Lösungsordner |
|---|---|---|---|
| 1 | Portfolio-Website: Grundgerüst, Textstrukturierung, Listen, Hyperlinks, Bilder, Tabellen (3.2–3.7) | `01_portfolio_aufgabe/` | `../../solutions/chapter03/01_portfolio_loesung/` |
| 2 | Kontaktformular (3.8) | `02_kontaktformular_aufgabe/` | `../../solutions/chapter03/02_kontaktformular_loesung/` |

## Wie die Website in diesem Kapitel entsteht

- **Übung 1** baut die komplette statische Website auf:
  - `index.html`: HTML5-Grundgerüst, strukturierter Vorstellungstext
    (`div`, `strong`/`em`, `span`, `br`, `pre`, `hr`), Header mit Logo und
    Navigationsmenü (`nav`), Button-Link und Footer.
  - `ueber-mich.html`: Werdegang und Fähigkeiten als Listen, Profilfoto
    und GitHub-Badge als Bilder, Navigation und Footer.
  - `projekte.html`: die Projekte von Alex Berger als Tabelle (dieselben
    drei Beispielprojekte, die auch in späteren Kapiteln – JavaScript, PHP,
    REST – wiederverwendet werden).
  - `rechtliches/impressum.html`: relativer Link ins übergeordnete
    Verzeichnis zurück zur Startseite.
  - `kontakt.html` ist bereits fertig und dient nur als Navigationsziel.

  Die TODO-Nummern zählen pro Datei; `_todos.md` ordnet sie zusätzlich den
  Kapitelthemen zu. Nach dieser Übung ist die Website vollständig über das
  Menü navigierbar.
- **Übung 2** ergänzt ein Kontaktformular auf der Seite "Kontakt", dessen
  `action` bereits auf eine `kontakt-verarbeiten.php` verweist, die in
  Kapitel 6 (PHP) tatsächlich umgesetzt wird. Mit `prepare.sh` bzw.
  `prepare.cmd` lässt sich die eigene Lösung aus Übung 1 übernehmen.

## Aufbau jeder Aufgabendatei

- Die Aufgabenstellung steht in `_todos.md`, gegliedert pro Datei in
  einzelne nummerierte TODOs, die inhaltlich genau den zu ergänzenden
  Stellen im Code entsprechen (in Übung 2 zusätzlich als HTML-Kommentar am
  Anfang von `kontakt.html`).
- Die zu bearbeitenden Stellen sind im Dokument selbst durch
  `<!-- TODO n: ... -->`-Kommentare markiert (leer, ohne vorgegebenen Code),
  sodass Studierende direkt im Browser/Editor sehen, wo etwas fehlt.
- Seiten bzw. Seitenteile, die nicht im Fokus der Übung stehen (z.B.
  Grundgerüst, Navigation und Footer auf `projekte.html` und
  `kontakt.html` in Übung 1, alle Seiten außer `kontakt.html` in Übung 2),
  sind bereits vollständig enthalten und nicht Teil der TODOs.
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

Übung 1 ist bewusst umfangreich und lässt sich entlang der Themen in
Etappen bearbeiten (die Gruppierung in `_todos.md` folgt der
Folienreihenfolge). Wer Übung 1 nicht vollständig gelöst hat, kann für
Übung 2 direkt mit dem vorgegebenen Stand im Aufgabenordner (der der
Musterlösung von Übung 1 entspricht) weiterarbeiten.
