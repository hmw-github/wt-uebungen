## 4.1 CSS einbinden (`01_einbindung_aufgabe`)

1. Welche drei Wege gibt es, CSS einzubinden? Welcher ist hier gewünscht und warum?
2. Wie sieht das `link`-Tag für ein externes Stylesheet aus?
3. Was bewirkt `media="print"`? Wie kann man das testen?
4. Warum braucht `impressum.html` den Pfad `../css/style.css`?
5. Wie ist eine CSS-Regel aufgebaut (Selektor, Eigenschaft, Wert)?
6. Was ist das Boxmodell? Was ändert `box-sizing: border-box`?
7. Warum setzt man `margin: 0` für `body`?
8. Was bewirkt `display: none`?

<details><summary>Erwartete Antworten</summary>

1. Inline (`style`-Attribut), intern (`<style>` im head), extern (`.css`-Datei). Extern, weil alle Seiten dasselbe Stylesheet nutzen und der Browser es cacht.
2. `<link rel="stylesheet" href="css/style.css">`
3. Das Stylesheet gilt nur beim Drucken. Testen über die Druckvorschau oder die Druck-Emulation in den DevTools.
4. Der Pfad ist relativ zur HTML-Datei, und die liegt im Unterordner.
5. `selektor { eigenschaft: wert; }`
6. Jedes Element ist eine Box aus Inhalt, padding, border, margin. Mit `border-box` zählen padding und border zur angegebenen Breite/Höhe dazu.
7. Browser setzen standardmäßig einen Außenabstand von ca. 8 px am body.
8. Das Element wird nicht angezeigt und nimmt keinen Platz ein.
</details>
