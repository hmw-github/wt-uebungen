# TODOs – Übung 3: JSON

## Aufgabenstellung:

Ergänzen Sie im `<script>`-Block unten an den TODO-Stellen den fehlenden
Code. Nutzen Sie die vorhandene Funktion ausgabe(text) für Textausgaben.
Das Objekt, das Sie hier in JSON umwandeln, hat bewusst dieselbe Form
(titel, technologie, jahr) wie die Projektdaten, die später (Kapitel 9)
als JSON-Antwort einer echten REST-Schnittstelle geliefert werden.

**Hinweis**: localStorage speichert Daten pro Ursprung (Origin) im Browser.
Beim Öffnen dieser Datei direkt über `file://` funktioniert dies i.d.R.
zuverlässig, solange Sie dieselbe Datei erneut laden bzw. dieselbe
Browser-Registerkarte verwenden.

**Aufgaben:**
1. TODO 1: Erstellen Sie ein Objekt-Literal "projekt" mit den drei Eigenschaften titel ("Portfolio-Website"), technologie ("PHP, REST") und jahr (2026). Wandeln Sie es mit `JSON.stringify` in einen JSON-String um und geben Sie diesen String mit `ausgabe(...)` aus.
2. TODO 2: Speichern Sie den JSON-String unter dem Schlüssel "letztesProjekt" mit `localStorage.setItem` im lokalen Speicher des Browsers.
3. TODO 3: Lesen Sie den Wert unter demselben Schlüssel mit `localStorage.getItem` wieder aus, wandeln Sie ihn mit `JSON.parse` zurück in ein Objekt um und geben Sie mindestens zwei Eigenschaften des wiederhergestellten Objekts mit `ausgabe(...)` aus, um zu zeigen, dass der Rundgang (Objekt -> JSON-String -> Objekt) funktioniert hat.
