## 4.6 Fortgeschrittene Selektoren (`06_fortgeschrittene_selektoren_aufgabe`)

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
