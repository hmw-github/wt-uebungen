# TODOs – 02_layout_und_selektoren_aufgabe

**Aufgabenstellung:**
    Bringen Sie Header und Footer mit Float und Textausrichtung in Form und verfeinern Sie die
    Website mit Pseudoklassen, Attributselektoren und einem Pseudoelement.
    Die Gruppierung folgt der Folienreihenfolge (4.4–4.5).

## css/style.css

*Display und Float (4.4)*

1. TODO 1: "#hauptnav": float: right sowie margin-top: 8px, damit die Navigation rechts neben dem Logo liegt und ungefähr auf Höhe der Logomitte steht. Die Links bleiben inline-block und stehen dadurch in einer Reihe.
2. TODO 2: "footer p": text-align: center, damit die Footer-Links mittig angezeigt werden.

*Fortgeschrittene Selektoren (4.5)*

3. TODO 3: Pseudoklasse ":hover" auf "#hauptnav a" UND ".btn" (kombiniert als Selektorliste): opacity: 0.85, damit sich beim Überfahren mit der Maus eine leichte Reaktion zeigt.
4. TODO 4: Pseudoklasse "table tbody tr:nth-child(even)": background-color "#edf2f4", damit die Projekttabelle abwechselnd eingefärbte Zeilen bekommt (Zebra-Streifen).
5. TODO 5: Attributselektor, der ALLE folgenden Formularfelder gruppiert anspricht: input[type="text"], input[type="email"], textarea und select. Setzen Sie border: 1px solid "#8d99ae", padding: 6px sowie border-radius: 4px.
6. TODO 6: Attributselektor kombiniert mit Pseudoelement: "a[target="_blank"]::after" mit content: " ...", das nach jedem Link, der in einem neuen Tab öffnet, ein kleines Pfeil-Symbol anzeigt (z.B. content: " \2197").
7. TODO 7: Typselektor "thead": Hintergrundfarbe "#2b2d42" und Textfarbe "#ffffff", damit sich der Tabellenkopf farblich vom restlichen Tabelleninhalt abhebt.
8. TODO 8: Pseudoklasse "table tbody tr:hover": background-color "#d8dee6", damit sich beim Überfahren einer Tabellenzeile mit der Maus eine leichte Hervorhebung zeigt.

- (kein TODO-Marker) Neu vorgegeben ist die Regel `table { border-collapse: collapse; width: 100%; }`, damit die Tabellenrahmen zu einfachen Linien zusammenfallen und die Tabelle die volle Breite nutzt.

## Übrige Dateien

index.html, kontakt.html, projekte.html, ueber-mich.html, rechtliches/impressum.html, css/druck.css und js/main.js enthalten keine TODOs und sind bis auf die Titelzeile im Kopfkommentar identisch mit der Lösung von Übung 1 (01_css_grundlagen_aufgabe).
