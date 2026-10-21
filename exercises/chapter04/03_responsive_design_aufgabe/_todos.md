# TODOs – 03_responsive_design_aufgabe

**Aufgabenstellung:**
    Machen Sie die Website mit einem Media Query für Smartphones nutzbar
    (Responsive Web Design, 4.6).

## css/style.css

Innerhalb des am Ende der Datei bereits vorhandenen `@media (max-width: 600px)`-Blocks:

1. TODO 1: Auf schmalen Bildschirmen steht die Navigation nicht mehr rechts neben dem Logo, sondern darunter in einer eigenen Zeile.
2. TODO 2: Jeder Navigationslink nimmt auf schmalen Bildschirmen eine eigene Zeile ein, die Links stehen also untereinander. Padding und abgerundete Ecken der Links bleiben erhalten.
3. TODO 3: Die gestapelten Links haben keinen Abstand mehr nach rechts, dafür aber 8px Abstand zum jeweils nächsten Link darunter.
4. TODO 4: Die Text-, E-Mail- und mehrzeiligen Textfelder sowie die Auswahllisten nehmen auf schmalen Bildschirmen die gesamte verfügbare Breite ein.

- (kein TODO-Marker) Bereits vorgegeben sind `position: relative` für `header` sowie im Media Query die Regeln für das Burger-Menü (`#hauptnav` ausgeblendet, `#hauptnav.offen` mit `display: block`, `.burger-button` mit `display: block` und `position: absolute` oben rechts im Header), die mit `js/main.js` zusammenarbeiten. Die drei Striche des Burger-Buttons sind Block-Elemente, die über `.burger-button span + span { margin-top: 5px; }` Abstand zueinander erhalten.

## Übrige Dateien

index.html, kontakt.html, projekte.html, ueber-mich.html, rechtliches/impressum.html, css/druck.css und js/main.js enthalten keine TODOs und sind bis auf die Titelzeile im Kopfkommentar identisch mit der Lösung von Übung 2 (02_layout_und_selektoren_aufgabe).
