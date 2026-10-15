## 5.2 JavaScript einbinden und DOM (`02_einbinden_und_dom_aufgabe`)

### JavaScript einbinden

1. Welche Möglichkeiten gibt es, JavaScript in eine Seite einzubinden?
2. Wo sieht man die Ausgabe von `console.log()`?
3. Was ist das `javascript:`-Pseudo-Protokoll und warum wird es heute kaum noch verwendet?
4. Was ist ein Event-Handler-Attribut wie `onclick`?
5. Warum bindet man Skripte oft am Ende des `<body>` ein? Welche Alternative gibt es?
6. Wie ruft man aus der HTML-Seite eine Funktion auf, die in einer externen Datei steht (`zeigeAlert()` in `js/begruessung.js`)? Was passiert, wenn die Datei noch nicht geladen ist?
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

### DOM-Werte lesen

1. Was ist das DOM?
2. Wie findet man Elemente im DOM?
3. Was liefert `.value` bei Textfeld, `select` und `textarea`? Wie prüft man eine Checkbox?
4. Wie ermittelt man den ausgewählten Radiobutton? Warum kann das Ergebnis `null` sein, und wie geht man damit um?
5. Wie registriert man einen Submit-Handler? Was macht `event.preventDefault()`?
6. Was bewirkt `location.href = "…"`?
7. Was ist der Unterschied zwischen `textContent` und `innerHTML`? Warum ist `textContent` hier sicherer?
8. Warum kann man Daten über `localStorage` von einer Seite zur nächsten übergeben?

<details><summary>Erwartete Antworten</summary>

1. Document Object Model: die Baumdarstellung der HTML-Seite als Objekte, die JavaScript lesen und ändern kann.
2. `getElementById("id")` per ID, `querySelector("css")` erstes passendes Element, `querySelectorAll("css")` alle passenden (NodeList).
3. Den eingegebenen bzw. gewählten Wert als String. Checkbox: `.checked` (true/false).
4. `document.querySelector('input[name="rueckmeldung"]:checked')`. Ist nichts ausgewählt, ist das Ergebnis `null`, daher vor `.value` prüfen (z.B. `feld ? feld.value : ""`).
5. `formular.addEventListener("submit", function (event) { … })`. `preventDefault()` verhindert das normale Absenden des Formulars.
6. Der Browser lädt die angegebene Seite (Weiterleitung).
7. `textContent` setzt reinen Text, `innerHTML` interpretiert HTML. Mit `textContent` können Nutzereingaben keinen HTML-/Skriptcode einschleusen (XSS).
8. Beide Seiten haben denselben Origin und teilen sich daher denselben `localStorage`.
</details>

### DOM-Manipulation

1. Wie erzeugt man neue Elemente? Warum sind sie nach `createElement` noch nicht sichtbar?
2. Was macht `appendChild()`? In welcher Reihenfolge baut man Zeile, Zellen und Link zusammen?
3. Wie setzt man Attribute wie `href` und `target` an einem erzeugten Link?
4. Wie viele Elemente hat ein Array? Wie liest man das ab?
5. Was ist ein Event-Listener? Was ist der Unterschied zu `onclick` im HTML?
6. Was liefert `querySelectorAll("tr")` und wie iteriert man darüber? Wie greift man auf die dritte Zelle einer Zeile zu?
7. Was macht `classList.toggle()`? Welche weiteren `classList`-Methoden gibt es?

<details><summary>Erwartete Antworten</summary>

1. `document.createElement("tr")`. Das Element existiert nur im Speicher, bis es in den DOM-Baum eingehängt wird.
2. Hängt ein Element als letztes Kind an. Link → Zelle, Zellen → Zeile, Zeile → tbody.
3. `link.href = projekt.link; link.target = "_blank";` (oder `setAttribute`).
4. `projekte.length`.
5. Eine Funktion, die bei einem Ereignis aufgerufen wird. `addEventListener` trennt HTML und JS und erlaubt mehrere Handler für ein Ereignis.
6. Eine NodeList, iterierbar mit `for...of` oder `forEach`. Dritte Zelle: `zeile.cells[2]` bzw. `zeile.querySelectorAll("td")[2]`.
7. Fügt die Klasse hinzu, wenn sie fehlt, sonst entfernt es sie. Außerdem `add`, `remove`, `contains`.

</details>
