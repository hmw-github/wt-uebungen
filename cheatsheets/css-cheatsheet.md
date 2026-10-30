# CSS Cheat-Sheet

Alle CSS-Selektortypen und -Eigenschaften, die in den Übungen und
Musterlösungen (Kapitel 4–9) vorkommen – mit Beispielen aus dem
Portfolio-Projekt, den Demos und der Selektoren-Übung.

- [Selektoren](#selektoren)
- [Eigenschaften](#eigenschaften)

---

## Selektoren

| Selektortyp | Beispiel aus dem Projekt | Welche HTML-Elemente werden gestylt? |
| --- | --- | --- |
| **Universal** `*` | `* { box-sizing: border-box; }` | **Jedes** Element der Seite – von `<html>` bis zum letzten `<span>`. |
| **Typ** `element` | `thead { background-color: #2b2d42; color: #ffffff; }` | Jedes `<thead>`-Element, d. h. der Kopfbereich jeder Tabelle. Die Textfarbe wird an die enthaltenen `<tr>`/`<th>` vererbt. |
| **Klasse** `.klasse` | `.burger-button { display: none; … }` | Alle Elemente mit `class="burger-button"`, hier `<button class="burger-button">`. Eine Klasse darf auf beliebig vielen Elementen stehen. |
| **ID** `#id` | `#hauptnav { display: flex; }` | Genau das eine Element mit `id="hauptnav"`, hier `<nav id="hauptnav">`. Eine ID darf pro Seite nur einmal vorkommen. |
| **Verkettung** `a.b`, `#id.b`, `.a.b` | `#hauptnav.offen { display: flex; }` | Nur das Element, das **gleichzeitig** `id="hauptnav"` **und** die Klasse `offen` hat – also `<nav id="hauptnav" class="offen">`, nachdem JavaScript die Klasse gesetzt hat. Ebenso: `tr.hervorgehoben` (nur `<tr class="hervorgehoben">`), `.card.hervorgehoben` (nur `<div class="card hervorgehoben">`). |
| **Selektorliste** `a, b` | `input[type="text"], input[type="email"], textarea, select { … }` | **Jedes** Element, auf das **einer** der Teilselektoren passt: Textfelder, E-Mail-Felder, alle `<textarea>` und alle `<select>`. Spart doppelte Regeln. |
| **Nachfahre** `a b` (Leerzeichen) | `.container p { color: green; }` | Alle `<p>` **irgendwo** innerhalb von `<div class="container">` – egal wie tief verschachtelt: der Einleitungstext, die `<p>` in den `<article>` und auch das `<p>` in `<div class="info">`. |
| **Kind** `a > b` | `.container > p { background-color: blue; }` | Nur `<p>`, die **direkte Kinder** von `.container` sind (hier nur der Einleitungstext) – **nicht** die `<p>` innerhalb von `<article>`. Ebenso: `thead > tr`, `tbody > tr:hover`. |
| **Direkter Nachbar** `a + b` | `h2 + p.wichtig { color: red; font-weight: bold; }` | Ein `<p class="wichtig">`, das **unmittelbar nach** einem `<h2>` mit demselben Elternelement steht. Weiteres Beispiel: `.burger-button span + span` trifft das 2. und 3. `<span>` (jedes `<span>`, vor dem direkt ein `<span>` steht) – also alle Striche außer dem ersten. |
| **Allgemeiner Geschwister** `a ~ b` | `article ~ article { border: 1px solid gray; }` | Jedes `<article>`, das **irgendwann nach** einem anderen `<article>` im selben Elternelement steht – also alle Artikel außer dem ersten. |
| **Attribut** `[attr="wert"]` | `a[target="_blank"]::after { content: " \2197"; }` | Alle `<a>` mit genau `target="_blank"`, d. h. Links, die in einem neuen Tab öffnen. Ebenso: `input[type="email"]` trifft nur `<input type="email">`, nicht andere `<input>`. |
| **Attribut enthält** `[attr*="wert"]` | `[class*='col-'] { float: left; padding: 15px; }` | Alle Elemente, deren `class`-Attribut die Zeichenfolge `col-` **irgendwo enthält**: `<div class="col-3">`, `<div class="col-12">` usw. (Grid-Spalten in `rwd-uebung.html`). Ebenso `[class*='flex-item-']` in `flex-demo.html`. |
| **Pseudoklasse** `:hover` | `#hauptnav a:hover, .btn:hover { opacity: 0.85; }` | Ein Navigationslink bzw. Button **nur solange die Maus darüber steht**. Ebenso: `table tbody tr:hover` (Tabellenzeile unter der Maus), `.menu li:hover`. |
| **Pseudoklasse** `:nth-child()` | `table tbody tr:nth-child(even) { background-color: #edf2f4; }` | Jede **zweite** Zeile (2., 4., 6. …) im `<tbody>` jeder Tabelle („Zebrastreifen“). Mögliche Argumente: `even` (gerade), `odd` (ungerade), `3` (genau das 3. Kind), `3n` (jedes 3.), `2n+1` (= `odd`). |
| **Pseudoelement** `::after` | `.row::after { content: ''; clear: both; display: table; }` | Kein echtes HTML-Element: CSS erzeugt einen **zusätzlichen, unsichtbaren Inhalt am Ende** jedes `<div class="row">`, der die gefloateten Spalten „einfängt“ (Clearfix). Bei `a[target="_blank"]::after` wird so der Pfeil ↗ hinter den Linktext gesetzt. |
| **Media Query** `@media` *(At-Regel, kein Selektor)* | `@media (max-width: 600px) { #hauptnav { display: none; } #hauptnav.offen { display: flex; } }` | Die Regeln **innerhalb** gelten nur, wenn das Browserfenster höchstens 600px breit ist (Smartphone). Hier: Navigation ausblenden und nur bei geöffnetem Burger-Menü anzeigen. Weitere: `@media (max-width: 761px)` für `.projekt-card`, `media="print"` am `<link>` für `druck.css`. |

---

## Eigenschaften

| Eigenschaft | Beispiel aus dem Projekt | Erklärung & mögliche Werte |
| --- | --- | --- |
| `align-items` | `header { display: flex; align-items: center; }` | Ausrichtung der Flex-Items **quer** zur Hauptachse (bei `row` vertikal). Werte: `stretch` (Standard, volle Höhe), `flex-start` (oben/links), `center`, `flex-end`, `baseline`. |
| `background` | `.burger-button { background: none; }` | Kurzschreibweise für alle Hintergrund-Eigenschaften (Farbe, Bild, …). `none` entfernt den grauen Standard-Hintergrund des Buttons. |
| `background-color` | `table tbody tr:nth-child(even) { background-color: #edf2f4; }` | Hintergrundfarbe. Werte: Farbname (`lightblue`), Hex (`#2b2d42`), `rgb(244, 241, 241)`, `rgba(…)` mit Transparenz, `transparent`. |
| `border` | `table td, table th { border: 1px solid #8d99ae; }` | Rahmen auf allen vier Seiten, Kurzschreibweise **Breite Stil Farbe**. Stile: `solid`, `dotted`, `dashed`, `double`; `none` entfernt den Rahmen (z. B. bei `.btn`). |
| `border-collapse` | `table { border-collapse: collapse; }` | Rahmen benachbarter Tabellenzellen. `collapse`: zu einer Linie zusammenfassen; `separate` (Standard): jede Zelle hat einen eigenen Rahmen (Doppellinien). |
| `border-radius` | `#hauptnav a { border-radius: 4px; }` | Abgerundete Ecken. Werte: Länge (`4px`) oder `%` (`50%` ergibt bei quadratischen Elementen einen Kreis). |
| `border-top` | `footer { border-top: 1px solid #8d99ae; }` | Rahmen nur oben (analog `border-right`, `border-bottom`, `border-left`); Syntax wie `border`. |
| `box-shadow` | `.menu li { box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24); }` | Schatten um die Box: **x-Versatz y-Versatz Unschärfe Farbe**, mehrere Schatten kommagetrennt. `none` = kein Schatten. |
| `box-sizing` | `* { box-sizing: border-box; }` | Worauf sich `width`/`height` beziehen. `content-box` (Standard): nur Inhalt – Padding und Rahmen kommen **dazu**; `border-box`: Inhalt + Padding + Rahmen – die Box wird nie breiter als angegeben. |
| `clear` | `.row::after { clear: both; }` | Element darf nicht neben gefloateten Elementen stehen, sondern rutscht darunter. Werte: `left`, `right`, `both`, `none`. |
| `color` | `#hauptnav a { color: #ffffff; }` | Textfarbe (wird vererbt – außer bei Links, die eine eigene Browserfarbe haben). Werte wie bei `background-color`. Im Projekt auch inline: `<span style="color: red;">`. |
| `content` | `a[target="_blank"]::after { content: " \2197"; }` | Inhalt, den `::before`/`::after` erzeugen. Werte: Text in Anführungszeichen, Unicode-Escape (`\2197` = ↗), `''` (leer, z. B. für Clearfix). Ohne `content` erscheint das Pseudoelement nicht. |
| `cursor` | `.burger-button { cursor: pointer; }` | Mauszeiger über dem Element. Werte: `auto`, `default` (Pfeil), `pointer` (Hand wie bei Links), `text`, `not-allowed`, `move`. |
| `display` | `.burger-button { display: none; }` → in Media Query `display: flex;` | Wie das Element angezeigt wird: `block` (neue Zeile, volle Breite, z. B. `<div>`, `<p>`); `inline` (im Textfluss, `width`/`height` wirken nicht, z. B. `<a>`, `<span>`); `inline-block` (im Textfluss, aber `width`, `height`, `padding` wirken – z. B. `#hauptnav a`, `.btn`); `flex` (Flexbox-Container); `grid` (Grid-Container); `table` (verhält sich wie eine Tabelle, im Clearfix); `none` (ausgeblendet, nimmt keinen Platz ein). |
| `flex` | `.flex-item-2 { flex: 2; }` | Wie stark ein Flex-Item im Verhältnis zu den anderen wächst. `flex: 1` bei allen = gleich breit; `flex: 2` = doppelt so viel freier Platz wie ein Item mit `flex: 1`. |
| `flex-direction` | `@media (max-width: 600px) { header { flex-direction: column; } }` | Hauptachse des Flex-Containers. Werte: `row` (Standard, nebeneinander), `column` (untereinander), `row-reverse`, `column-reverse`. |
| `flex-wrap` | `.flex-container { display: flex; flex-wrap: wrap; }` | Ob Items in eine neue Zeile umbrechen dürfen. `nowrap` (Standard, alle in einer Zeile, werden ggf. gestaucht), `wrap` (Umbruch, wenn der Platz nicht reicht). |
| `float` | `[class*='col-'] { float: left; }` | Element aus dem normalen Fluss nach links/rechts schieben; nachfolgender Inhalt umfließt es. Werte: `left`, `right`, `none`. Heute meist durch Flexbox/Grid ersetzt (z. B. `#hauptnav { float: right; }` in Übung 4.3). |
| `font-family` | `h1, h2 { font-family: Georgia, serif; }` | Schriftart als Liste mit Ausweichschriften; die erste installierte wird genutzt. Letzter Eintrag ist eine generische Familie: `serif`, `sans-serif`, `monospace`. Namen mit Leerzeichen in Anführungszeichen (`'Lucida Sans'`). |
| `font-size` | `h1 { font-size: 2.5em; }` | Schriftgröße. Werte: `px` (absolut, `20px`), `em` (relativ zur Schriftgröße des Elternelements, `1.5em`), `rem` (relativ zu `<html>`), `%`. |
| `font-style` | `table caption { font-style: italic; }` | Schriftschnitt: `normal`, `italic` (kursiv), `oblique`. |
| `font-weight` | `h2 + p.wichtig { font-weight: bold; }` | Schriftstärke: `normal` (= 400), `bold` (= 700), `lighter`, `bolder` oder Zahl `100`–`900`. |
| `gap` | `footer p { display: flex; gap: 15px; }` | Abstand **zwischen** Flex- bzw. Grid-Items (nicht am Rand). Ein Wert für beide Richtungen oder `zeile spalte` (`10px 20px`). |
| `grid-template-columns` | `.grid-container { display: grid; grid-template-columns: 2fr 1fr 3fr 2fr 1fr 3fr; }` | Anzahl und Breite der Grid-Spalten. Einheiten: `fr` (Anteil am freien Platz), `px`, `%`, `auto`, `repeat(3, 1fr)`. Im Beispiel: 6 Spalten mit 2/12, 1/12, 3/12 … der Breite. |
| `height` | `.burger-button span { height: 3px; }` | Höhe der Box. Werte: Länge (`px`, `em`), `%` (der Elternhöhe), `auto` (Standard, ergibt sich aus dem Inhalt). Wirkt nicht bei `display: inline`. |
| `justify-content` | `header { display: flex; justify-content: space-between; }` | Verteilung der Flex-Items **entlang** der Hauptachse. Werte: `flex-start` (Standard), `center`, `flex-end`, `space-between` (erstes/letztes Item am Rand, Rest gleichmäßig), `space-around`, `space-evenly`. |
| `letter-spacing` | `h1 { letter-spacing: 1px; }` | Zusätzlicher Abstand zwischen den Buchstaben (`normal` oder Länge, auch negativ). |
| `line-height` | `p { line-height: 1.6; }` | Zeilenhöhe. Werte: Zahl **ohne Einheit** (Faktor der eigenen Schriftgröße, empfohlen), `px`, `em`, `normal`. |
| `list-style-type` | `<ul style="list-style-type: circle;">` / `.menu ul { list-style-type: none; }` | Aufzählungszeichen von Listen. Werte: `disc` (Standard bei `<ul>`), `circle`, `square`, `decimal` (Standard bei `<ol>`), `lower-alpha`, `upper-roman`, `none` (keine Zeichen, z. B. für Menüs). |
| `margin` | `main { margin: 5px auto; }` | **Außen**abstand. 1 Wert: alle Seiten; 2 Werte: `oben/unten links/rechts`; 4 Werte: `oben rechts unten links` (Uhrzeigersinn). `auto` links/rechts zentriert ein Block-Element mit fester/maximaler Breite. |
| `margin-top`, `margin-right`, `margin-bottom`, `margin-left` | `.burger-button span + span { margin-top: 5px; }` | Außenabstand nur auf einer Seite. Werte: Länge, `%`, `auto`, `0`. Im Projekt z. B. `.github-badge { margin-left: 30px; }`, `#hauptnav a { margin-right: 15px; }`. |
| `max-width` | `main { max-width: 600px; }` | Maximale Breite: auf großen Bildschirmen höchstens 600px, auf kleinen schrumpft das Element mit. Werte: Länge, `%`, `none`. |
| `min-height` | `.projekt-card { min-height: 250px; }` | Mindesthöhe – das Element wird bei mehr Inhalt höher, aber nie niedriger. Werte: Länge, `%`. |
| `min-width` | `[class*='flex-item-'] { min-width: 200px; }` | Mindestbreite – das Flex-Item wird nicht schmaler gestaucht (zusammen mit `flex-wrap: wrap` bricht es stattdessen um). |
| `opacity` | `.btn:hover { opacity: 0.85; }` | Deckkraft des ganzen Elements inkl. Inhalt: `0` (unsichtbar) bis `1` (voll sichtbar), auch als `%` (`85%`). |
| `order` | `.flex-item-3 { order: -1; }` | Reihenfolge eines Flex-/Grid-Items unabhängig vom HTML. Standard `0`; kleinere Werte kommen zuerst, `-1` setzt das Item an den Anfang. |
| `overflow` | `.staerke-box { overflow: hidden; }` | Was mit Inhalt passiert, der über die Box hinausragt: `visible` (Standard, ragt heraus), `hidden` (abschneiden), `scroll` (immer Scrollbalken), `auto` (Scrollbalken nur bei Bedarf). |
| `padding` | `.btn { padding: 8px 16px; }` | **Innen**abstand zwischen Inhalt und Rahmen; Hintergrundfarbe reicht bis in das Padding. Schreibweise wie `margin` (1, 2 oder 4 Werte), aber **kein** `auto` und keine negativen Werte. |
| `position` | `header { position: relative; }` + `.burger-button { position: absolute; }` | Positionierungsart: `static` (Standard, normaler Fluss); `relative` (bleibt im Fluss, dient als Bezugspunkt für absolute Kinder); `absolute` (aus dem Fluss genommen, Position relativ zum nächsten positionierten Vorfahren – hier dem `<header>`); `fixed` (relativ zum Browserfenster); `sticky`. |
| `top`, `right`, `left` | `.burger-button { position: absolute; top: 14px; right: 20px; }` | Abstand zum jeweiligen Rand des Bezugselements (analog `bottom`); wirkt nur zusammen mit `position` ≠ `static`. Im Beispiel: 14px von oben, 20px von rechts im `<header>`. |
| `text-align` | `.grid-item { text-align: center; }` | Horizontale Ausrichtung von Text und Inline-Inhalten **innerhalb** des Elements: `left`, `right`, `center`, `justify` (Blocksatz). |
| `text-decoration` | `a { text-decoration: none; }` | Linien am Text: `none` (z. B. Unterstreichung von Links entfernen), `underline`, `line-through`, `overline`. |
| `width` | `.projekte-table-link-col { width: 120px; }` | Breite der Box. Werte: Länge (`px`), `%` der Elternbreite (z. B. `.col-4 { width: 33.33%; }`, `table { width: 100%; }`), `auto` (Standard). Wirkt nicht bei `display: inline`; ob Padding/Rahmen dazuzählen, regelt `box-sizing`. |

---

*Erhoben aus allen `.css`-Dateien sowie `<style>`-Blöcken und
`style`-Attributen in `exercises/` und `solutions/` (Stand Oktober 2026).*
