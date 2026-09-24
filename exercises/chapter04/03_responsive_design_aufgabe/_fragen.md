## 4.3 Responsive Design (`03_responsive_design_aufgabe`)

1. Was versteht man unter Responsive Web Design?
2. Wie ist eine Media Query aufgebaut? Wann greift `@media (max-width: 600px)`?
3. Warum muss die Media Query am Ende des Stylesheets stehen?
4. Was bewirkt `flex-direction: column`? Wie ändern sich dadurch Haupt- und Querachse?
5. Was bedeutet `align-items: flex-start` in einer Spalte?
6. Worauf bezieht sich `width: 100%`?
7. Welche Rolle spielt das viewport-Meta-Tag aus Übung 3.1 dabei?
8. Wie testet man eine Seite in verschiedenen Bildschirmgrößen?

<details><summary>Erwartete Antworten</summary>

1. Die Seite passt sich an verschiedene Bildschirmgrößen an (Layout, Schrift, Bilder).
2. `@media (bedingung) { regeln }`. Sie greift, wenn der Viewport höchstens 600 px breit ist.
3. Sonst würden spätere Regeln mit gleicher Spezifität die Werte wieder überschreiben.
4. Items werden untereinander angeordnet. Die Hauptachse ist nun senkrecht, die Querachse waagerecht.
5. Items stehen links (am Anfang der Querachse) statt zentriert oder gestreckt.
6. Auf die Inhaltsbreite des Elternelements.
7. Ohne das Tag meldet ein Smartphone eine Breite von ca. 980 px, und die Media Query greift nie.
8. Gerätesymbolleiste / responsive Ansicht in den DevTools oder Fenster verkleinern.
</details>
