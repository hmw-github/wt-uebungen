## 5.5 DOM-Manipulation (`05_dom_manipulation_aufgabe`)

1. Wie erzeugt man neue Elemente? Warum sind sie nach `createElement` noch nicht sichtbar?
2. Was macht `appendChild()`? In welcher Reihenfolge baut man Zeile, Zellen und Link zusammen?
3. Wie setzt man Attribute wie `href` und `target` an einem erzeugten Link?
4. Wie viele Elemente hat ein Array? Wie liest man das ab?
5. Was ist ein Event-Listener? Was ist der Unterschied zu `onclick` im HTML?
6. Was liefert `querySelectorAll("tr")` und wie iteriert man darüber? Wie greift man auf die dritte Zelle einer Zeile zu?
7. Was macht `classList.toggle()`? Welche weiteren `classList`-Methoden gibt es?
8. `loadProjects()` lädt `projekte.json` per `fetch()`. Warum funktioniert das nicht, wenn man die Seite per `file://` öffnet?

<details><summary>Erwartete Antworten</summary>

1. `document.createElement("tr")`. Das Element existiert nur im Speicher, bis es in den DOM-Baum eingehängt wird.
2. Hängt ein Element als letztes Kind an. Link → Zelle, Zellen → Zeile, Zeile → tbody.
3. `link.href = projekt.link; link.target = "_blank";` (oder `setAttribute`).
4. `projekte.length`.
5. Eine Funktion, die bei einem Ereignis aufgerufen wird. `addEventListener` trennt HTML und JS und erlaubt mehrere Handler für ein Ereignis.
6. Eine NodeList, iterierbar mit `for...of` oder `forEach`. Dritte Zelle: `zeile.cells[2]` bzw. `zeile.querySelectorAll("td")[2]`.
7. Fügt die Klasse hinzu, wenn sie fehlt, sonst entfernt es sie. Außerdem `add`, `remove`, `contains`.
8. Browser blockieren `fetch` auf `file://`-URLs aus Sicherheitsgründen, man braucht einen Webserver (z.B. Live Server).
</details>
