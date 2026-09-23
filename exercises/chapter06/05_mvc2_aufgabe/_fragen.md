## 6.5 MVC2 (`05_mvc2_aufgabe`)

1. Was sind die Aufgaben von Model, View und Controller?
2. Was ist das Besondere an MVC2 (Model 2) für Webanwendungen?
3. Welche Klasse darf auf `$_POST` zugreifen, welche auf `$_SESSION`, welche gibt HTML aus?
4. Wie läuft eine Anfrage vom Aufruf von `gaestebuch/index.php` bis zur fertigen Seite?
5. Warum bekommt die View das Model im Konstruktor übergeben?
6. Was ist Autoloading (`spl_autoload_register()`)?
7. Warum müssen die Pfade in der View um `../` ergänzt werden?
8. Welche Vorteile bringt die Trennung gegenüber der Lösung aus Übung 6.4?

<details><summary>Erwartete Antworten</summary>

1. Model: Daten und Logik (Einträge speichern/liefern). View: Darstellung (HTML). Controller: nimmt die Anfrage entgegen und steuert Model und View.
2. Ein zentraler Controller als Einstiegspunkt nimmt alle Anfragen an, die View wird danach serverseitig erzeugt.
3. Controller: `$_POST`. Model: `$_SESSION`. View: HTML-Ausgabe.
4. `index.php` startet Session und Controller → Controller erzeugt Model, verarbeitet evtl. POST → erzeugt View mit Model → `render()` gibt HTML aus.
5. Die View holt sich die anzuzeigenden Daten über das Model (`alleEintraege()`).
6. PHP lädt die Datei einer Klasse automatisch, wenn die Klasse das erste Mal verwendet wird. Man braucht kein `require` pro Klasse.
7. Die Seite liegt im Unterordner `gaestebuch/`, CSS, Bilder und andere Seiten liegen eine Ebene höher.
8. Bessere Übersicht, Austauschbarkeit (z.B. Datenbank statt Session), Wiederverwendung (in Kapitel 8 nutzt die API dasselbe Model).
</details>
