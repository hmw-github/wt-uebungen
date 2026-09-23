## 5.1 JavaScript einbinden (`01_einbinden_aufgabe`)

1. Welche Möglichkeiten gibt es, JavaScript in eine Seite einzubinden?
2. Wo sieht man die Ausgabe von `console.log()`?
3. Was ist das `javascript:`-Pseudo-Protokoll und warum wird es heute kaum noch verwendet?
4. Was ist ein Event-Handler-Attribut wie `onclick`?
5. Warum bindet man Skripte oft am Ende des `<body>` ein? Welche Alternative gibt es (`defer`)?
6. Wie ruft man aus der HTML-Seite eine Funktion auf, die in einer externen Datei steht? Was passiert, wenn die Datei noch nicht geladen ist?
7. Wie definiert man eine Funktion in JavaScript?

<details><summary>Erwartete Antworten</summary>

1. `<script>`-Block im head oder body, externe Datei per `<script src="…">`, Event-Attribute (`onclick`), `javascript:`-URLs.
2. In der Konsole der Browser-DevTools (F12).
3. Ein `href`, der beim Klick JavaScript ausführt statt eine Seite zu laden. Er vermischt Struktur und Verhalten und ist schlecht für Barrierefreiheit.
4. Ein HTML-Attribut, dessen Wert JavaScript-Code ist, der bei dem Ereignis ausgeführt wird.
5. Dann ist das HTML schon geladen, das Skript kann auf die Elemente zugreifen und blockiert die Darstellung nicht. `defer` lädt das Skript parallel und führt es nach dem Parsen aus.
6. Alle Skripte teilen sich den globalen Namensraum, die Funktion ist also direkt aufrufbar. Ist die Datei noch nicht geladen, gibt es einen `ReferenceError`.
7. `function zeigeAlert() { … }`
</details>
