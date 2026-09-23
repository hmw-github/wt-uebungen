# Übungsaufgaben zu Kapitel 5: JavaScript

Diese 5 Übungen decken alle Themen des Kapitels ab (5.1–5.5): Überblick über
JavaScript, die verschiedenen Wege der Einbindung, Sprachkonzepte
(Datentypen, Variablen, Operatoren, Kontrollfluss, Arrays, Objekte, Klassen
und Vererbung, Fehlerbehandlung), JSON sowie das DOM (lesend und
schreibend).

**Durchgängiges Projekt:** Übung 1, Übung 4 und Übung 5 greifen direkt in
die Portfolio-Website aus den Kapiteln 3 und 4 ein und bestehen daher – wie
in Kapitel 3 und 4 – aus einem Aufgabenordner mit dem kompletten aktuellen
Stand der Website. Die Übungen 2 und 3 sind dagegen bewusst eigenständige,
einzelne HTML-Dateien (wie im Original-Kurskonzept), die grundlegende
Sprachkonzepte anhand der immer gleichen Projektdaten von Alex Berger
(Titel, Technologie, Jahr) einüben, ohne dass Studierende dafür die
eigentlichen Website-Dateien anfassen müssen.

| # | Thema (Kapitel) | Aufgabendatei/-ordner | Lösungsdatei/-ordner |
|---|---|---|---|
| 1 | JavaScript einbinden (5.2) | `01_einbinden_aufgabe/` | `../../solutions/chapter05/01_einbinden_loesung/` |
| 2 | JavaScript-Grundlagen: Klasse Projektliste (Variablen, Kontrollstrukturen, Arrays/Objekte, Klassen und Vererbung) (5.3, 5.4) | `02_js_basics_aufgabe.html` | `../../solutions/chapter05/02_js_basics_loesung.html` |
| 3 | JSON (5.4) | `03_json_aufgabe.html` | `../../solutions/chapter05/03_json_loesung.html` |
| 4 | DOM-Werte lesen (5.5) | `04_dom_werte_lesen_aufgabe/` | `../../solutions/chapter05/04_dom_werte_lesen_loesung/` |
| 5 | DOM-Manipulation (5.5) | `05_dom_manipulation_aufgabe/` | `../../solutions/chapter05/05_dom_manipulation_loesung/` |

## Wie sich die Übungen auf die Website und die Sprachgrundlagen aufteilen

- **Übung 1** bindet auf der Startseite (`index.html`) ein externes Skript
  `js/begruessung.js` ein und zeigt dabei alle drei Einbindungsarten
  (inline im `<script>`-Block, `javascript:`-Pseudo-Protokoll,
  `onclick`-Attribut mit externer Funktion).
- **Übung 2** ist eine eigenständige Datei mit der bekannten Hilfsfunktion
  `ausgabe(text)` (siehe unten) und entwickelt eine Klasse `Projektliste`,
  die ein Array von `Projekt`- bzw. `Webprojekt`-Objekten (Unterklasse)
  verwaltet und Operationen zum Einfügen, Aktualisieren, Löschen und
  Auflisten anbietet. An diesem einen zusammenhängenden Szenario werden
  alle vier vormals eigenständigen Themenbereiche "Variablen, Datentypen,
  Operatoren", "Kontrollstrukturen", "Arrays und Objekte" sowie "Klassen
  und Vererbung" gemeinsam eingeübt (z.B. `for`-Schleife und `switch` in
  den Listen-Operationen, `try...catch` bei einer ungültigen Aktualisierung,
  Array-Destrukturierung beim Zugriff auf die Projektliste).
- **Übung 3** behandelt JSON (`JSON.stringify`/`JSON.parse`) inkl. eines
  ersten Kontakts mit `localStorage`.
- **Übung 4** ist der erste Schritt zurück in die eigentliche Website: Beim
  Absenden des Kontaktformulars (`kontakt.html`) werden die eingegebenen
  Werte per DOM-Zugriff ausgelesen (statt das Formular klassisch an einen
  Server zu senden), zu einem JSON-Objekt zusammengefasst und im
  `localStorage` gespeichert. Anschließend zeigt die neue Seite
  `kontaktanfrage-bestaetigung.html` die gespeicherten Daten wieder an –
  aufgebaut analog zu `solutions/chapter09/04_rest_client_loesung/kontakt-verarbeiten.php`,
  liest die Werte aber aus dem `localStorage` statt aus `$_POST`.
- **Übung 5** ist der Höhepunkt des Kapitels: Die bisher statische
  Projekttabelle auf `projekte.html` wird durch echte DOM-Manipulation aus
  Daten erzeugt, die per `fetch()` aus `projekte.json` geladen werden
  (inkl. eines Buttons, der Projekte aus 2026 per `classList.toggle`
  hervorhebt). Genau diese Daten (`titel`, `technologie`, `jahr`, `link`)
  werden in Kapitel 6 zu serverseitigen PHP-Daten und in Kapitel 9 zur
  JSON-Antwort einer echten REST-Schnittstelle.

## Aufbau jeder Aufgabendatei

- Die Aufgabenstellung steht als HTML-Kommentar am Dateianfang, gegliedert
  in einzelne nummerierte TODOs, die inhaltlich genau den zu ergänzenden
  Stellen im Code entsprechen.
- Die zu bearbeitenden Stellen sind im Dokument selbst markiert: durch
  `<!-- TODO n: ... -->`-Kommentare in HTML-Bereichen bzw. durch
  `// TODO n: ...`-Kommentare innerhalb von `<script>`-Blöcken (leer, ohne
  vorgegebenen Code), sodass Studierende direkt im Browser/Editor sehen,
  wo etwas fehlt.
- In den Übungen 2 und 3 gibt die Datei bereits eine kleine Hilfsfunktion
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

Die Übungen bauen inhaltlich leicht aufeinander auf (z.B. baut Übung 5 auf
den in Übung 4 geübten Grundlagen des lesenden DOM-Zugriffs auf, bevor dort
auch schreibend Elemente erzeugt werden), sind aber unabhängig voneinander
lösbar und können auch einzeln passend zur jeweiligen Folienreihenfolge im
Foliensatz eingesetzt werden. Der Schwierigkeitsgrad steigt leicht von
Übung 1 (reine Einbindungsarten) über die Sprachgrundlagen und JSON
(Übungen 2–3) bis zum DOM-Zugriff, zunächst lesend beim Auswerten des
Kontaktformulars (Übung 4) und dann schreibend bei der Erzeugung der
Projekttabelle (Übung 5).
