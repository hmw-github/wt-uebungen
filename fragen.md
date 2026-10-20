# Einstiegsfragen zu den Übungen

Zu Beginn jeder Übung werden diese Fragen gemeinsam beantwortet. Sie
fragen das Grundwissen ab, das für die konkreten TODOs der jeweiligen
Übung gebraucht wird. Zu jeder Frage gibt es eine kurze erwartete
Antwort (zum Aufklappen), damit die Fragen auch ohne Antworten gezeigt
werden können.

---

# Kapitel 3 – HTML

## 3.1 Portfolio-Website (`01_portfolio_aufgabe`)

### Grundgerüst

1. Wozu dient die Zeile `<!DOCTYPE html>` und was passiert, wenn sie fehlt?
2. Welche Aufgaben haben `<head>` und `<body>`? Welche der TODOs in `index.html` gehören in welchen Bereich?
3. Wo wird der Inhalt von `<title>` angezeigt und warum sollte jede Seite einen eigenen Titel haben?
4. Was bewirkt `<meta charset="UTF-8">`? Was sieht man ohne die Angabe z.B. bei „Über mich“?
5. Was bewirkt `<meta name="viewport" content="width=device-width, initial-scale=1.0">` auf einem Smartphone?
6. Was ist der Unterschied zwischen `<h1>` und `<p>`? Warum sollte es pro Seite nur eine `<h1>` geben?
7. Wie sieht ein HTML-Kommentar aus? Ist er für Besucher/-innen der Seite sichtbar?

<details><summary>Erwartete Antworten</summary>

1. Sie sagt dem Browser, dass es sich um ein HTML5-Dokument handelt. Ohne sie schaltet der Browser in den „Quirks Mode“ und stellt manche Dinge anders (veraltet) dar.
2. `<head>` enthält Metadaten (title, meta, später link/script), `<body>` den sichtbaren Inhalt. TODO 1 steht vor `<html>`, TODO 2–4 im head, TODO 5–15 im body.
3. Im Browser-Tab, in Lesezeichen und in Suchergebnissen. Eigene Titel machen Seiten unterscheidbar (Nutzer, Suchmaschinen, Barrierefreiheit).
4. Er legt die Zeichenkodierung fest. Ohne ihn können Umlaute falsch angezeigt werden (z.B. „Ãœber mich“).
5. Die Seite wird in Gerätebreite und ohne Zoom dargestellt. Ohne das Tag simuliert der Browser einen ca. 980 px breiten Desktop und verkleinert die Seite.
6. `<h1>` ist die Hauptüberschrift (Semantik, Gliederung), `<p>` ein Absatz. Eine `<h1>` pro Seite hält die Gliederung für Screenreader und Suchmaschinen eindeutig.
7. `<!-- Kommentar -->`. Er wird nicht dargestellt, ist aber im Quelltext für alle sichtbar.
</details>

### Textstrukturierung

1. Was ist der Unterschied zwischen Block- und Inline-Elementen? Ordnen Sie zu: `div`, `p`, `span`, `strong`, `em`, `pre`, `hr`.
2. Wozu dienen `div` und `span`, wenn sie selbst keine Bedeutung haben?
3. Was ist der Unterschied zwischen `strong`/`em` und `b`/`i`?
4. Wie setzt man ein Inline-Style, z.B. für die Schriftfarbe? Warum ist das auf Dauer keine gute Lösung?
5. Warum wird ein Zeilenumbruch im HTML-Quelltext nicht angezeigt? Wann ist `<br>` angebracht und wann nicht?
6. Was ist das Besondere an `<pre>`? Was muss man beachten, wenn der Code darin `<` oder `>` enthält?
7. Welche Elemente sind „leere Elemente“ ohne End-Tag?

<details><summary>Erwartete Antworten</summary>

1. Block-Elemente beginnen in einer neuen Zeile und nehmen die volle Breite ein (`div`, `p`, `pre`, `hr`). Inline-Elemente stehen im Textfluss (`span`, `strong`, `em`).
2. Sie sind neutrale Container, um Inhalte zu gruppieren (`div`) oder Textteile zu markieren (`span`), vor allem um sie später mit CSS/JS anzusprechen.
3. `strong`/`em` haben Bedeutung (starke Wichtigkeit / Betonung, z.B. für Screenreader). `b`/`i` sind nur Darstellung.
4. Mit `style="color: red;"`. Die Formatierung steckt dann in jedem Element einzeln: schwer zu warten und nicht wiederverwendbar (siehe Kapitel 4).
5. Der Browser fasst Leerraum (Leerzeichen, Umbrüche) zu einem Leerzeichen zusammen. `<br>` ist für inhaltlich bedingte Umbrüche gedacht (Adresse, Gedicht), nicht für Abstände.
6. Leerzeichen und Zeilenumbrüche bleiben erhalten, Schrift ist nichtproportional. `<`, `>` müssen als `&lt;`, `&gt;` geschrieben werden.
7. U.a. `br`, `hr`, `img`, `meta`, `input`, `link`.
</details>

### Listen

1. Welche drei Listenarten gibt es in HTML und wann verwendet man welche?
2. Welche Elemente dürfen direkt in `<ol>`/`<ul>` stehen?
3. Wie verschachtelt man eine Liste korrekt? Wo steht die innere `<ul>`?
4. Wie ändert man das Aufzählungszeichen einer Liste (z.B. auf Kreise)?
5. Wie ist eine Definitionsliste aufgebaut? Was bedeuten `dt` und `dd`?

<details><summary>Erwartete Antworten</summary>

1. `ol` (geordnet, Reihenfolge wichtig, z.B. Werdegang), `ul` (ungeordnet, z.B. Fähigkeiten), `dl` (Begriff–Erklärung, z.B. Glossar).
2. Nur `<li>`.
3. Die innere Liste steht **innerhalb** eines `<li>` der äußeren Liste, z.B. `<li>Frontend <ul>…</ul></li>`.
4. Per CSS-Eigenschaft `list-style-type`, z.B. `style="list-style-type: circle"` (Werte u.a. `disc`, `circle`, `square`, `none`).
5. `<dl>` enthält Paare aus `<dt>` (definition term, Begriff) und `<dd>` (definition description, Erklärung).
</details>

### Hyperlinks

1. Wie ist ein Link aufgebaut? Welche Rolle hat das Attribut `href`?
2. Was ist der Unterschied zwischen einem absoluten und einem relativen Link? Geben Sie je ein Beispiel aus der Übung an.
3. Was bedeutet `../` in einem Pfad? Warum braucht `rechtliches/impressum.html` den Pfad `../index.html`?
4. Wie öffnet man einen Link in einem neuen Tab?
5. Wie macht man ein Bild zu einem Link?
6. Welche Aufgabe haben `header`, `nav` und `footer`? Was ändert sich optisch dadurch?
7. Wie kann man einen `button` als Link verwenden (zwei Möglichkeiten)?

<details><summary>Erwartete Antworten</summary>

1. `<a href="ziel">Linktext</a>`. `href` gibt das Ziel des Links an.
2. Absolut: vollständige URL mit Protokoll und Host (`https://github.com/alexberger`). Relativ: Pfad ausgehend von der aktuellen Datei (`projekte.html`, `rechtliches/impressum.html`).
3. Eine Verzeichnisebene nach oben. Das Impressum liegt im Unterordner, die Startseite eine Ebene höher.
4. Mit `target="_blank"`.
5. Das `<img>` wird in ein `<a>` gesetzt: `<a href="index.html"><img …></a>`.
6. Sie sind semantische Elemente (Kopfbereich, Navigation, Fußbereich). Optisch ändern sie ohne CSS nichts, sie verbessern aber Struktur und Barrierefreiheit.
7. `<a href="projekte.html"><button>…</button></a>` (so in der Musterlösung) oder ein Button mit `onclick="location.href='projekte.html'"`. Hinweis zur Diskussion: Ein `button` in einem `a` ist laut HTML-Spezifikation eigentlich ungültig (interaktives Element in interaktivem Element). Sauberer ist ein `<a>`, das per CSS wie ein Button aussieht (so ab Kapitel 4 mit der Klasse `btn`).
</details>

### Bilder

1. Welche Attribute braucht ein `<img>` mindestens? Warum ist `alt` wichtig?
2. Wann schreibt man einen relativen und wann einen absoluten Bildpfad? Was ist der Nachteil externer Bilder?
3. Warum gibt man `width` und `height` an, auch wenn das Bild schon die richtige Größe hat?
4. Was ist der Unterschied zwischen `alt` und `title`?
5. Vergleichen Sie JPEG, PNG, GIF und SVG: Wofür eignet sich welches Format? Welche unterstützen Transparenz?

<details><summary>Erwartete Antworten</summary>

1. `src` und `alt`. `alt` wird angezeigt, wenn das Bild nicht lädt, und von Screenreadern vorgelesen.
2. Relativ für eigene Bilder im Projekt, absolut für Bilder von anderen Servern. Externe Bilder können verschwinden oder sich ändern, und der fremde Server sieht die Aufrufe.
3. Der Browser reserviert den Platz schon vor dem Laden, dadurch springt das Layout nicht.
4. `alt` ist Ersatztext für das Bild, `title` ist ein zusätzlicher Tooltip beim Überfahren mit der Maus.
5. JPEG: Fotos, verlustbehaftet, keine Transparenz. PNG: Grafiken/Screenshots, verlustfrei, Transparenz. GIF: 256 Farben, einfache Animationen, einfache Transparenz. SVG: Vektorgrafik, beliebig skalierbar, Transparenz, ideal für Logos.
</details>

### Tabellen

1. Aus welchen Elementen besteht eine Tabelle?
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

## 3.2 Kontaktformular (`02_kontaktformular_aufgabe`)

1. Wie funktioniert ein Formular?
2. Was bedeuten die Attribute `action` und `method` eines Formulars?
3. Was ist der Unterschied zwischen GET und POST beim Absenden?
4. Wozu dient das Attribut `name` eines Eingabefelds? Und wozu `id`?
5. Wie verknüpft man ein `label` mit einem Eingabefeld und welchen Vorteil hat das?
6. Was bewirkt `required`? Was bringt `type="email"` gegenüber `type="text"`?
7. Warum müssen zwei Radiobuttons denselben `name` haben? Wozu dient `value`?
8. Wie wählt man eine `option` in einem `select` vor?
9. Was ist der Unterschied zwischen `input` und `textarea`?
10. Was wird bei einer nicht angehakten Checkbox an den Server gesendet?

<details><summary>Erwartete Antworten</summary>

1. Bei einem `submit`-Ereignis (z.B. submit-Button gedrückt) wird das Formular an den mit `action` spezifizierten URL gesendet. `method` definiert, wie die Eingabefelder übertragen werden. Ist `action` leer (oder fehlt), so wird die selbe Seite nochmal angefordert.
2. `action`: URL, an die die Daten gesendet werden. `method`: HTTP-Methode (GET oder POST).
3. GET hängt die Daten sichtbar an die URL (Länge begrenzt, als Link teilbar). POST sendet sie im Request-Body.
4. `name` ist der Schlüssel, unter dem der Wert gesendet wird. `id` identifiziert das Element eindeutig in der Seite (für label, CSS, JS).
5. `<label for="nameFeld">` und `<input id="nameFeld">` (oder Feld im label einschließen). Klick auf das label fokussiert das Feld, Screenreader lesen das label vor.
6. `required`: Browser verhindert das Absenden bei leerem Feld. `type="email"` prüft das Format und zeigt auf Smartphones eine passende Tastatur.
7. Radiobuttons mit gleichem `name` bilden eine Gruppe, in der nur einer wählbar ist. `value` ist der gesendete Wert.
8. Mit dem Attribut `selected`.
9. `input` ist einzeilig (leeres Element), `textarea` mehrzeilig mit Start- und End-Tag.
10. Nichts: Das Feld fehlt komplett in den gesendeten Daten (wichtig für Kapitel 6).
</details>

---

# Kapitel 4 – CSS

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

## 4.2 Layout und fortgeschrittene Selektoren (`02_layout_und_selektoren_aufgabe`)

### Display und Float

1. Welche Werte von `display` kennen Sie?
2. Was bewirkt `float: right`? Wie verhalten sich die nachfolgenden Inhalte?
3. Wie richtet man die gefloatete Navigation vertikal ungefähr an der Mitte des Logos aus?
4. Wie zentriert man Links und Text innerhalb eines Absatzes?
5. Warum stehen die Navigationslinks nebeneinander, obwohl `#hauptnav` selbst ein Block-Element ist?

<details><summary>Erwartete Antworten</summary>

1. block: eigene Zeile, volle Breite; inline: im Textfluss; inline-block: im Textfluss mit Box-Eigenschaften; none: unsichtbar.
2. Das Element wird aus dem normalen Fluss genommen und an den rechten Rand des Elternelements geschoben. Nachfolgender Inhalt umfließt es auf der linken Seite.
3. Über einen passenden `margin-top`, hier 8px: Das Logo ist 50px hoch, die Links mit Padding etwa 34px.
4. Mit `text-align: center` am umgebenden Block-Element, denn Links und Text sind Inline-Inhalte.
5. Die Links selbst sind `inline-block` und liegen daher im Textfluss nebeneinander. `display` von `#hauptnav` wirkt nur auf das `nav`-Element.
</details>

### Fortgeschrittene Selektoren

1. Was ist eine Pseudoklasse? Nennen Sie Beispiele.
2. Was bedeutet `tr:nth-child(even)`? Wie würde man jede dritte Zeile ansprechen?
3. Was bewirkt `opacity: 0.85`?
4. Was ist ein Attributselektor? Was trifft `input[type="email"]`?
5. Was ist ein Pseudoelement? Was ist der Unterschied zwischen `:` und `::`?
6. Was macht `::after` zusammen mit `content`? Was bedeutet `"\2197"`?
7. Warum kann die Reihenfolge der Regeln wichtig sein (z.B. Zebra-Streifen und `tr:hover`)?

<details><summary>Erwartete Antworten</summary>

1. Sie spricht Elemente in einem bestimmten Zustand oder an einer bestimmten Position an.
2. Jede gerade Zeile (2, 4, …). Jede dritte: `nth-child(3n)`.
3. Deckkraft 85 %: Das Element wird leicht durchsichtig.
4. Er wählt Elemente anhand eines Attributs oder Attributwerts. `input[type="email"]` trifft alle E-Mail-Eingabefelder.
5. Pseudoelemente sprechen einen Teil eines Elements an bzw. erzeugen zusätzlichen Inhalt. `:` für Pseudoklassen, `::` für Pseudoelemente.
6. Fügt nach dem Inhalt des Elements den Text aus `content` ein. `\2197` ist der Unicode-Codepunkt für „↗“.
7. Bei gleicher Spezifität gewinnt die spätere Regel. `tr:hover` muss also nach der Zebra-Regel stehen, sonst wirkt der Hover bei geraden Zeilen nicht.
</details>

## 4.3 Responsive Design (`03_responsive_design_aufgabe`)

1. Was versteht man unter Responsive Web Design?
2. Wie ist eine Media Query aufgebaut? Wann greift `@media (max-width: 600px)`?
3. Warum muss die Media Query am Ende des Stylesheets stehen?
4. Warum stehen Logo und Navigation untereinander, sobald `#hauptnav` `float: none` erhält? Was ändert sich bei den Navigationslinks durch `display: block` statt `inline-block`?
5. Wie wird der Burger-Button oben rechts platziert? Welche Rolle spielt dabei `position: relative` am Header?
6. Worauf bezieht sich `width: 100%`?
7. Welche Rolle spielt das viewport-Meta-Tag aus Übung 3.1 dabei?
8. Wie testet man eine Seite in verschiedenen Bildschirmgrößen?

<details><summary>Erwartete Antworten</summary>

1. Die Seite passt sich an verschiedene Bildschirmgrößen an (Layout, Schrift, Bilder).
2. `@media (bedingung) { regeln }`. Sie greift, wenn der Viewport höchstens 600 px breit ist.
3. Sonst würden spätere Regeln mit gleicher Spezifität die Werte wieder überschreiben.
4. Ohne Float gilt der normale Dokumentfluss: Block-Elemente wie `<nav>` beginnen eine neue Zeile und nehmen die volle Breite ein, daher steht die Navigation unter dem Logo. Links mit `inline-block` liegen nebeneinander im Textfluss, mit `block` erhält jeder Link eine eigene Zeile.
5. Mit `position: absolute` und `top`/`right` wird der Button aus dem Fluss genommen und relativ zum nächsten positionierten Vorfahren platziert. Durch `position: relative` ist das der Header (sonst der Viewport bzw. das Dokument).
6. Auf die Inhaltsbreite des Elternelements.
7. Ohne das Tag meldet ein Smartphone eine Breite von ca. 980 px, und die Media Query greift nie.
8. Gerätesymbolleiste / responsive Ansicht in den DevTools oder Fenster verkleinern.
</details>

---

# Kapitel 5 – JavaScript

## 5.1 JavaScript-Grundlagen (`01_js_grundlagen_aufgabe.html`)

### Sprachkonzepte und Klassen

1. Was ist der Unterschied zwischen `var`, `let` und `const`?
2. Welche Datentypen gibt es in JavaScript? Was liefert `typeof`?
3. Was ergibt `"Kapitel " + 5`? Warum?
4. Was ist der Unterschied zwischen `==` und `===`? Was ergeben `1 == "1"` und `1 === "1"`?
5. Wie definiert man eine Klasse mit Konstruktor? Wozu dient `this`?
6. Was sind Getter und Setter? Warum speichert man Werte oft in `this._titel`?
7. Was bedeuten `extends` und `super`? Wann muss `super(...)` aufgerufen werden?
8. Was prüft `instanceof`?
9. Wie funktionieren `throw` und `try...catch`?
10. Was ist der Unterschied zwischen einer klassischen `for`-Schleife und `for...of`?
11. Welche Array-Methoden werden gebraucht? Was machen sie?
12. Warum braucht `sort()` für Zahlen eine Vergleichsfunktion? Wie sieht sie aus?
13. Was ist Destrukturierung, z.B. `const [a, b] = liste.alsArray();`?
14. Wie ist ein `switch` aufgebaut? Warum braucht man `break`?

<details><summary>Erwartete Antworten</summary>

1. `var`: funktionsweiter Gültigkeitsbereich, veraltet. `let`: blockweit, änderbar. `const`: blockweit, nicht neu zuweisbar.
2. `number`, `string`, `boolean`, `undefined`, `null`, `bigint`, `symbol`, `object` (inkl. Arrays, Funktionen: `typeof` liefert `"function"`). `typeof` gibt den Typ als String zurück.
3. `"Kapitel 5"` (String): Beim `+` mit einem String wird die Zahl umgewandelt und verkettet.
4. `==` vergleicht nach Typumwandlung, `===` ohne. `true` bzw. `false`.
5. `class Projekt { constructor(id, titel, jahr) { this._id = id; … } }`. `this` ist das aktuelle Objekt.
6. Methoden, die wie Eigenschaften benutzt werden (`p.titel`, `p.titel = …`) und dabei prüfen oder umrechnen können. Der Unterstrich verhindert, dass der Setter sich selbst aufruft (Endlosschleife).
7. `extends` erbt von einer Klasse, `super(...)` ruft den Konstruktor der Basisklasse auf (vor dem ersten Zugriff auf `this`), `super.methode()` die Methode der Basisklasse.
8. Ob ein Objekt eine Instanz einer Klasse (oder Unterklasse) ist.
9. `throw new Error("…")` löst einen Fehler aus. Im `try` ausgelöste Fehler werden im `catch (e)` abgefangen, `e.message` enthält die Meldung.
10. Die `for`-Schleife läuft über einen Index (nötig z.B. für `splice(i, 1)`), `for...of` direkt über die Werte.
11. `push`: anhängen; `find`: erstes passendes Element (oder `undefined`); `splice(i, n)`: n Elemente ab Index i entfernen; `sort`: sortiert das Array selbst.
12. Ohne Vergleichsfunktion wird als String sortiert. `(a, b) => a.jahr - b.jahr`.
13. Werte eines Arrays werden der Reihe nach einzelnen Variablen zugewiesen.
14. `switch (x) { case 0: …; break; default: … }`. Ohne `break` läuft die Ausführung in den nächsten `case` weiter.
</details>

### JSON und localStorage

1. Was ist JSON? Wofür wird es verwendet?
2. Wie unterscheidet sich JSON von einem JavaScript-Objekt-Literal?
3. Was machen `JSON.stringify()` und `JSON.parse()`? Welcher Datentyp kommt jeweils heraus?
4. Was ist `localStorage`? Welche Werte kann man darin speichern?
5. Warum muss man ein Objekt vor dem Speichern in `localStorage` in JSON umwandeln?
6. Wie lange bleiben Daten im `localStorage` erhalten? Worin unterscheidet sich `sessionStorage`?
7. Wo kann man den Inhalt von `localStorage` im Browser ansehen?

<details><summary>Erwartete Antworten</summary>

1. JavaScript Object Notation: ein textbasiertes Format für Datenaustausch (z.B. zwischen Client und Server, später REST).
2. Schlüssel und Strings stehen immer in doppelten Anführungszeichen. Keine Funktionen, kein `undefined`, keine Kommentare.
3. `stringify`: Objekt → String. `parse`: String → Objekt.
4. Ein Schlüssel-Wert-Speicher im Browser, pro Origin. Er speichert nur Strings.
5. Sonst wird `toString()` verwendet und es steht `"[object Object]"` im Speicher.
6. Dauerhaft, bis sie gelöscht werden. `sessionStorage` gilt nur für den aktuellen Tab.
7. DevTools → Anwendung/Speicher → Local Storage.
</details>

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

---

# Kapitel 6 – PHP

## 6.1 PHP-Grundlagen (`01_php_basics_aufgabe.php`)

1. Wo wird PHP ausgeführt, und was bekommt der Browser zu sehen?
2. Wie wird PHP in HTML eingebettet? Wie beginnen Variablen?
3. Was liefert `gettype()`? Welche Datentypen gibt es in PHP?
4. Mit welchem Operator verkettet man Strings? Was ist der Unterschied zwischen `'…'` und `"…"`?
5. Was bedeutet das Format `"H:i:s d.m.Y"` bei `date()`?
6. Was ist der Unterschied zwischen einem indizierten und einem assoziativen Array? Wie sieht `foreach` jeweils aus?
7. Was ist der Unterschied zwischen `switch` und `match`?
8. Was ist der Unterschied zwischen Wert- und Referenzparameter? Wie kennzeichnet man einen Referenzparameter?
9. Wie definiert man in PHP eine Klasse mit Konstruktor und privaten Eigenschaften? Wie greift man auf sie zu?
10. Was bewirkt `__toString()`?
11. Wie ruft man Konstruktor und Methoden der Basisklasse auf?
12. Wie erzeugt man ein Objekt und ruft eine Methode auf?

<details><summary>Erwartete Antworten</summary>

1. Auf dem Server. Der Browser erhält nur die Ausgabe (meist HTML), nie den PHP-Code.
2. `<?php … ?>`; Variablen beginnen mit `$`.
3. Den Typ als String, z.B. `string`, `integer`, `double`, `boolean`, `array`, `object`, `NULL`.
4. Mit `.`. In `"…"` werden Variablen ersetzt, in `'…'` nicht.
5. Stunde (24h):Minute:Sekunde Tag.Monat.Jahr (4-stellig).
6. Indiziert: Schlüssel 0, 1, 2 … → `foreach ($jahre as $jahr)`. Assoziativ: eigene Schlüssel → `foreach ($arr as $schluessel => $wert)`.
7. `switch` vergleicht lose und braucht `break`. `match` ist ein Ausdruck mit striktem Vergleich, der einen Wert zurückgibt.
8. Beim Wertparameter arbeitet die Funktion mit einer Kopie, beim Referenzparameter (`&`) mit der Originalvariable des Aufrufers.
9. `class Projekt { private $titel; public function __construct($titel) { $this->titel = $titel; } }`
10. Legt fest, welcher String entsteht, wenn das Objekt als String verwendet wird (z.B. bei `echo`).
11. `parent::__construct(...)`, `parent::__toString()`.
12. `$p = new Projekt("…", "…");`, `$p->methode();`
</details>

## 6.2 Formularverarbeitung mit POST (`02_formular_post_aufgabe`)

1. Wie gelangen die Werte aus `kontakt.html` in `kontakt-verarbeiten.php`? Welche Rolle spielen `action`, `method` und `name`?
2. Was ist `$_POST`?
3. Warum reicht `isset()` für Pflichtfelder nicht aus? Wie prüft man zusätzlich auf „nicht leer“?
4. Warum ist `$_POST['newsletter']` bei nicht angehakter Checkbox nicht gesetzt? Wie macht man daraus einen Boolean?
5. Wofür verwendet man `??` bei `betreff` und `rueckmeldung`?
6. Was ist XSS? Was macht `htmlspecialchars()` genau?
7. Warum reicht die `required`-Prüfung im Browser nicht aus?
8. Was ist der Unterschied zwischen `$_POST` und `$_GET`? Wann wäre ein Formular mit `method="get"` die bessere Wahl?

<details><summary>Erwartete Antworten</summary>

1. Der Browser sendet die Felder als Schlüssel (`name`) und Wert per POST an die URL aus `action`.
2. Ein superglobales Array mit den per POST gesendeten Formularwerten.
3. Ein leeres Textfeld wird trotzdem mitgesendet (leerer String). Zusätzlich `!empty()` oder `trim(...) !== ""` prüfen.
4. Nicht angehakte Checkboxen werden nicht mitgesendet. `$newsletter = isset($_POST['newsletter']);`
5. Um einen Standardwert zu setzen, falls der Wert fehlt.
6. Cross-Site-Scripting: Eingeschleuster Code wird im Browser anderer ausgeführt. `htmlspecialchars()` wandelt `<`, `>`, `&`, `"`, `'` in HTML-Entities um.
7. Browserprüfungen lassen sich umgehen (DevTools, direkte HTTP-Anfragen). Der Server muss selbst prüfen.
8. `$_GET` enthält die Parameter aus der URL (Query-String), `$_POST` die Werte aus dem Request-Body. GET eignet sich für Abfragen ohne Seiteneffekte, deren Ergebnis man als Link teilen oder als Lesezeichen speichern möchte (Suche, Filter); POST für Daten, die etwas verändern oder nicht in der URL stehen sollen (Kontaktformular).
</details>

## 6.3 Sessions (`03_sessions_aufgabe`)

1. Warum „vergisst“ der Server ohne Sessions alles zwischen zwei Anfragen?
2. Wie funktioniert eine PHP-Session?
3. Warum muss `session_start()` vor jeder Ausgabe stehen?
4. Wie liest und schreibt man Werte in `$_SESSION`?
5. Warum muss man `$_SESSION['gaestebucheintraege']` zuerst als leeres Array initialisieren?
6. Wie hängt man in PHP ein Element an ein Array an?
7. Warum wird `kontakt.html` zu `kontakt.php`?
8. Wer sieht die Gästebucheinträge – alle Besucher oder nur man selbst? Warum?

<details><summary>Erwartete Antworten</summary>

1. Jede HTTP-Anfrage ist unabhängig, der Server kennt keinen Zusammenhang zwischen ihnen.
2. PHP erzeugt eine Session-ID, schickt sie als Cookie (`PHPSESSID`) an den Browser und speichert die Daten unter dieser ID auf dem Server. Bei jeder Anfrage sendet der Browser das Cookie mit.
3. Das Session-Cookie wird als HTTP-Header gesendet, und Header müssen vor dem Body kommen.
4. Wie bei einem assoziativen Array: `$_SESSION['schluessel'] = wert;`
5. Sonst ist der Schlüssel beim ersten Aufruf nicht vorhanden (Warnung, `foreach` über `null`).
6. `$array[] = $wert;` (oder `array_push`).
7. Nur `.php`-Dateien werden vom Server durch PHP ausgeführt.
8. Nur man selbst, denn die Session ist an den eigenen Browser gebunden. Ein echtes Gästebuch bräuchte eine Datenbank.
</details>

## 6.4 MVC2 (`04_mvc2_aufgabe`)

1. Was sind die Aufgaben von Model, View und Controller?
2. Was ist das Besondere an MVC2 (Model 2) für Webanwendungen?
3. Welche Klasse darf auf `$_POST` zugreifen, welche auf `$_SESSION`, welche gibt HTML aus?
4. Wie läuft eine Anfrage vom Aufruf von `gaestebuch/index.php` bis zur fertigen Seite?
5. Warum bekommt die View das Model im Konstruktor übergeben?
6. Was ist Autoloading und wie richtet man es in PHP ein?
7. Warum müssen die Pfade in der View um `../` ergänzt werden?
8. Welche Vorteile bringt die Trennung gegenüber der Lösung aus Übung 6.3?

<details><summary>Erwartete Antworten</summary>

1. Model: Daten und Logik (Einträge speichern/liefern). View: Darstellung (HTML). Controller: nimmt die Anfrage entgegen und steuert Model und View.
2. Ein zentraler Controller als Einstiegspunkt nimmt alle Anfragen an, die View wird danach serverseitig erzeugt.
3. Controller: `$_POST`. Model: `$_SESSION`. View: HTML-Ausgabe.
4. `index.php` startet Session und Controller → Controller erzeugt Model, verarbeitet evtl. POST → erzeugt View mit Model → `render()` gibt HTML aus.
5. Die View holt sich die anzuzeigenden Daten über das Model (`alleEintraege()`).
6. PHP lädt die Datei einer Klasse automatisch, wenn die Klasse das erste Mal verwendet wird. Man braucht kein `require` pro Klasse.
7. Die Seite liegt im Unterordner `gaestebuch/`, CSS, Bilder und andere Seiten liegen eine Ebene höher.
8. Bessere Übersicht, Austauschbarkeit (z.B. Datenbank statt Session), Wiederverwendung (in Kapitel 8 nutzt die API dasselbe Model).
</details>

---

# Kapitel 7 – Bootstrap

## 7.1 Grid und Komponenten (`01_grid_und_komponenten_aufgabe`)

### Container und Grid

1. Was ist Bootstrap und wie wird es hier eingebunden? Wozu dient das JS-Bundle?
2. Was ist der Unterschied zwischen `container` und `container-fluid`?
3. Wie ist das Grid aufgebaut? Warum 12 Spalten?
4. Was bedeutet `col-sm-4`? Was passiert unterhalb des Breakpoints `sm`?
5. Welche Breakpoints gibt es?
6. Was bedeutet die Klasse `mt-4`?
7. Wie hängt das Bootstrap-Grid mit Flexbox und Media Queries aus Kapitel 4 zusammen?

<details><summary>Erwartete Antworten</summary>

1. Ein CSS/JS-Framework mit fertigen Klassen und Komponenten. CSS per `<link>` im head, JS-Bundle (inkl. Popper) vor `</body>`, das für interaktive Komponenten (Tabs, Modal) nötig ist.
2. `container`: zentriert, feste maximale Breite je Breakpoint. `container-fluid`: immer 100 % Breite.
3. Ein Container enthält Zeilen (`row`), Zeilen enthalten Spalten (`col-*`). 12 ist durch 1, 2, 3, 4, 6 teilbar.
4. Ab Breakpoint `sm` (≥ 576 px) nimmt die Spalte 4 von 12 Einheiten ein, darunter die volle Breite (untereinander).
5. sm ≥ 576, md ≥ 768, lg ≥ 992, xl ≥ 1200, xxl ≥ 1400 px.
6. margin-top Stufe 4 (1.5rem). Spacing-Klassen: `m`/`p` + Richtung (`t`, `b`, `s`, `e`, `x`, `y`) + Stufe 0–5.
7. `row` ist ein Flex-Container, die Spaltenbreiten werden über Media Queries für die Breakpoints gesetzt.
</details>

### Buttons

1. Warum braucht jeder Bootstrap-Button die Grundklasse `btn`?
2. Was bedeuten `btn-primary`, `btn-secondary` und `btn-outline-secondary`?
3. Was bewirken `btn-lg` und `btn-sm`?
4. Kann man die Klassen auch auf `<a>` verwenden? Wann nimmt man `<a>`, wann `<button>`?
5. Was passiert mit den eigenen `.btn`-Regeln aus Kapitel 4, wenn Bootstrap ebenfalls `.btn` definiert?

<details><summary>Erwartete Antworten</summary>

1. Sie liefert die Grundgestaltung (Padding, Rahmen, Schrift). Die Varianten legen nur Farben fest.
2. Semantische Farbvarianten: Hauptaktion, Nebenaktion, nur Umrandung.
3. Großer bzw. kleiner Button.
4. Ja. `<a>` für Navigation zu einer anderen Seite, `<button>` für Aktionen auf der Seite oder zum Absenden.
5. Beide Regeln gelten. Bei Konflikten entscheiden Spezifität und Reihenfolge der Einbindung, deshalb auf Überschneidungen achten.
</details>

### Cards

1. Wie ist eine Bootstrap-Card aufgebaut?
2. Warum steckt jede Card in einer Spalte `col-md-6`? Wie viele Cards stehen nebeneinander?
3. Wie erzeugt man per JavaScript ein Element mit Klassen und ID?
4. Was sind `data-*`-Attribute? Wie greift man mit `dataset` darauf zu?
5. Warum bekommt jede Card eine eindeutige `cardId` und die Elemente IDs wie `card1-titel`?
6. Wie übergibt man beim `addEventListener` einen Parameter an eine Funktion (`projektBearbeiten(cardId)`)?
7. Wie erzeugt man „Technologie:“ fett gefolgt von einem `span`?

<details><summary>Erwartete Antworten</summary>

1. `div.card` enthält optional `card-header`, einen `card-body` mit Inhalten (`card-title`, `card-text`) und optional `card-footer`.
2. Die Cards stehen im Grid: Ab `md` belegt jede 6 von 12 Spalten, also zwei nebeneinander, darunter eine pro Zeile.
3. `el.className = "card"` (oder `classList.add`), `el.id = "…"`.
4. Eigene Attribute zum Speichern von Daten im HTML. `el.dataset.jahr = 2026` setzt `data-jahr="2026"`.
5. Damit man eine bestimmte Card und ihre Felder später (Modal in Übung 7.3) gezielt wiederfindet.
6. Mit einer anonymen Funktion: `button.addEventListener("click", () => projektBearbeiten(cardId));`
7. `strong` mit `textContent = "Technologie: "` und `span` mit dem Wert erzeugen, beide an das `p` anhängen.
</details>

### Tabs

1. Wie sind Bootstrap-Tabs aufgebaut?
2. Wie wird ein Tab-Link mit seinem Inhaltsbereich verknüpft?
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

## 7.2 Formulare (`02_formulare_aufgabe`)

1. Welche Bootstrap-Klassen gibt es für Formularelemente?
2. Warum werden Radiobuttons und Checkboxen anders gestaltet als Textfelder?
3. Was bewirkt `form-check-inline`?
4. Wie funktionieren `is-valid`, `is-invalid` und `invalid-feedback` zusammen?
5. Warum muss `invalid-feedback` direkt nach dem Eingabefeld stehen? Warum braucht die Rückmeldung zusätzlich `d-block`?
6. Wann tritt das Event `blur` auf? Wie registriert man einen Listener dafür?
7. Was macht `trim()`? Warum prüft man `wert.trim().length`?
8. Warum ersetzt die clientseitige Prüfung nicht die serverseitige aus Übung 6.2?

<details><summary>Erwartete Antworten</summary>

1. `form-control` für input/textarea, `form-select` für select, `form-check` als Hülle für Checkbox/Radio mit `form-check-input` und `form-check-label`.
2. Sie haben ihr Label daneben statt darüber und eine andere Form.
3. Mehrere Optionen stehen nebeneinander statt untereinander.
4. `is-valid`/`is-invalid` am Feld färben es grün/rot. Ein `invalid-feedback`-Element wird nur sichtbar, wenn das vorhergehende Geschwisterelement `is-invalid` hat.
5. Bootstrap blendet das Feedback per CSS-Geschwisterselektor (`.is-invalid ~ .invalid-feedback`) ein. Bei den Radiobuttons ist es kein Geschwister der inputs, deshalb blendet man es mit `d-block` (display: block) selbst ein.
6. Wenn ein Element den Fokus verliert. `feld.addEventListener("blur", function () { … })`.
7. Entfernt Leerzeichen am Anfang und Ende, sodass „ “ nicht als gültige Eingabe zählt.
8. JavaScript kann deaktiviert oder umgangen werden. Die Prüfung im Browser dient der Benutzerfreundlichkeit, die im Server der Sicherheit.
</details>

## 7.3 Modal (`03_modal_aufgabe`)

1. Was ist ein Modal-Dialog? Wann setzt man ihn ein?
2. Wie ist ein Bootstrap-Modal aufgebaut?
3. Was bewirkt `data-bs-dismiss="modal"`?
4. Wie öffnet und schließt man ein Modal per JavaScript?
5. Warum muss man sich die `cardId` zwischen `projektBearbeiten()` und `speichern()` merken? Wo speichert man sie?
6. Wie liest man einen Wert aus einem `span` und wie schreibt man ihn in ein Eingabefeld (und umgekehrt)?
7. Warum muss `dataset.jahr` der Card nach dem Speichern aktualisiert werden?
8. Werden die Änderungen dauerhaft gespeichert? Was passiert beim Neuladen der Seite?

<details><summary>Erwartete Antworten</summary>

1. Ein Dialog über der Seite, der die Interaktion mit dem Rest blockiert, bis er geschlossen wird, z.B. zum Bearbeiten oder Bestätigen.
2. Wie in der Frage angegeben. `modal-header` enthält Titel und Schließen-Button, `modal-body` den Inhalt, `modal-footer` die Aktions-Buttons.
3. Bootstrap schließt das Modal beim Klick automatisch, ohne eigenen Code.
4. `const m = bootstrap.Modal.getOrCreateInstance(document.getElementById("bearbeitenModal")); m.show(); m.hide();`
5. `speichern()` muss wissen, welche Card bearbeitet wird. Man speichert sie in einer Variablen außerhalb der Funktionen.
6. Lesen: `span.textContent`, schreiben ins Feld: `input.value = …`; zurück umgekehrt.
7. Der Hervorheben-Button sucht Cards über `[data-jahr="2026"]`. Ohne Aktualisierung passt das Attribut nicht mehr zum angezeigten Jahr.
8. Nein, die Änderungen stehen nur im DOM. Nach dem Neuladen sind sie weg (in Kapitel 9 speichert man sie über die REST-API).
</details>

---

# Kapitel 8 – AJAX

## 8.1 XHR-Grundlagen (`01_xhr_grundlagen_aufgabe`)

1. Was ist AJAX? Was ist der Unterschied zu einem normalen Seitenaufruf?
2. Was bedeutet „asynchron“?
3. Welche Schritte braucht eine XHR-Anfrage?
4. Was bedeuten `readyState == 4` und `status == 200`?
5. Wo steht die Antwort des Servers?
6. Wie liest `hinweis.php` den Parameter `praefix`? Warum müsste man ihn eigentlich mit `encodeURIComponent()` kodieren?
7. Was liefert `strpos()`, und warum muss man mit `=== 0` statt `== 0` bzw. `!strpos()` vergleichen?
8. Wie baut man aus einem Array eine kommagetrennte Liste?
9. Warum muss man die Übung über einen Webserver (Docker) statt per `file://` öffnen?

<details><summary>Erwartete Antworten</summary>

1. Asynchronous JavaScript and XML: JavaScript lädt Daten im Hintergrund nach und aktualisiert nur einen Teil der Seite, ohne sie neu zu laden.
2. Die Anfrage läuft im Hintergrund, der Code und die Seite laufen weiter. Die Antwort wird später in einer Callback-Funktion verarbeitet.
3. Objekt erzeugen, Handler registrieren, Anfrage mit Methode und URL öffnen, absenden.
4. `4` = Anfrage abgeschlossen (DONE), `200` = HTTP OK.
5. In `xhr.responseText` (als String).
6. Über `$_GET['praefix']`. Sonderzeichen wie `&`, `#`, Leerzeichen würden sonst die URL verfälschen.
7. Die Position des Treffers oder `false`. Ein Treffer an Position 0 ergibt mit `==` ebenfalls „falsch“, deshalb strikt `=== 0` vergleichen.
8. `implode(",", $treffer)`.
9. PHP muss von einem Server ausgeführt werden, und XHR ist auf `file://` nicht erlaubt.
</details>

## 8.2 Promises (`02_promises_aufgabe.html`)

1. Was ist ein Promise? Welche Zustände kann es haben?
2. Was bewirken `resolve` und `reject` in `erzeugeZahlenPromise()`?
3. Was machen `.then()` und `.catch()`? Was bekommt die Funktion in `.then()` übergeben?
4. Warum erscheinen die Zahlen nicht in der Reihenfolge, in der die Promises erzeugt wurden?
5. Was ist der Unterschied zwischen `console.log()` und `console.error()`?
6. Wie prüft man, ob eine Zahl gerade ist?

<details><summary>Erwartete Antworten</summary>

1. Ein Objekt, das das Ergebnis einer asynchronen Operation darstellt. Zustände: pending, fulfilled, rejected.
2. `resolve(wert)` erfüllt das Promise mit einem Wert, `reject(fehler)` weist es ab.
3. `.then(fn)` wird bei Erfolg mit dem Ergebniswert aufgerufen, `.catch(fn)` bei Fehler mit dem Fehler.
4. Jedes Promise wird nach einer zufälligen Verzögerung erfüllt. Die Reihenfolge der Ergebnisse hängt von der Verzögerung ab, nicht von der Erzeugung.
5. `error` wird als Fehler (rot) markiert und kann in der Konsole gefiltert werden.
6. `zahl % 2 === 0`.
</details>

## 8.3 Fetch mit GET (`03_fetch_get_aufgabe`)

1. Was liefert `fetch()` zurück?
2. Was bedeutet `response.ok`? Warum löst ein HTTP-Fehler wie 404 nicht automatisch `.catch()` aus?
3. Warum liefert `response.text()` wieder ein Promise? Wie verkettet man die `.then()`-Aufrufe?
4. Was passiert mit einem `throw` innerhalb eines `.then()`?
5. Welche Fehler landen im `.catch()`?
6. Welche Vorteile hat `fetch()` gegenüber `XMLHttpRequest`?

<details><summary>Erwartete Antworten</summary>

1. Ein Promise, das mit einem `Response`-Objekt erfüllt wird.
2. `true` bei Statuscodes 200–299. `fetch` weist nur bei Netzwerkfehlern ab, eine Fehlerantwort des Servers ist trotzdem eine Antwort.
3. Der Body wird als Stream gelesen und kann noch unterwegs sein. Wird in einem `.then()` ein Promise zurückgegeben, wartet das nächste `.then()` auf dessen Ergebnis.
4. Das nachfolgende Promise wird abgewiesen, die nächsten `.then()` werden übersprungen, `.catch()` wird ausgeführt.
5. Netzwerkfehler, selbst geworfene Fehler (z.B. bei `!response.ok`) und Fehler in den `.then()`-Funktionen.
6. Promise-basiert, kürzer, lesbarer, keine readyState-Abfrage.
</details>

## 8.4 Fetch mit POST und async/await (`04_fetch_post_async_await_aufgabe`)

1. Was bewirken `async` und `await`? Was gibt eine `async`-Funktion immer zurück?
2. Wo darf `await` stehen?
3. Wie gibt man bei `fetch()` Methode, Header und Body an?
4. Warum setzt man den Header `Content-Type: application/json`?
5. Warum wird der Body mit `JSON.stringify()` erzeugt?
6. Wie fängt man mit `async`/`await` Fehler ab?
7. Warum kann PHP den JSON-Body nicht über `$_POST` lesen? Wie liest man ihn stattdessen?
8. Was bewirkt das zweite Argument `true` bei `json_decode()`?
9. Wie setzt man in PHP einen Response-Header, und was macht `json_encode()`?

<details><summary>Erwartete Antworten</summary>

1. `async` kennzeichnet eine asynchrone Funktion (sie gibt immer ein Promise zurück), `await` wartet auf ein Promise und liefert dessen Wert.
2. In `async`-Funktionen (und auf oberster Ebene in Modulen).
3. `fetch(url, { method: "POST", headers: { "Content-Type": "application/json" }, body: … })`
4. Damit der Server weiß, dass der Body JSON enthält.
5. Der Body muss ein String (bzw. Blob/FormData) sein, kein Objekt.
6. Mit `try { … } catch (e) { … }`.
7. `$_POST` wird nur bei Formular-Kodierung (`application/x-www-form-urlencoded`, `multipart/form-data`) befüllt. Den rohen Body liest man mit `file_get_contents("php://input")`.
8. Ein assoziatives Array statt eines Objekts.
9. `header("Content-Type: application/json");` (vor jeder Ausgabe). `json_encode()` wandelt ein PHP-Array in einen JSON-String um.
</details>

## 8.5 Gästebuch mit AJAX (`05_ajax_gaestebuch_aufgabe`)

1. Was ändert sich für Nutzer/-innen gegenüber dem Gästebuch aus Übung 6.4?
2. Warum gibt es eine eigene Datei `api.php` neben dem Controller? Welche Teile des MVC-Gästebuchs werden wiederverwendet?
3. Wie unterscheidet `api.php` zwischen „Liste laden“ und „Eintrag speichern“?
4. Wann wird `onLoad()` aufgerufen?
5. Wie sieht die JSON-Antwort des Servers aus, und wie greift man in JavaScript auf `entries` zu?
6. Warum bleiben die Einträge auch mit AJAX erhalten? Schickt `fetch()` das Session-Cookie mit?
7. Warum schützt `htmlspecialchars()` im Model weiterhin vor XSS, obwohl die Einträge jetzt per JavaScript eingefügt werden? Worauf muss `fillList()` achten?

<details><summary>Erwartete Antworten</summary>

1. Das Absenden und Laden der Einträge geschieht ohne Neuladen der Seite.
2. `api.php` liefert JSON statt HTML. Das Model `Gaestebuch` (Session-Speicherung) wird wiederverwendet.
3. Über das Feld `action` im JSON-Body (`"list"` bzw. `"save"`).
4. Beim Laden der Seite, um die vorhandenen Einträge anzuzeigen.
5. `{"entries": ["…", "…"]}`; `antwort.entries` ist ein Array.
6. Die Session liegt auf dem Server. `fetch` sendet Cookies bei Anfragen an denselben Origin standardmäßig mit.
7. Die Einträge werden im Model schon maskiert gespeichert. Die vorgegebene `createListElement()` fügt sie aber mit `textContent` ein, das ist bereits sicher. Dadurch wird doppelt maskiert: Eine Eingabe wie `<b>` erscheint als `&lt;b&gt;`. Guter Diskussionspunkt: Maskiert wird dort, wo ausgegeben wird (PHP-View mit `htmlspecialchars`, JS mit `textContent`), nicht schon beim Speichern.
</details>

---

# Kapitel 9 – REST

## 9.1 REST-Design (`01_rest_design_aufgabe`)

1. Was ist REST? Was ist eine Ressource?
2. Welche HTTP-Methoden gibt es und welcher CRUD-Operation entsprechen sie?
3. Warum steht die Aktion in der Methode und nicht in der URL (`/projekt/5` statt `/loescheProjekt?id=5`)?
4. Warum lautet die Liste `/projekte`, das einzelne Projekt aber `/projekt/{id}`?
5. Was bedeuten „sicher“ und „idempotent“? Welche Methoden sind es?
6. Wie funktioniert der reguläre Ausdruck, der aus `{id}` ein `[0-9]+` macht? Warum braucht man `^` und `$`?
7. Wie liefert `preg_match()` das Ergebnis?

<details><summary>Erwartete Antworten</summary>

1. Representational State Transfer: ein Architekturstil, bei dem Ressourcen über URLs angesprochen und mit den HTTP-Methoden bearbeitet werden. Eine Ressource ist ein adressierbares Objekt (hier: Projekt).
2. GET = Read, POST = Create, PUT = Update (ersetzen), PATCH = teilweise Update, DELETE = Delete.
3. Die URL bezeichnet die Ressource, die Methode bestimmt die Operation. So bleibt die API einheitlich.
4. Dies ist die Konvention dieses Kurses (Sammlung im Plural, einzelne Ressource mit ID). Viele APIs verwenden auch `/projekte/{id}`.
5. Sicher: Die Methode ändert nichts (GET). Idempotent: Mehrfaches Ausführen hat dieselbe Wirkung wie einmaliges (GET, PUT, DELETE, nicht POST).
6. `[0-9]+` = eine oder mehrere Ziffern. `^`/`$` erzwingen, dass der ganze Pfad passt und nicht nur ein Teil.
7. `1` bei Treffer, `0` ohne Treffer, `false` bei Fehler.
</details>

## 9.2 REST-Schnittstelle (`02_rest_api_aufgabe`)

### Lesende Operationen (GET)

1. Wie gelangen alle Anfragen unter `api/` zu `service.php`?
2. Wie ermittelt `service.php` Methode und Pfad?
3. Wie setzt man den HTTP-Statuscode in PHP?
4. Was bedeuten die Statuscodes 200, 201, 204, 400, 404 und 500?
5. Warum antwortet man bei einer unbekannten ID mit 404 und nicht mit 200 und leerem Body?
6. Wie sucht man in `$_SESSION['projekte']` nach dem Projekt mit passender ID? Warum muss man beim Vergleich auf den Typ achten?
7. Wie benutzt man die Datei `tests.http` zum Testen?

<details><summary>Erwartete Antworten</summary>

1. Die `nginx.conf` leitet alle Anfragen unter `api/` an `service.php` weiter und übergibt den ursprünglichen Pfad als Parameter `_url`.
2. Die Methode steht in `$_SERVER['REQUEST_METHOD']`, der Pfad in `$_REQUEST['_url']`.
3. `http_response_code(404);`
4. 200 OK, 201 Created, 204 No Content, 400 Bad Request, 404 Not Found, 500 Internal Server Error.
5. Der Client soll am Status erkennen, dass die Ressource nicht existiert, ohne den Body auszuwerten.
6. Mit `foreach` und Vergleich der `id`. Die ID aus der URL ist ein String, daher mit `(int)` umwandeln oder bewusst `==` verwenden.
7. Mit einer Erweiterung wie REST Client (VS Code) die Anfragen per Klick senden und die Antwort mit Status und Body ansehen (Alternativen: curl, Postman).
</details>

### Schreibende Operationen (POST, PUT, DELETE)

1. Wie liest man den JSON-Body einer POST- oder PUT-Anfrage in PHP?
2. Wie vergibt man eine neue fortlaufende ID? Warum ist `count($projekte) + 1` problematisch, wenn schon Projekte gelöscht wurden?
3. Warum antwortet POST mit dem neu angelegten Projekt? Welcher Statuscode wäre eigentlich passender?
4. Wie ändert man ein Element in einem Array innerhalb einer `foreach`-Schleife?
5. Wie entfernt man ein Element aus einem Array? Was passiert dabei mit den Indizes?
6. Warum werden die Projekte in `$_SESSION` gespeichert? Welche Nachteile hat das?
7. Was ist CORS, und wozu dient die OPTIONS-Anfrage?

<details><summary>Erwartete Antworten</summary>

1. `json_decode(file_get_contents('php://input'), true)`.
2. Höchste vorhandene ID + 1 (z.B. `max(array_column($projekte, 'id')) + 1`). Mit `count + 1` kann eine ID doppelt vergeben werden, wenn schon gelöscht wurde.
3. Der Client erfährt so die vom Server vergebene ID. Nach REST wäre 201 Created passender, die Übung verlangt 200.
4. `foreach ($arr as &$p)` oder `foreach ($arr as $i => $p) { $arr[$i][…] = …; }`. Ohne `&` ändert man nur eine Kopie.
5. `array_splice($arr, $i, 1)` entfernt und nummeriert neu. `unset` hinterlässt eine Lücke im Index, die `json_encode` in ein Objekt statt eines Arrays verwandelt.
6. Es geht ohne Datenbank. Daten gelten nur pro Browser/Client und gehen mit der Session verloren.
7. Cross-Origin Resource Sharing: Der Server erlaubt per Header Anfragen von fremden Origins. Bei „nicht einfachen“ Anfragen (PUT, DELETE, JSON-Body) fragt der Browser vorher per OPTIONS an, ob die Anfrage erlaubt ist.
</details>

## 9.3 REST-Client (`03_rest_client_aufgabe`)

1. Welche Anfrage (Methode + URL) gehört zu Laden, Anlegen, Ändern und Löschen eines Projekts?
2. Wie sendet man mit `fetch()` eine PUT- bzw. DELETE-Anfrage?
3. Woran erkennt `speichern()`, ob ein neues Projekt angelegt oder ein bestehendes geändert werden soll?
4. Warum lädt man nach jeder Änderung die Liste mit `ladeProjekte()` neu, statt die Karte direkt zu ändern? Welche Nachteile hat das?
5. Wozu dient `projekteCache`?
6. Wie leert man einen Container vor dem Neuaufbau?
7. Warum muss man `ladeProjekte()` nach `await fetch(...)` aufrufen und nicht direkt danach ohne `await`?
8. Was ändert sich gegenüber der Modal-Lösung aus Übung 7.3 für die Dauerhaftigkeit der Daten?

<details><summary>Erwartete Antworten</summary>

1. GET `api/projekte`, POST `api/projekt`, PUT `api/projekt/{id}`, DELETE `api/projekt/{id}`.
2. `fetch(url, { method: "PUT", headers: { "Content-Type": "application/json" }, body: JSON.stringify(daten) })` bzw. `fetch(url, { method: "DELETE" })`.
3. `aktuelleProjektId` ist `null` → POST (neu), sonst PUT (ändern).
4. Die Anzeige entspricht garantiert dem Stand des Servers (z.B. neue ID). Nachteil: eine zusätzliche Anfrage pro Änderung.
5. Die zuletzt geladenen Projektdaten, damit `projektBearbeiten()` das Modal ohne erneute Anfrage füllen kann.
6. `container.innerHTML = "";` oder `container.replaceChildren();`
7. Sonst wird die Liste evtl. geladen, bevor der Server die Änderung verarbeitet hat, und die alte Liste wird angezeigt.
8. Die Änderungen liegen jetzt auf dem Server (in der Session) und bleiben beim Neuladen der Seite erhalten.
</details>
