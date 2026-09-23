## 3.1 Grundgerüst (`01_grundgeruest_aufgabe`)

1. Wozu dient die Zeile `<!DOCTYPE html>` und was passiert, wenn sie fehlt?
2. Welche Aufgaben haben `<head>` und `<body>`? Welche der TODOs gehören in welchen Bereich?
3. Wo wird der Inhalt von `<title>` angezeigt und warum sollte jede Seite einen eigenen Titel haben?
4. Was bewirkt `<meta charset="UTF-8">`? Was sieht man ohne die Angabe z.B. bei „Über mich“?
5. Was bewirkt `<meta name="viewport" content="width=device-width, initial-scale=1.0">` auf einem Smartphone?
6. Was ist der Unterschied zwischen `<h1>` und `<p>`? Warum sollte es pro Seite nur eine `<h1>` geben?
7. Wie sieht ein HTML-Kommentar aus? Ist er für Besucher/-innen der Seite sichtbar?

<details><summary>Erwartete Antworten</summary>

1. Sie sagt dem Browser, dass es sich um ein HTML5-Dokument handelt. Ohne sie schaltet der Browser in den „Quirks Mode“ und stellt manche Dinge anders (veraltet) dar.
2. `<head>` enthält Metadaten (title, meta, später link/script), `<body>` den sichtbaren Inhalt. TODO 1 steht vor `<html>`, TODO 2–4 im head, TODO 5–7 im body.
3. Im Browser-Tab, in Lesezeichen und in Suchergebnissen. Eigene Titel machen Seiten unterscheidbar (Nutzer, Suchmaschinen, Barrierefreiheit).
4. Er legt die Zeichenkodierung fest. Ohne ihn können Umlaute falsch angezeigt werden (z.B. „Ãœber mich“).
5. Die Seite wird in Gerätebreite und ohne Zoom dargestellt. Ohne das Tag simuliert der Browser einen ca. 980 px breiten Desktop und verkleinert die Seite.
6. `<h1>` ist die Hauptüberschrift (Semantik, Gliederung), `<p>` ein Absatz. Eine `<h1>` pro Seite hält die Gliederung für Screenreader und Suchmaschinen eindeutig.
7. `<!-- Kommentar -->`. Er wird nicht dargestellt, ist aber im Quelltext für alle sichtbar.
</details>
