# TODOs – 03_responsive_design_aufgabe

**Aufgabenstellung:**
    Machen Sie die Website mit einem Media Query für Smartphones nutzbar
    (Responsive Web Design, 4.6).

## css/style.css

Innerhalb des am Ende der Datei bereits vorhandenen `@media (max-width: 600px)`-Blocks:

1. TODO 1: "header": flex-direction auf "column" und align-items auf "flex-start" setzen, damit Logo und Navigation auf schmalen Bildschirmen UNTEREINANDER statt nebeneinander stehen.
2. TODO 2: "#hauptnav": ebenfalls flex-direction: column und align-items: flex-start, damit die Navigationslinks untereinander stehen.
3. TODO 3: "#hauptnav a": margin-right auf 0 und stattdessen margin-bottom: 8px, damit der Abstand auch im gestapelten Zustand stimmt.
4. TODO 4: "input[type="text"], input[type="email"], textarea, select": width: 100%, damit Formularfelder die volle Breite ausnutzen.

- (kein TODO-Marker) Bereits vorgegeben sind `position: relative` für `header` sowie im Media Query die Regeln für das Burger-Menü (`#hauptnav` ausgeblendet, `#hauptnav.offen`, `.burger-button`), die mit `js/main.js` zusammenarbeiten.

## Übrige Dateien

index.html, kontakt.html, projekte.html, ueber-mich.html, rechtliches/impressum.html, css/druck.css und js/main.js enthalten keine TODOs und sind bis auf die Titelzeile im Kopfkommentar identisch mit der Lösung von Übung 2 (02_flexbox_und_selektoren_aufgabe). Mit `prepare.sh` bzw. `prepare.cmd` können Sie Ihre eigene Lösung aus Übung 2 übernehmen.
