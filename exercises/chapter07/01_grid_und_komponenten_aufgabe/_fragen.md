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
