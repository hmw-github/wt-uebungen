# Übungsaufgaben zu Kapitel 5: JavaScript

Diese 7 Übungen decken alle Themen des Kapitels ab (5.1–5.5): Überblick über
JavaScript, die verschiedenen Wege der Einbindung, Sprachkonzepte
(Datentypen, Variablen, Operatoren, Kontrollfluss, Arrays, Objekte, Klassen
und Vererbung, Fehlerbehandlung), JSON sowie das DOM. Sie sind so
konzipiert, dass sie direkt nach der jeweiligen Wiederholung im
Vorlesungsteil bearbeitet werden können. Jede Übung besteht aus einer
Aufgabendatei (in diesem Ordner; Übung 1 zusätzlich aus einer kleinen
externen JavaScript-Datei) und einer Lösungsdatei im Ordner
`../../solutions/chapter05/`:

| # | Thema (Kapitel) | Aufgabendatei | Lösungsdatei |
|---|---|---|---|
| 1 | JavaScript einbinden (5.2) | `01_einbinden_aufgabe.html` + `01_einbinden_script_aufgabe.js` | `../../solutions/chapter05/01_einbinden_loesung.html` + `01_einbinden_script_loesung.js` |
| 2 | Variablen, Datentypen, Operatoren (5.3) | `02_variablen_datentypen_operatoren_aufgabe.html` | `../../solutions/chapter05/02_variablen_datentypen_operatoren_loesung.html` |
| 3 | Kontrollstrukturen (5.3) | `03_kontrollstrukturen_aufgabe.html` | `../../solutions/chapter05/03_kontrollstrukturen_loesung.html` |
| 4 | Arrays und Objekte (5.3) | `04_arrays_und_objekte_aufgabe.html` | `../../solutions/chapter05/04_arrays_und_objekte_loesung.html` |
| 5 | Klassen und Vererbung (5.3, 5.4) | `05_klassen_und_vererbung_aufgabe.html` | `../../solutions/chapter05/05_klassen_und_vererbung_loesung.html` |
| 6 | JSON (5.4) | `06_json_aufgabe.html` | `../../solutions/chapter05/06_json_loesung.html` |
| 7 | DOM-Manipulation (5.5) | `07_dom_manipulation_aufgabe.html` | `../../solutions/chapter05/07_dom_manipulation_loesung.html` |

## Aufbau jeder Aufgabendatei

- Die Aufgabenstellung steht als HTML-Kommentar am Dateianfang, gegliedert
  in einzelne nummerierte TODOs, die inhaltlich genau den zu ergänzenden
  Stellen im Code entsprechen.
- Die zu bearbeitenden Stellen sind im Dokument selbst markiert: durch
  `<!-- TODO n: ... -->`-Kommentare in HTML-Bereichen bzw. durch
  `// TODO n: ...`-Kommentare innerhalb von `<script>`-Blöcken (leer, ohne
  vorgegebenen Code), sodass Studierende direkt im Browser/Editor sehen,
  wo etwas fehlt.
- Anders als in Kapitel 3 sind die Übungen hier bewusst als einzelne,
  vollständig lauffähige HTML-Dokumente mit eingebettetem `<script>`-Block
  gehalten (kein separates .js pro Übung nötig), damit sie ohne Server
  direkt im Browser geöffnet werden können. Eine Ausnahme bildet Übung 1,
  die gezielt die Einbindung per externer Datei (`<script src="...">`)
  behandelt und daher zusätzlich eine kleine `.js`-Datei enthält.
- In den meisten Übungen gibt die Datei bereits eine kleine Hilfsfunktion
  `ausgabe(text)` vor (kein TODO), die den übergebenen Text sowohl per
  `console.log` in der Entwicklerkonsole als auch sichtbar auf der Seite
  (in einem `<pre id="ausgabe">`-Element) ausgibt. So lassen sich die an
  den TODO-Stellen erzielten Ergebnisse sowohl im Browser als auch in der
  Konsole überprüfen, ohne dass Studierende bei jeder Teilaufgabe erneut
  DOM-Code dafür schreiben müssen.
- Die Dateien sind vollständig lauffähige (wenn auch unvollständige)
  HTML-Dokumente – Studierende können sie direkt im Browser öffnen und
  ihren Fortschritt sofort visuell und in der Konsole überprüfen.

## Aufbau jeder Lösungsdatei

- Enthält eine vollständige, funktionsfähige Musterlösung ohne verbliebene
  TODO-Kommentare.
- Kann als Referenz für die Korrektur oder zur Selbstkontrolle verwendet werden.

## Didaktischer Hinweis

Die Übungen bauen inhaltlich leicht aufeinander auf (z.B. setzt Übung 3 die
in Übung 2 geübten Grundlagen zu Variablen und Operatoren voraus, und
Übung 5 baut auf dem Objekt-Konzept aus Übung 4 auf), sind aber unabhängig
voneinander lösbar und können auch einzeln passend zur jeweiligen
Folienreihenfolge im Foliensatz eingesetzt werden. Der Schwierigkeitsgrad
steigt leicht von Übung 1 (reine Einbindungsarten) über die
Sprachgrundlagen (Übungen 2–4) bis zu den anspruchsvolleren Themen Klassen
mit Vererbung und Fehlerbehandlung (Übung 5) sowie DOM-Manipulation mit
Event-Handling (Übung 7).

Bei Bedarf lassen sich die Übungen leicht erweitern, z.B. um zusätzliche
Verständnisfragen (wie in den Folien bereits vorhanden) oder um eine
Verknüpfung mit Kapitel 8 (AJAX/Fetch), sobald dieses behandelt wird.
