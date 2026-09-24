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
7. Welche Elemente sind „leere Elemente“ ohne End-Tag wie z.B. `<link ...>`?

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

1. Aus welchen Elementen besteht eine Tabelle (`table`, `tr`, `th`, `td`)?
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
