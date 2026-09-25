# Übungsaufgaben zu Kapitel 5: JavaScript

Diese 2 Übungen decken alle Themen des Kapitels ab (5.1–5.5): Übung 1
übt die Sprachkonzepte (Datentypen, Variablen, Operatoren, Kontrollfluss,
Arrays, Objekte, Klassen und Vererbung, Fehlerbehandlung) sowie JSON in
einer eigenständigen Datei, Übung 2 bringt JavaScript in die
Portfolio-Website (Einbindung, DOM lesend und schreibend).

**Durchgängiges Projekt:** Übung 2 greift direkt in die Portfolio-Website
aus den Kapiteln 3 und 4 ein und besteht daher – wie in Kapitel 3 und 4 –
aus einem Aufgabenordner mit dem kompletten aktuellen Stand der Website.
Übung 1 ist dagegen bewusst eine eigenständige, einzelne HTML-Datei, die
die grundlegenden Sprachkonzepte anhand der immer gleichen Projektdaten
von Alex Berger (Titel, Technologie, Jahr) einübt, ohne dass Studierende
dafür die eigentlichen Website-Dateien anfassen müssen.

| # | Thema (Kapitel) | Aufgabendatei/-ordner | Lösungsdatei/-ordner |
|---|---|---|---|
| 1 | JavaScript-Grundlagen: Klasse Projektliste (Variablen, Kontrollstrukturen, Arrays/Objekte, Klassen und Vererbung) und JSON (5.3, 5.4) | `01_js_grundlagen_aufgabe.html` | `../../solutions/chapter05/01_js_grundlagen_loesung.html` |
| 2 | JavaScript einbinden, DOM-Werte lesen und DOM-Manipulation (5.2, 5.5) | `02_einbinden_und_dom_aufgabe/` | `../../solutions/chapter05/02_einbinden_und_dom_loesung/` |

## Wie sich die Übungen auf die Sprachgrundlagen und die Website aufteilen

- **Übung 1** ist eine eigenständige Datei mit der bekannten Hilfsfunktion
  `ausgabe(text)` (siehe unten), gegliedert in vier Teile:
  - *Teil 1–3:* Eine Klasse `Projektliste` verwaltet ein Array von
    `Projekt`- bzw. `Webprojekt`-Objekten (Unterklasse) und bietet
    Operationen zum Einfügen, Aktualisieren, Löschen und Auflisten an. An
    diesem zusammenhängenden Szenario werden "Variablen, Datentypen,
    Operatoren", "Kontrollstrukturen", "Arrays und Objekte" sowie "Klassen
    und Vererbung" gemeinsam eingeübt (z.B. `for`-Schleife und `switch` in
    den Listen-Operationen, `try...catch` bei einer ungültigen
    Aktualisierung, Array-Destrukturierung beim Zugriff auf die
    Projektliste).
  - *Teil 4:* JSON (`JSON.stringify`/`JSON.parse`) inkl. eines ersten
    Kontakts mit `localStorage`.
- **Übung 2** arbeitet in der eigentlichen Website, gegliedert in drei
  Etappen:
  - *JavaScript einbinden (5.2):* Auf der Startseite (`index.html`) wird
    ein externes Skript `js/begruessung.js` eingebunden; dabei kommen alle
    drei Einbindungsarten vor (inline im `<script>`-Block,
    `javascript:`-Pseudo-Protokoll, `onclick`-Attribut mit externer
    Funktion).
  - *DOM-Werte lesen (5.5):* Beim Absenden des Kontaktformulars
    (`kontakt.html`) werden die eingegebenen Werte per DOM-Zugriff
    ausgelesen (statt das Formular klassisch an einen Server zu senden),
    zu einem JSON-Objekt zusammengefasst und im `localStorage`
    gespeichert. Anschließend zeigt die neue Seite
    `kontaktanfrage-bestaetigung.html` die gespeicherten Daten wieder an –
    aufgebaut analog zu
    `solutions/chapter09/04_rest_client_loesung/kontakt-verarbeiten.php`,
    liest die Werte aber aus dem `localStorage` statt aus `$_POST`.
  - *DOM-Manipulation (5.5):* Die bisher statische Projekttabelle auf
    `projekte.html` wird durch echte DOM-Manipulation aus Daten erzeugt,
    die per `fetch()` aus `projekte.json` geladen werden (inkl. eines
    Buttons, der Projekte aus 2026 per `classList.toggle` hervorhebt).
    Genau diese Daten (`titel`, `technologie`, `jahr`, `link`) werden in
    Kapitel 6 zu serverseitigen PHP-Daten und in Kapitel 9 zur
    JSON-Antwort einer echten REST-Schnittstelle.

  Die TODO-Nummern zählen pro Datei; `_todos.md` ordnet sie zusätzlich den
  Kapitelthemen zu.

## Aufbau jeder Aufgabendatei

- Die Aufgabenstellung steht als HTML-Kommentar am Dateianfang, gegliedert
  in einzelne nummerierte TODOs, die inhaltlich genau den zu ergänzenden
  Stellen im Code entsprechen.
- Die zu bearbeitenden Stellen sind im Dokument selbst markiert: durch
  `<!-- TODO n: ... -->`-Kommentare in HTML-Bereichen bzw. durch
  `// TODO n: ...`-Kommentare innerhalb von `<script>`-Blöcken (leer, ohne
  vorgegebenen Code), sodass Studierende direkt im Browser/Editor sehen,
  wo etwas fehlt.
- In Übung 1 gibt die Datei bereits eine kleine Hilfsfunktion
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

Übung 1 legt die Sprachgrundlagen, die Übung 2 in der Website anwendet
(z.B. Objekte, `for...of`, JSON und `localStorage`). Beide Übungen sind
umfangreich und lassen sich entlang ihrer Teile bzw. Etappen bearbeiten
(die Gruppierung folgt der Folienreihenfolge). Innerhalb von Übung 2 steigt
der Schwierigkeitsgrad von den reinen Einbindungsarten über den lesenden
DOM-Zugriff beim Auswerten des Kontaktformulars bis zum schreibenden
DOM-Zugriff bei der Erzeugung der Projekttabelle.
