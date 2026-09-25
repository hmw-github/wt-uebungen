# TODOs – Übung 1: JavaScript-Grundlagen (Projektliste und JSON)

Diese Übung entwickelt eine Klasse `Projektliste`, die ein Array von
`Projekt`-Objekten (bzw. `Webprojekt`-Objekten als Unterklasse) verwaltet
und Operationen zum Einfügen, Aktualisieren, Löschen und Auflisten
anbietet. Anschließend werden Projektdaten als JSON im `localStorage`
gespeichert und wieder gelesen. In diesem zusammenhängenden Szenario
werden folgende Sprachkonzepte eingeübt:

- **Variablen, Datentypen, Operatoren** (TODO 8): `let`/`const`/`var`,
  `typeof`, String-Verkettung, `===` vs. `==`.
- **Kontrollstrukturen**: `if...else` (TODO 4), `for`-Schleife mit Index
  (TODO 5), `for...of`-Schleife (TODO 6), `switch` (TODO 13).
- **Arrays**: `push()` (TODO 3), `sort()` mit Vergleichsfunktion (TODO 7),
  Array-Destrukturierung (TODO 12).
- **Objekte**: Objekt-Literal als Parameter `aenderungen` (TODO 4, 11),
  Punktnotation.
- **Klassen und Vererbung**: `class`, `extends`, `super`, get/set,
  `instanceof`, `throw`/`try...catch` (TODO 1, 2, 11).
- **JSON**: `JSON.stringify`/`JSON.parse` und `localStorage` (TODO 14–16).

Nutzen Sie für alle Textausgaben die vorhandene Funktion `ausgabe(text)`.

## 01_js_grundlagen_aufgabe.html – Teil 1: Klassen Projekt und Webprojekt
1. TODO 1: Klasse `Projekt` implementieren (Konstruktor mit `id`, `titel`, `jahr`; (reiner) Getter für `id`; get/set für `titel`; get/set für `jahr` inkl. `throw` bei `jahr < 2000`; `toString()`).
2. TODO 2: Klasse `Webprojekt` implementieren (`extends Projekt`; zusätzliche Eigenschaft `technologie` mit get/set; Konstruktor ruft `super(id, titel, jahr)` auf; `toString()` überschrieben, nutzt `super.toString()`).

## Teil 2: Klasse Projektliste
Der Konstruktor (`this._projekte = []`) sowie die Hilfsmethoden `anzahl` (Getter) und `alsArray()` sind bereits vorgegeben.

3. TODO 3: `hinzufuegen(projekt)` implementieren: `projekt` per `push()` an `this._projekte` anhängen, Bestätigung per `ausgabe(...)`.
4. TODO 4: `aktualisieren(id, aenderungen)` implementieren: Projekt per `find()` suchen (nicht gefunden -> Fehlermeldung + `return`); für jede vorhandene Eigenschaft in `aenderungen` (`titel`, `jahr`, `technologie`) den passenden Setter aufrufen (`technologie` nur bei `instanceof Webprojekt`); Bestätigung ausgeben.
5. TODO 5: `entfernen(id)` implementieren: klassische `for`-Schleife über `this._projekte`, bei Treffer `splice(i, 1)` + Bestätigung + `return`, sonst nach der Schleife Fehlermeldung.
6. TODO 6: `auflisten(id)` implementieren: ohne `id` alle Projekte per `for...of` auflisten (inkl. Gesamtanzahl), mit `id` nur das gefundene Projekt (oder Fehlermeldung) ausgeben.
7. TODO 7: `sortierenNachJahr()` implementieren: `this._projekte.sort()` mit Vergleichsfunktion aufsteigend nach `jahr`, danach Bestätigung ausgeben.

## Teil 3: Hauptteil – Projektliste verwenden

8. TODO 8 - Variablen definieren:
    - `naechsteId` (`let`, Start 1), 
    - `listenName` (`const`), `istInitialisiert` (`var`) deklarieren und mit Name+`typeof` ausgeben; `"Kapitel " + 5` bilden und Wert+Typ ausgeben; 
    - `naechsteId` einmal mit `===` und einmal mit `==` gegen `"1"` vergleichen und beide Ergebnisse ausgeben.
9. TODO 9: `Projektliste` sowie mind. 3 Projekte (mind. 1 `Webprojekt`) mit aufsteigenden ids erzeugen und per `hinzufuegen()` einfügen.
10. TODO 10: `sortierenNachJahr()` aufrufen, danach alle Projekte per `auflisten()` ausgeben.
11. TODO 11: `aktualisieren()` einmal erfolgreich aufrufen; ein zweites Mal in `try...catch` mit ungültigem `jahr` (< 2000) aufrufen und abgefangene Fehlermeldung ausgeben.
12. TODO 12: Ergebnis von `alsArray()` per Destrukturierung in zwei benannte Variablen zerlegen und deren `toString()`-Ergebnis ausgeben.
13. TODO 13: `entfernen()` für eine vorhandene und eine nicht vorhandene id aufrufen; `switch`-Statement über `projektliste.anzahl` mit Kategorisierung (0/1/2/default) schreiben.

## Teil 4: JSON und localStorage

Das Objekt, das Sie hier in JSON umwandeln, hat bewusst dieselbe Form
(titel, technologie, jahr) wie die Projektdaten, die später (Kapitel 9)
als JSON-Antwort einer echten REST-Schnittstelle geliefert werden.

**Hinweis**: localStorage speichert Daten pro Ursprung (Origin) im Browser.
Beim Öffnen dieser Datei direkt über `file://` funktioniert dies i.d.R.
zuverlässig, solange Sie dieselbe Datei erneut laden bzw. dieselbe
Browser-Registerkarte verwenden.

14. TODO 14: Erstellen Sie ein Objekt-Literal "projekt" mit den drei Eigenschaften titel ("Portfolio-Website"), technologie ("PHP, REST") und jahr (2026). Wandeln Sie es mit `JSON.stringify` in einen JSON-String um und geben Sie diesen String mit `ausgabe(...)` aus.
15. TODO 15: Speichern Sie den JSON-String unter dem Schlüssel "letztesProjekt" mit `localStorage.setItem` im lokalen Speicher des Browsers.
16. TODO 16: Lesen Sie den Wert unter demselben Schlüssel mit `localStorage.getItem` wieder aus, wandeln Sie ihn mit `JSON.parse` zurück in ein Objekt um und geben Sie mindestens zwei Eigenschaften des wiederhergestellten Objekts mit `ausgabe(...)` aus, um zu zeigen, dass der Rundgang (Objekt -> JSON-String -> Objekt) funktioniert hat.
