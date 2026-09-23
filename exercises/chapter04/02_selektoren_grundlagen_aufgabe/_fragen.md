## 4.2 Selektoren – Grundlagen (`02_selektoren_grundlagen_aufgabe`)

1. Nennen Sie Typ-, Klassen- und ID-Selektor mit je einem Beispiel aus der Übung.
2. Wann verwendet man eine Klasse und wann eine ID?
3. Was bedeutet das Leerzeichen in `#hauptnav a`?
4. Wie gibt man Farben in CSS an (z.B. `#2b2d42`)?
5. Was bedeutet „Vererbung“ in CSS? Warum wird die Linkfarbe nicht von `body` übernommen?
6. Was ist Spezifität? Welche Regel gewinnt: `a { color: … }` oder `#hauptnav a { color: … }`?
7. Wie liest man die Kurzschreibweise `padding: 10px 20px`?
8. Warum gibt man mehrere Schriften an (`Arial, sans-serif`)?

<details><summary>Erwartete Antworten</summary>

1. Typ: `body`, `a`, `header`. Klasse: `.btn`. ID: `#hauptnav`.
2. Klassen sind mehrfach verwendbar, IDs nur einmal pro Seite.
3. Nachfahrenselektor: alle `a`, die irgendwo innerhalb von `#hauptnav` liegen.
4. Hexadezimal `#rrggbb`, außerdem `rgb()`, `hsl()` oder Farbnamen.
5. Manche Eigenschaften (z.B. `color`, `font-family`) werden an Kind-Elemente vererbt. Links bekommen aber vom Browser-Stylesheet eine eigene Farbe, die die geerbte überschreibt.
6. Spezifität bestimmt, welche Regel bei Konflikten gewinnt (ID > Klasse > Typ). `#hauptnav a` gewinnt.
7. oben/unten 10px, links/rechts 20px.
8. Fallback: Ist die erste Schrift nicht installiert, wird die nächste verwendet. Am Ende steht eine generische Familie.
</details>
