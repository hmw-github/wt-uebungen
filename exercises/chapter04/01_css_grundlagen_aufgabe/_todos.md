# TODOs – 01_css_grundlagen_aufgabe

**Aufgabenstellung:**
    Gestalten Sie Ihre Portfolio-Website mit CSS: Binden Sie ein gemeinsames
    Stylesheet und ein Druck-Stylesheet ein, vergeben Sie über Selektoren
    Farben und Schriftart, wenden Sie das Boxmodell an und verfeinern Sie
    die Typografie. Die TODO-Nummern zählen pro Datei; die Gruppierung in
    `css/style.css` folgt der Folienreihenfolge (4.2–4.4), sodass die Übung
    in Etappen bearbeitet werden kann.

## Alle html-Dateien

1. (nur bei Wiederverwendung der eigenen Dateien nötig) Fügen Sie ein main-Tag zwischen `<header>` und `<footer>` ein und verschieben Sie die bestehenden Inhalte unter `<main>`.

## index.html, kontakt.html, projekte.html, ueber-mich.html

*Einbinden von CSS (4.2)*

1. TODO 1: Binden Sie das externe Stylesheet "css/style.css" per link-Tag ein.
2. TODO 2: Binden Sie zusätzlich das Druck-Stylesheet "css/druck.css" per link-Tag ein, das NUR beim Drucken angewendet wird (media="print").

## rechtliches/impressum.html

*Einbinden von CSS (4.2)*

1. TODO 1: Binden Sie das externe Stylesheet "../css/style.css" per link-Tag ein.
2. TODO 2: Binden Sie zusätzlich das Druck-Stylesheet "../css/druck.css" per link-Tag ein, das NUR beim Drucken angewendet wird (media="print").

## css/druck.css

*Einbinden von CSS (4.2)*

1. TODO 1: Blenden Sie die Elemente header, footer sowie Elemente mit der Klasse "btn" beim Druck aus (display: none).

## css/style.css

*Reset (4.2)*

1. TODO 1: Setzen Sie für ALLE Elemente (Selektor *) box-sizing auf border-box, damit Padding und Border später nicht zur angegebenen Breite/Höhe hinzugerechnet werden.
2. TODO 2: Setzen Sie für body margin auf 0.

Prüfen Sie anschließend, ob `<main>` als zentrierter Block dargestellt wird.

*Grundlagen CSS-Selektoren (4.3)*

3. TODO 3: Typselektor "body" (Regel aus TODO 2 ergänzen): Schriftart "Arial, sans-serif" und Textfarbe "#2b2d42".
4. TODO 4: Typselektor "a" (alle Links): Textfarbe "#2b2d42" und text-decoration auf "none" (keine Unterstreichung).
5. TODO 5: Typselektor "header": Hintergrundfarbe "#2b2d42", Textfarbe "#ffffff" sowie etwas Innenabstand (padding: 10px 20px).
6. TODO 6: Klassenselektor ".btn" (für den Button "Projekte ansehen" und den Absenden-Button): Hintergrundfarbe "#ef233c", Textfarbe "#ffffff", kein Rahmen (border: none) sowie Innenabstand (padding: 8px 16px).
7. TODO 7: ID-Selektor kombiniert mit Typselektor "#hauptnav a" (die Links INNERHALB der Hauptnavigation): Textfarbe "#ffffff" sowie ein wenig Abstand nach rechts (margin-right: 15px).

*Boxmodell (4.4)*

8. TODO 8: "#hauptnav a" (Regel aus TODO 7 ergänzen): display auf "inline-block" setzen, damit padding wirkt, sowie padding: 8px 12px und border-radius: 4px.
9. TODO 9: ".btn" (Regel aus TODO 6 ergänzen): display: inline-block, border-radius: 4px und margin-top: 10px.
10. TODO 10: "table td, table th": padding: 8px sowie border: 1px solid "#8d99ae".
11. TODO 11: "footer": padding: 20px, margin-top: 40px sowie border-top: 1px solid "#8d99ae".

*Text und Schrift (4.4)*

12. TODO 12: "h1, h2": font-family auf "Georgia, serif" setzen (abweichend vom Fließtext), damit sich Überschriften optisch abheben.
13. TODO 13: "h1": font-size: 2.5em sowie letter-spacing: 1px.
14. TODO 14: "p": line-height: 1.6, damit Absätze besser lesbar sind.
15. TODO 15: "table caption": font-style: italic sowie margin-bottom: 10px.

## js/main.js

Keine TODOs. Die Datei enthält bereits die fertige Steuerung des Burger-Menüs (Klick-Handler, der `#hauptnav` per Klasse ein-/ausblendet); ein sinnvoller Vergleich mit dem Vorkapitel ist nicht möglich, da `exercises/chapter03/02_kontaktformular_aufgabe` keine JS-Datei enthält.
