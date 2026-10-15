# TODOs – 03_responsive_design_aufgabe

**Aufgabenstellung:**
    Machen Sie die Website mit einem Media Query für Smartphones nutzbar
    (Responsive Web Design, 4.6).

## css/style.css

Innerhalb des am Ende der Datei bereits vorhandenen `@media (max-width: 600px)`-Blocks:

1. TODO 1: "#hauptnav": float auf "none" setzen. Damit wird der Float aus Übung 2 aufgehoben und es gilt wieder der normale Dokumentfluss: Das Block-Element `<nav>` beginnt eine neue Zeile, Logo und Navigation stehen auf schmalen Bildschirmen UNTEREINANDER statt nebeneinander.
2. TODO 2: "#hauptnav a": display auf "block" setzen (statt "inline-block"), damit jeder Navigationslink eine eigene Zeile einnimmt und die Links untereinander stehen.
3. TODO 3: "#hauptnav a": außerdem margin-right auf 0 und stattdessen margin-bottom: 8px, damit der Abstand auch im gestapelten Zustand stimmt.
4. TODO 4: "input[type="text"], input[type="email"], textarea, select": width: 100%, damit Formularfelder die volle Breite ausnutzen.

- (kein TODO-Marker) Bereits vorgegeben sind `position: relative` für `header` sowie im Media Query die Regeln für das Burger-Menü (`#hauptnav` ausgeblendet, `#hauptnav.offen` mit `display: block`, `.burger-button` mit `display: block` und `position: absolute` oben rechts im Header), die mit `js/main.js` zusammenarbeiten. Die drei Striche des Burger-Buttons sind Block-Elemente, die über `.burger-button span + span { margin-top: 5px; }` Abstand zueinander erhalten.

## Übrige Dateien

index.html, kontakt.html, projekte.html, ueber-mich.html, rechtliches/impressum.html, css/druck.css und js/main.js enthalten keine TODOs und sind bis auf die Titelzeile im Kopfkommentar identisch mit der Lösung von Übung 2 (02_layout_und_selektoren_aufgabe).
