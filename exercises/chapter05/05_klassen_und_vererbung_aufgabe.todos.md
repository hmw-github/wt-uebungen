# TODOs – Übung 5: Klassen und Vererbung

## 05_klassen_und_vererbung_aufgabe.html
1. TODO 1: Implementieren Sie die Klasse Projekt mit einem Konstruktor, der titel und jahr entgegennimmt. Ergänzen Sie einen get/set für titel sowie einen get/set für jahr. Im Setter für jahr: werfen Sie mittels `throw` einen Fehler (als String) mit der Meldung "Jahr darf nicht vor 2000 liegen!", falls ein Wert kleiner als 2000 übergeben wird. Ergänzen Sie außerdem eine Methode `toString()`, die einen Beschreibungstext liefert, z.B. "Wetter-App (2024)".
2. TODO 2: Implementieren Sie die Klasse Webprojekt, die mittels `extends` von Projekt erbt. Der Konstruktor nimmt zusätzlich eine technologie entgegen, ruft mit `super(titel, jahr)` den Projekt-Konstruktor auf und speichert die Technologie (inkl. get/set für technologie). Überschreiben Sie `toString()`, sodass zusätzlich zur per `super.toString()` geerbten Beschreibung auch die Technologie ausgegeben wird, z.B. "Wetter-App (2024), Technologie: JavaScript".
3. TODO 3: Erzeugen Sie ein Webprojekt-Objekt für "Portfolio-Website" (Jahr 2026, Technologie "PHP, REST") und geben Sie mit `ausgabe(...)` dessen `toString()`-Ergebnis aus. Versuchen Sie anschließend innerhalb eines `try...catch`-Blocks, das jahr des Projekts auf 1990 zu setzen, und geben Sie im catch-Block die abgefangene Fehlermeldung mit `ausgabe(...)` aus.

Vergleich mit dem Vorgänger 04_arrays_und_objekte_aufgabe.html: Die Unterschiede außerhalb der TODO-Texte beschränken sich auf Titel/Überschrift. Kein TODO-loser Zusatzcode gefunden.
