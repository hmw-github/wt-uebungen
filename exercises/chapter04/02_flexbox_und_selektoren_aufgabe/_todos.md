# TODOs – 02_flexbox_und_selektoren_aufgabe

**Aufgabenstellung:**
    Bringen Sie Header und Footer per Flexbox in Form und verfeinern Sie die
    Website mit Pseudoklassen, Attributselektoren und einem Pseudoelement.
    Die Gruppierung folgt der Folienreihenfolge (4.4–4.5).

## css/style.css

*Display und Flexbox (4.4)*

1. TODO 1: "header": display: flex, align-items: center sowie justify-content: space-between, damit Logo und Navigation nebeneinander liegen und maximal auseinanderrutschen.
2. TODO 2: "#hauptnav": display: flex sowie align-items: center, damit die Navigationslinks in einer Reihe liegen.
3. TODO 3: "footer p": display: flex, justify-content: center sowie gap: 15px, damit die Footer-Links mittig nebeneinander mit gleichmäßigem Abstand angezeigt werden.

*Fortgeschrittene Selektoren (4.5)*

4. TODO 4: Pseudoklasse ":hover" auf "#hauptnav a" UND ".btn" (kombiniert als Selektorliste): opacity: 0.85, damit sich beim Überfahren mit der Maus eine leichte Reaktion zeigt.
5. TODO 5: Pseudoklasse "table tbody tr:nth-child(even)": background-color "#edf2f4", damit die Projekttabelle abwechselnd eingefärbte Zeilen bekommt (Zebra-Streifen).
6. TODO 6: Attributselektor, der ALLE folgenden Formularfelder gruppiert anspricht: input[type="text"], input[type="email"], textarea und select. Setzen Sie border: 1px solid "#8d99ae", padding: 6px sowie border-radius: 4px.
7. TODO 7: Attributselektor kombiniert mit Pseudoelement: "a[target="_blank"]::after" mit content: " ...", das nach jedem Link, der in einem neuen Tab öffnet, ein kleines Pfeil-Symbol anzeigt (z.B. content: " \2197").
8. TODO 8: Typselektor "thead": Hintergrundfarbe "#2b2d42" und Textfarbe "#ffffff", damit sich der Tabellenkopf farblich vom restlichen Tabelleninhalt abhebt.
9. TODO 9: Pseudoklasse "table tbody tr:hover": background-color "#d8dee6", damit sich beim Überfahren einer Tabellenzeile mit der Maus eine leichte Hervorhebung zeigt.

- (kein TODO-Marker) Neu vorgegeben ist die Regel `table { border-collapse: collapse; width: 100%; }`, damit die Tabellenrahmen zu einfachen Linien zusammenfallen und die Tabelle die volle Breite nutzt.

## Übrige Dateien

index.html, kontakt.html, projekte.html, ueber-mich.html, rechtliches/impressum.html, css/druck.css und js/main.js enthalten keine TODOs und sind bis auf die Titelzeile im Kopfkommentar identisch mit der Lösung von Übung 1 (01_css_grundlagen_aufgabe). Mit `prepare.sh` bzw. `prepare.cmd` können Sie Ihre eigene Lösung aus Übung 1 übernehmen.
