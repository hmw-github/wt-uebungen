## 7.3 Buttons (`03_buttons_aufgabe`)

1. Warum braucht jeder Bootstrap-Button die Grundklasse `btn`?
2. Was bedeuten `btn-primary`, `btn-secondary` und `btn-outline-secondary`?
3. Was bewirken `btn-lg` und `btn-sm`?
4. Kann man die Klassen auch auf `<a>` verwenden? Wann nimmt man `<a>`, wann `<button>`?
5. Was passiert mit den eigenen `.btn`-Regeln aus Kapitel 4, wenn Bootstrap ebenfalls `.btn` definiert?

<details><summary>Erwartete Antworten</summary>

1. Sie liefert die Grundgestaltung (Padding, Rahmen, Schrift). Die Varianten legen nur Farben fest.
2. Semantische Farbvarianten: Hauptaktion, Nebenaktion, nur Umrandung.
3. Großer bzw. kleiner Button.
4. Ja. `<a>` für Navigation zu einer anderen Seite, `<button>` für Aktionen auf der Seite oder zum Absenden.
5. Beide Regeln gelten. Bei Konflikten entscheiden Spezifität und Reihenfolge der Einbindung, deshalb auf Überschneidungen achten.
</details>
