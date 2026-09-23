## 3.2 Textstrukturierung (`02_textstrukturierung_aufgabe`)

1. Was ist der Unterschied zwischen Block- und Inline-Elementen? Ordnen Sie zu: `div`, `p`, `span`, `strong`, `em`, `pre`, `hr`.
2. Wozu dienen `div` und `span`, wenn sie selbst keine Bedeutung haben?
3. Was ist der Unterschied zwischen `strong`/`em` und `b`/`i`?
4. Wie setzt man ein Inline-Style? Warum ist das auf Dauer keine gute Lösung?
5. Warum wird ein Zeilenumbruch im HTML-Quelltext nicht angezeigt? Wann ist `<br>` angebracht und wann nicht?
6. Was ist das Besondere an `<pre>`? Was muss man beachten, wenn der Code darin `<` oder `>` enthält?
7. Welche Elemente sind „leere Elemente“ (ohne End-Tag)?

<details><summary>Erwartete Antworten</summary>

1. Block-Elemente beginnen in einer neuen Zeile und nehmen die volle Breite ein (`div`, `p`, `pre`, `hr`). Inline-Elemente stehen im Textfluss (`span`, `strong`, `em`).
2. Sie sind neutrale Container, um Inhalte zu gruppieren (`div`) oder Textteile zu markieren (`span`), vor allem um sie später mit CSS/JS anzusprechen.
3. `strong`/`em` haben Bedeutung (starke Wichtigkeit / Betonung, z.B. für Screenreader). `b`/`i` sind nur Darstellung.
4. Mit `style="color: red;"`. Die Formatierung steckt dann in jedem Element einzeln: schwer zu warten und nicht wiederverwendbar (siehe Kapitel 4).
5. Der Browser fasst Leerraum (Leerzeichen, Umbrüche) zu einem Leerzeichen zusammen. `<br>` ist für inhaltlich bedingte Umbrüche gedacht (Adresse, Gedicht), nicht für Abstände.
6. Leerzeichen und Zeilenumbrüche bleiben erhalten, Schrift ist nichtproportional. `<`, `>`, `&` müssen als `&lt;`, `&gt;`, `&amp;` geschrieben werden.
7. U.a. `br`, `hr`, `img`, `meta`, `input`, `link`.
</details>
