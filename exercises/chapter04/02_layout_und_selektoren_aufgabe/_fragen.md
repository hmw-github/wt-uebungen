## 4.2 Layout und fortgeschrittene Selektoren (`02_layout_und_selektoren_aufgabe`)

### Display und Float

1. Welche Werte von `display` kennen Sie?
2. Was bewirkt `float: right`? Wie verhalten sich die nachfolgenden Inhalte?
3. Wie zentriert man Links und Text innerhalb eines Absatzes?

<details><summary>Erwartete Antworten</summary>

1. block: eigene Zeile, volle Breite; inline: im Textfluss; inline-block: im Textfluss mit Box-Eigenschaften; none: unsichtbar.
2. Das Element wird aus dem normalen Fluss genommen und an den rechten Rand des Elternelements geschoben. Nachfolgender Inhalt umfließt es auf der linken Seite.
3. Mit `text-align: center` am umgebenden Block-Element, denn Links und Text sind Inline-Inhalte.

</details>

### Fortgeschrittene Selektoren

1. Was ist eine Pseudoklasse? Nennen Sie Beispiele.
2. Was bedeutet `tr:nth-child(even)`? Wie würde man jede dritte Zeile ansprechen?
3. Was bewirkt `opacity: 0.85`?
4. Was ist ein Attributselektor? Was trifft `input[type="email"]`?
5. Was ist ein Pseudoelement? Was ist der Unterschied zwischen `:` und `::`?
6. Warum kann die Reihenfolge der Regeln wichtig sein?

<details><summary>Erwartete Antworten</summary>

1. Sie spricht Elemente in einem bestimmten Zustand oder an einer bestimmten Position an.
2. Jede gerade Zeile (2, 4, …). Jede dritte: `nth-child(3n)`.
3. Deckkraft 85 %: Das Element wird leicht durchsichtig.
4. Er wählt Elemente anhand eines Attributs oder Attributwerts. `input[type="email"]` trifft alle E-Mail-Eingabefelder.
5. Pseudoelemente sprechen einen Teil eines Elements an bzw. erzeugen zusätzlichen Inhalt. `:` für Pseudoklassen, `::` für Pseudoelemente.
6. Bei gleicher Spezifität gewinnt die spätere Regel.

</details>
