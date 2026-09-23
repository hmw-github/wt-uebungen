## 4.5 Display und Flexbox (`05_display_und_flexbox_aufgabe`)

1. Welche Werte von `display` kennen Sie (`block`, `inline`, `inline-block`, `none`, `flex`)?
2. Was ist ein Flex-Container, was sind Flex-Items? Wirkt `display: flex` auf Kinder oder Enkel?
3. Was ist Hauptachse und Querachse? Welche Eigenschaft richtet entlang welcher Achse aus?
4. Was bewirken `justify-content: space-between` und `justify-content: center`?
5. Was bewirkt `align-items: center`?
6. Was ist `gap`, und welchen Vorteil hat es gegenüber `margin` an jedem Element?

<details><summary>Erwartete Antworten</summary>

1. block: eigene Zeile, volle Breite; inline: im Textfluss; inline-block: im Textfluss mit Box-Eigenschaften; none: unsichtbar; flex: Flex-Container.
2. Das Element mit `display: flex` ist der Container, seine **direkten** Kinder sind die Items. Enkel sind nicht betroffen.
3. Die Hauptachse folgt `flex-direction` (standardmäßig waagerecht), die Querachse steht senkrecht dazu. `justify-content` wirkt auf der Hauptachse, `align-items` auf der Querachse.
4. `space-between`: erstes und letztes Item am Rand, Rest gleichmäßig verteilt. `center`: alle Items in der Mitte.
5. Items werden auf der Querachse mittig ausgerichtet (z.B. Logo und Navigation vertikal zentriert).
6. Abstand nur **zwischen** den Items, ohne zusätzlichen Rand außen.
</details>
