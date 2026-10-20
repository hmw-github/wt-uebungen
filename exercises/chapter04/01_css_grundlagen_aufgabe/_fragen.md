## 4.1 CSS-Grundlagen (`01_css_grundlagen_aufgabe`)

### Einbinden von CSS

1. Welche drei Wege gibt es, CSS einzubinden? Welcher ist hier gewünscht und warum?
2. Wie sieht das `link`-Tag für ein externes Stylesheet aus?
3. Was bewirkt `media="print"`? Wie kann man das testen?
4. Warum braucht `impressum.html` den Pfad `../css/style.css`?
5. Wie ist eine CSS-Regel aufgebaut?
6. Warum setzt man `margin: 0` für `body`?
7. Was bewirkt `display: none`?

<details><summary>Erwartete Antworten</summary>

1. Inline (`style`-Attribut), intern (`<style>` im head), extern (`.css`-Datei). Extern, weil alle Seiten dasselbe Stylesheet nutzen und der Browser es cacht.
2. `<link rel="stylesheet" href="css/style.css">`
3. Das Stylesheet gilt nur beim Drucken. Testen über die Druckvorschau oder die Druck-Emulation in den DevTools.
4. Der Pfad ist relativ zur HTML-Datei, und die liegt im Unterordner.
5. `selektor { eigenschaft: wert; }`
6. Browser setzen standardmäßig einen Außenabstand von ca. 8 px am body.
7. Das Element wird nicht angezeigt und nimmt keinen Platz ein.
</details>

### Selektoren – Grundlagen

1. Nennen Sie Typ-, Klassen- und ID-Selektor mit je einem Beispiel aus der Übung.
2. Wann verwendet man eine Klasse und wann eine ID?
3. Was bedeutet das Leerzeichen in `#hauptnav a`?
4. Wie gibt man Farben in CSS an?
5. Was bedeutet „Vererbung“ in CSS? Warum wird die Linkfarbe nicht von `body` übernommen?
6. Was ist Spezifität? Welche Regel gewinnt: `a { color: … }` oder `#hauptnav a { color: … }`?
7. TODO 2 und TODO 3 betreffen beide `body`. Was passiert, wenn es zwei Regeln mit demselben Selektor gibt? Warum fasst man sie trotzdem besser zusammen?
8. Wie liest man die Kurzschreibweise `padding: 10px 20px`?
9. Warum gibt man mehrere Schriften an (`Arial, sans-serif`)?

<details><summary>Erwartete Antworten</summary>

1. Typ: `body`, `a`, `header`. Klasse: `.btn`. ID: `#hauptnav`.
2. Klassen sind mehrfach verwendbar, IDs nur einmal pro Seite.
3. Nachfahrenselektor: alle `a`, die irgendwo innerhalb von `#hauptnav` liegen.
4. Hexadezimal `#rrggbb`, außerdem `rgb()` oder Farbnamen.
5. Manche Eigenschaften (z.B. `color`, `font-family`) werden an Kind-Elemente vererbt. Links bekommen aber vom Browser-Stylesheet eine eigene Farbe, die die geerbte überschreibt.
6. Spezifität bestimmt, welche Regel bei Konflikten gewinnt (ID > Klasse > Typ). `#hauptnav a` gewinnt.
7. Beide Regeln gelten. Setzen sie dieselbe Eigenschaft, gewinnt bei gleicher Spezifität die spätere (Kaskade). Eine Regel pro Selektor ist übersichtlicher und leichter zu warten (so in der Musterlösung).
8. oben/unten 10px, links/rechts 20px.
9. Fallback: Ist die erste Schrift nicht installiert, wird die nächste verwendet. Am Ende steht eine generische Familie.
</details>

### Boxmodell

1. Was ist das Boxmodell? Was ist der Unterschied zwischen `padding`, `border` und `margin`?
2. Was ändert `box-sizing: border-box` (TODO 1)?
3. Warum wirkt vertikales `padding` bei einem Inline-Element wie `a` nicht wie erwartet? Was ändert `display: inline-block`?
4. Wie liest man `border: 1px solid #8d99ae`?
5. Was bewirkt `border-radius`?
6. Was ist der Unterschied zwischen `border-top` und `border`?
7. Wie kann man sich das Boxmodell eines Elements in den Browser-DevTools ansehen?

<details><summary>Erwartete Antworten</summary>

1. Jedes Element ist eine Box aus Inhalt, padding, border und margin. `padding`: Innenabstand zwischen Inhalt und Rahmen. `border`: Rahmen. `margin`: Außenabstand zu anderen Elementen.
2. Mit `border-box` zählen padding und border zur angegebenen Breite/Höhe dazu, statt noch hinzuaddiert zu werden.
3. Bei Inline-Elementen verschiebt vertikales padding keine anderen Elemente (keine Höhe im Zeilenfluss). `inline-block` bleibt in der Zeile, verhält sich aber wie eine Box mit Breite/Höhe/padding.
4. Rahmenbreite 1px, Stil durchgezogen, Farbe `#8d99ae`.
5. Abgerundete Ecken.
6. `border-top` setzt nur den oberen Rahmen.
7. Element untersuchen → Tab „Berechnet“/„Layout“ zeigt die Box mit allen Werten.
</details>

### Text und Schrift

1. Was bewirkt eine Selektorliste wie `h1, h2`?
2. Was ist der Unterschied zwischen Serifen- und serifenlosen Schriften?
3. Was ist die Einheit `em`? Worauf bezieht sich `2.5em`? Was ist der Unterschied zu `px` und `rem`?
4. Warum schreibt man `line-height: 1.6` ohne Einheit?
5. Welche Eigenschaften gibt es für Schrift und Text?
6. Wie spricht man die `caption` einer Tabelle an?

<details><summary>Erwartete Antworten</summary>

1. Die Regel gilt für alle aufgeführten Selektoren.
2. Serifen haben kleine Endstriche (Georgia), serifenlose nicht (Arial).
3. `em` ist relativ zur Schriftgröße des Elternelements, `2.5em` = 2,5-fache Größe. `px` ist absolut, `rem` bezieht sich auf die Schriftgröße des Root-Elements (`html`).
4. Ohne Einheit ist der Wert ein Faktor der jeweiligen Schriftgröße und wird als Faktor vererbt.
5. Individuell zu sammeln; wichtig sind die Eigenschaften aus den TODOs.
6. Mit `table caption` (Nachfahrenselektor) oder einfach `caption`.
</details>
