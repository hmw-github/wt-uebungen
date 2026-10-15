## 4.3 Responsive Design (`03_responsive_design_aufgabe`)

1. Was versteht man unter Responsive Web Design?
2. Wie ist eine Media Query aufgebaut? Wann greift `@media (max-width: 600px)`?
3. Warum muss die Media Query am Ende des Stylesheets stehen?
4. Warum stehen Logo und Navigation untereinander, sobald `#hauptnav` `float: none` erhält? Was ändert sich bei den Navigationslinks durch `display: block` statt `inline-block`?
5. Wie wird der Burger-Button oben rechts platziert? Welche Rolle spielt dabei `position: relative` am Header?
6. Worauf bezieht sich `width: 100%`?
7. Welche Rolle spielt das viewport-Meta-Tag aus Übung 3.1 dabei?
8. Wie testet man eine Seite in verschiedenen Bildschirmgrößen?

<details><summary>Erwartete Antworten</summary>

1. Die Seite passt sich an verschiedene Bildschirmgrößen an (Layout, Schrift, Bilder).
2. `@media (bedingung) { regeln }`. Sie greift, wenn der Viewport höchstens 600 px breit ist.
3. Sonst würden spätere Regeln mit gleicher Spezifität die Werte wieder überschreiben.
4. Ohne Float gilt der normale Dokumentfluss: Block-Elemente wie `<nav>` beginnen eine neue Zeile und nehmen die volle Breite ein, daher steht die Navigation unter dem Logo. Links mit `inline-block` liegen nebeneinander im Textfluss, mit `block` erhält jeder Link eine eigene Zeile.
5. Mit `position: absolute` und `top`/`right` wird der Button aus dem Fluss genommen und relativ zum nächsten positionierten Vorfahren platziert. Durch `position: relative` ist das der Header (sonst der Viewport bzw. das Dokument).
6. Auf die Inhaltsbreite des Elternelements.
7. Ohne das Tag meldet ein Smartphone eine Breite von ca. 980 px, und die Media Query greift nie.
8. Gerätesymbolleiste / responsive Ansicht in den DevTools oder Fenster verkleinern.
</details>
