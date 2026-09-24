## 4.2 Flexbox und fortgeschrittene Selektoren (`02_flexbox_und_selektoren_aufgabe`)

### Display und Flexbox

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

### Fortgeschrittene Selektoren

1. Was ist eine Pseudoklasse? Nennen Sie Beispiele (`:hover`, `:nth-child()`, …).
2. Was bedeutet `tr:nth-child(even)`? Wie würde man jede dritte Zeile ansprechen?
3. Was bewirkt `opacity: 0.85`?
4. Was ist ein Attributselektor? Was trifft `input[type="email"]`?
5. Was ist ein Pseudoelement? Was ist der Unterschied zwischen `:` und `::`?
6. Was macht `::after` zusammen mit `content`? Was bedeutet `"\2197"`?
7. Warum kann die Reihenfolge der Regeln wichtig sein (z.B. Zebra-Streifen und `tr:hover`)?

<details><summary>Erwartete Antworten</summary>

1. Sie spricht Elemente in einem bestimmten Zustand oder an einer bestimmten Position an.
2. Jede gerade Zeile (2, 4, …). Jede dritte: `nth-child(3n)`.
3. Deckkraft 85 %: Das Element wird leicht durchsichtig.
4. Er wählt Elemente anhand eines Attributs oder Attributwerts. `input[type="email"]` trifft alle E-Mail-Eingabefelder.
5. Pseudoelemente sprechen einen Teil eines Elements an bzw. erzeugen zusätzlichen Inhalt. `:` für Pseudoklassen, `::` für Pseudoelemente.
6. Fügt nach dem Inhalt des Elements den Text aus `content` ein. `\2197` ist der Unicode-Codepunkt für „↗“.
7. Bei gleicher Spezifität gewinnt die spätere Regel. `tr:hover` muss also nach der Zebra-Regel stehen, sonst wirkt der Hover bei geraden Zeilen nicht.
</details>
