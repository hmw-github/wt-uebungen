## 3.6 Tabellen (`06_tabellen_aufgabe`)

1. Aus welchen Elementen besteht eine Tabelle (`table`, `tr`, `th`, `td`)?
2. Wozu dienen `caption`, `thead`, `tbody` und `tfoot`?
3. Was ist der Unterschied zwischen `th` und `td`?
4. Was bewirken `rowspan` und `colspan`? Welche Zellen muss man in den Folgezeilen dann weglassen?
5. Warum schreibt man `HTML &amp; CSS` statt `HTML & CSS`?
6. Wann ist eine Tabelle das richtige Mittel, und wann nicht?

<details><summary>Erwartete Antworten</summary>

1. `table` ist die Tabelle, `tr` eine Zeile, `th` eine Kopfzelle, `td` eine Datenzelle.
2. `caption` ist die Tabellenüberschrift, `thead`/`tbody`/`tfoot` gliedern Kopf, Daten und Fuß (für Semantik, Styling, Druck).
3. `th` ist eine Kopfzelle (standardmäßig fett und zentriert, semantisch Überschrift der Spalte/Zeile), `td` eine normale Datenzelle.
4. `rowspan` verbindet Zellen über mehrere Zeilen, `colspan` über mehrere Spalten. Bei `rowspan="2"` fehlt in der nächsten Zeile die entsprechende Zelle (hier: Projektname).
5. `&` leitet in HTML ein Entity ein und sollte deshalb als `&amp;` maskiert werden.
6. Für tabellarische Daten (Projektliste) ja, für Seitenlayout nein (dafür CSS).
</details>
