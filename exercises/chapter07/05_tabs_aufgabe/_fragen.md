## 7.5 Tabs (`05_tabs_aufgabe`)

1. Wie sind Bootstrap-Tabs aufgebaut (Navigation und Inhalt)?
2. Wie wird ein Tab-Link mit seinem Inhaltsbereich verknüpft (`href="#id"` ↔ `id`)?
3. Was bewirkt `data-bs-toggle="tab"`? Warum wird dafür das Bootstrap-JS-Bundle benötigt?
4. Warum müssen Link und Pane beim Start die Klasse `active` haben?
5. Warum bringen Tabs hier einen Vorteil gegenüber dem langen Text in Kapitel 5?
6. Die ID `fähigkeiten` enthält einen Umlaut. Ist das erlaubt? Was ist ratsamer?

<details><summary>Erwartete Antworten</summary>

1. `ul.nav.nav-tabs` mit `li.nav-item` > `a.nav-link`, darunter `div.tab-content` mit `div.tab-pane`s.
2. Der `href` des Links verweist auf die `id` des Panes.
3. Bootstrap schaltet beim Klick per JavaScript Klassen um (`active`/`show`) statt zum Anker zu springen. Ohne JS-Bundle passiert nichts.
4. Sonst ist beim Laden kein Tab markiert bzw. kein Inhalt sichtbar.
5. Übersichtlichere Seite, Inhalte werden auf Wunsch angezeigt.
6. In HTML5 erlaubt, aber fehleranfällig (Kodierung, Selektoren). Besser ASCII verwenden (`faehigkeiten`).
</details>
