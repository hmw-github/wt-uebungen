# Übungsaufgaben zu Kapitel 5: JavaScript

Diese 7 Übungen decken alle Themen des Kapitels ab (5.1–5.5): Überblick über
JavaScript, die verschiedenen Wege der Einbindung, Sprachkonzepte
(Datentypen, Variablen, Operatoren, Kontrollfluss, Arrays, Objekte, Klassen
und Vererbung, Fehlerbehandlung), JSON sowie das DOM.

**Durchgängiges Projekt:** Übung 1 und Übung 7 greifen direkt in die
Portfolio-Website aus den Kapiteln 3 und 4 ein und bestehen daher – wie in
Kapitel 3 und 4 – aus einem Aufgabenordner mit dem kompletten aktuellen
Stand der Website. Die Übungen 2 bis 6 sind dagegen bewusst eigenständige,
einzelne HTML-Dateien (wie im Original-Kurskonzept), die grundlegende
Sprachkonzepte anhand der immer gleichen Projektdaten von Alex Berger
(Titel, Technologie, Jahr) einüben, ohne dass Studierende dafür die
eigentlichen Website-Dateien anfassen müssen.

| # | Thema (Kapitel) | Aufgabendatei/-ordner | Lösungsdatei/-ordner |
|---|---|---|---|
| 1 | JavaScript einbinden (5.2) | `01_einbinden_aufgabe/` | `../../solutions/chapter05/01_einbinden_loesung/` |
| 2 | Variablen, Datentypen, Operatoren (5.3) | `02_variablen_datentypen_operatoren_aufgabe.html` | `../../solutions/chapter05/02_variablen_datentypen_operatoren_loesung.html` |
| 3 | Kontrollstrukturen (5.3) | `03_kontrollstrukturen_aufgabe.html` | `../../solutions/chapter05/03_kontrollstrukturen_loesung.html` |
| 4 | Arrays und Objekte (5.3) | `04_arrays_und_objekte_aufgabe.html` | `../../solutions/chapter05/04_arrays_und_objekte_loesung.html` |
| 5 | Klassen und Vererbung (5.3, 5.4) | `05_klassen_und_vererbung_aufgabe.html` | `../../solutions/chapter05/05_klassen_und_vererbung_loesung.html` |
| 6 | JSON (5.4) | `06_json_aufgabe.html` | `../../solutions/chapter05/06_json_loesung.html` |
| 7 | DOM-Manipulation (5.5) | `07_dom_manipulation_aufgabe/` | `../../solutions/chapter05/07_dom_manipulation_loesung/` |

## Wie sich die Übungen auf die Website und die Sprachgrundlagen aufteilen

- **Übung 1** bindet auf der Startseite (`index.html`) ein externes Skript
  `js/begruessung.js` ein und zeigt dabei alle drei Einbindungsarten
  (inline im `<script>`-Block, `javascript:`-Pseudo-Protokoll,
  `onclick`-Attribut mit externer Funktion).
- **Übungen 2–6** sind eigenständige Dateien mit der bekannten
  Hilfsfunktion `ausgabe(text)` (siehe unten) und behandeln anhand der
  immer gleichen drei Beispielprojekte (Wetter-App, Rezeptsammlung,
  Portfolio-Website) Variablen/Datentypen/Operatoren, Kontrollstrukturen,
  Arrays/Objekte, Klassen mit Vererbung sowie JSON.
- **Übung 7** ist der Höhepunkt des Kapitels: Die bisher statische
  Projekttabelle auf `projekte.html` wird durch echte DOM-Manipulation aus
  einem JavaScript-Array heraus erzeugt (inkl. eines Buttons, der Projekte
  aus 2026 per `classList.toggle` hervorhebt). Genau dieses Array
  (`titel`, `technologie`, `jahr`, `link`) wird in Kapitel 6 zu
  serverseitigen PHP-Daten und in Kapitel 9 zur JSON-Antwort einer echten
  REST-Schnittstelle.

## Aufbau jeder Aufgabendatei

- Die Aufgabenstellung steht als HTML-Kommentar am Dateianfang, gegliedert
  in einzelne nummerierte TODOs, die inhaltlich genau den zu ergänzenden
  Stellen im Code entsprechen.
- Die zu bearbeitenden Stellen sind im Dokument selbst markiert: durch
  `<!-- TODO n: ... -->`-Kommentare in HTML-Bereichen bzw. durch
  `// TODO n: ...`-Kommentare innerhalb von `<script>`-Blöcken (leer, ohne
  vorgegebenen Code), sodass Studierende direkt im Browser/Editor sehen,
  wo etwas fehlt.
- In den Übungen 2–6 gibt die Datei bereits eine kleine Hilfsfunktion
  `ausgabe(text)` vor (kein TODO), die den übergebenen Text sowohl per
  `console.log` in der Entwicklerkonsole als auch sichtbar auf der Seite
  (in einem `<pre id="ausgabe">`-Element) ausgibt. So lassen sich die an
  den TODO-Stellen erzielten Ergebnisse sowohl im Browser als auch in der
  Konsole überprüfen, ohne dass Studierende bei jeder Teilaufgabe erneut
  DOM-Code dafür schreiben müssen.
- Die Dateien bzw. Ordner sind vollständig lauffähig (wenn auch
  unvollständig) – Studierende können sie direkt im Browser öffnen und
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
