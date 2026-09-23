## 7.2 Tabellen (`02_tabellen_aufgabe`)

1. Warum sollte man `border="1"` nicht mehr verwenden?
2. Was bewirken `table`, `table-striped`, `table-bordered` und `table-hover`?
3. Warum braucht man die Grundklasse `table`, bevor die anderen wirken?
4. Welche eigenen CSS-Regeln aus Kapitel 4 werden dadurch überflüssig (Zebra-Streifen, Hover)?
5. Was bedeutet `div class="container mt-4"`?

<details><summary>Erwartete Antworten</summary>

1. Das ist ein veraltetes Darstellungsattribut. Darstellung gehört ins CSS.
2. Grundformatierung, gestreifte Zeilen, Rahmen um alle Zellen, Hervorhebung beim Überfahren.
3. Die Modifier-Klassen bauen auf den Grundregeln von `.table` auf (Bootstrap-Konvention „Basisklasse + Modifier“).
4. `tr:nth-child(even)` und `tr:hover` aus Übung 4.6.
5. Zentrierter Container mit Abstand nach oben.
</details>
