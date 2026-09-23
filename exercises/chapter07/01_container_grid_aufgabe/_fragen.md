## 7.1 Container und Grid (`01_container_grid_aufgabe`)

1. Was ist Bootstrap und wie wird es hier eingebunden (CDN)? Wozu dient das JS-Bundle?
2. Was ist der Unterschied zwischen `container` und `container-fluid`?
3. Wie ist das Grid aufgebaut (`container` → `row` → `col`)? Warum 12 Spalten?
4. Was bedeutet `col-sm-4`? Was passiert unterhalb des Breakpoints `sm`?
5. Welche Breakpoints gibt es (`sm`, `md`, `lg`, `xl`, `xxl`)?
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
