# CSS Cheat-Sheet

Alle CSS-Selektoren, -Eigenschaften und -Techniken, die in den Übungen und
Musterlösungen (Kapitel 4–9) vorkommen – mit Beispielen aus dem
Portfolio-Projekt. **Kap.** = Kapitel der ersten Verwendung.

- [CSS einbinden](#css-einbinden)
- [Regelaufbau, Kaskade & Spezifität](#regelaufbau-kaskade--spezifität)
- [Selektoren](#selektoren)
- [Farben & Einheiten](#farben--einheiten)
- [Boxmodell](#boxmodell)
- [Text & Schrift](#text--schrift)
- [Display, Float & Position](#display-float--position)
- [Flexbox](#flexbox)
- [Tabellen & Formulare](#tabellen--formulare)
- [Responsive Design](#responsive-design)
- [CSS und JavaScript](#css-und-javascript)
- [Bootstrap-Klassen](#bootstrap-klassen)

---

## CSS einbinden

| Weg | Kap. | Beispiel im Projekt | Einsatz |
|---|---|---|---|
| Inline | 3 | `<ul style="list-style-type: circle;">` | Einzelfall, schwer wartbar |
| Intern | 4 | `<style> … </style>` im `<head>` (`demos/demo1.html`) | Demos, einzelne Seite |
| Extern | 4 | `<link rel="stylesheet" href="css/style.css">` | **Standard**: eine Datei für alle Seiten, wird gecacht |

```html
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/druck.css" media="print">
<!-- aus rechtliches/impressum.html: Pfad relativ zur HTML-Datei -->
<link rel="stylesheet" href="../css/style.css">
```

```css
/* druck.css – beim Drucken Kopf, Fuß und Buttons ausblenden */
header,
footer,
.btn {
    display: none;
}
```

- Ab Kap. 7 kommt Bootstrap per CDN **vor** der eigenen `style.css` dazu,
  damit eigene Regeln Bootstrap überschreiben können.
- Seitenspezifische Stylesheets: `index.css`, `projekte.css`,
  `technik-spielwiese.css` (Kap. 7–9).

---

## Regelaufbau, Kaskade & Spezifität

```css
selektor {
    eigenschaft: wert;
}
```

| Begriff | Bedeutung |
|---|---|
| **Kaskade** | Bei gleicher Spezifität gewinnt die *spätere* Regel → Media Queries ans Ende. |
| **Spezifität** | Inline-`style` > ID (`#hauptnav`) > Klasse/Attribut/Pseudoklasse (`.btn`, `[type]`, `:hover`) > Typ (`a`). |
| **Vererbung** | `color`, `font-family`, `line-height` … werden an Kinder vererbt; `padding`, `margin`, `border` nicht. Links haben eine eigene Browser-Farbe und erben `color` daher nicht. |

```css
a           { color: #2b2d42; }   /* Spezifität: 0-0-1 */
#hauptnav a { color: #ffffff; }   /* Spezifität: 1-0-1 → gewinnt */
```

---

## Selektoren

| Selektor | Kap. | Trifft | Beispiel im Projekt |
|---|---|---|---|
| `*` | 4 | Alle Elemente (Universal) | `* { box-sizing: border-box; }` |
| `element` | 4 | Typ-Selektor | `body`, `header`, `footer`, `p` |
| `.klasse` | 4 | Elemente mit `class` | `.btn`, `.github-badge` |
| `#id` | 4 | Element mit `id` (einmal pro Seite) | `#hauptnav` |
| `a, b` | 4 | Selektorliste: beide | `h1, h2`, `table td, table th` |
| `a b` | 4 | Nachfahre: `b` irgendwo in `a` | `#hauptnav a`, `footer p`, `table caption` |
| `a + b` | 4 | Direkter Nachfolger (nächstes Geschwister) | `.burger-button span + span` |
| `a.klasse` | 5 | Element *mit* dieser Klasse (verkettet) | `tr.hervorgehoben`, `#hauptnav.offen`, `.card.hervorgehoben` |
| `[attr="wert"]` | 4 | Attribut-Selektor | `input[type="email"]`, `a[target="_blank"]` |
| `:hover` | 4 | Pseudoklasse: Maus über Element | `#hauptnav a:hover`, `tr:hover` |
| `:nth-child(even)` | 4 | Pseudoklasse: jedes 2. Kind (`odd`, `3n` …) | `table tbody tr:nth-child(even)` |
| `::after` | 4 | Pseudoelement: erzeugt Inhalt hinter dem Element | `a[target="_blank"]::after` |

```css
#hauptnav a:hover,
.btn:hover {
    opacity: 0.85;
}

table tbody tr:nth-child(even) {
    background-color: #edf2f4;
}

/* Pfeil ↗ hinter externen Links */
a[target="_blank"]::after {
    content: " \2197";
}

/* Abstand zwischen den Burger-Strichen (jeder außer dem ersten) */
.burger-button span + span {
    margin-top: 5px;
}
```

- `:` = Pseudo**klasse** (Zustand/Position), `::` = Pseudo**element** (Teil eines Elements).
- Klasse ist mehrfach verwendbar, ID nur einmal pro Seite. Mehrere Klassen: `class="geheim dringend"`.

---

## Farben & Einheiten

| Schreibweise | Kap. | Beispiel |
|---|---|---|
| Hex | 4 | `#2b2d42`, `#ffffff` |
| `rgb()` | 7 | `rgb(244, 241, 241)` |
| Farbname | 3 | `lightblue`, `darkblue`, `orange`, `red` |

**Farbpalette des Projekts**

| Farbe | Verwendung |
|---|---|
| `#2b2d42` | Text, Header, `thead` (dunkelblau) |
| `#ef233c` | `.btn` (rot) |
| `#8d99ae` | Rahmen (grau) |
| `#edf2f4` | gerade Tabellenzeilen |
| `#d8dee6` | Tabellenzeile bei Hover |
| `#ffd60a` | `.hervorgehoben` (gelb) |

| Einheit | Kap. | Bezug | Beispiel |
|---|---|---|---|
| `px` | 4 | absolut | `padding: 8px` |
| `em` | 4 | Schriftgröße des Elternelements | `font-size: 2.5em` |
| `rem` | – | Schriftgröße von `html` | (in Fragen erwähnt) |
| `%` | 4 | Breite des Elternelements | `width: 100%` |
| ohne Einheit | 4 | Faktor der eigenen Schriftgröße | `line-height: 1.6` |

---

## Boxmodell

```
┌──────────── margin ────────────┐
│ ┌────────── border ──────────┐ │
│ │ ┌──────── padding ───────┐ │ │
│ │ │        Inhalt          │ │ │
│ │ └────────────────────────┘ │ │
│ └────────────────────────────┘ │
└────────────────────────────────┘
```

| Eigenschaft | Kap. | Beispiel im Projekt |
|---|---|---|
| `box-sizing` | 4 | `border-box` – padding + border zählen zur Breite |
| `padding` | 4 | `10px 20px` (oben/unten, links/rechts) |
| `margin` | 4 | `0` (body), `5px auto` (zentriert `main`) |
| `margin-top` / `-bottom` / `-left` / `-right` | 4 | `margin-top: 40px` |
| `border` | 4 | `1px solid #8d99ae` (Breite Stil Farbe) |
| `border-top` | 4 | nur oberer Rahmen am Footer |
| `border-radius` | 4 | `4px` – abgerundete Ecken |
| `width` / `height` | 4 | `width: 28px`, `width: 100%` |
| `max-width` | 4 | `main { max-width: 500px; }` |
| `min-height` | 9 | `.projekt-card { min-height: 250px; }` |
| `overflow` | 9 | `hidden` – überstehenden Inhalt abschneiden |

**Kurzschreibweise** (`margin` / `padding`):

| Werte | Bedeutung |
|---|---|
| `10px` | alle vier Seiten |
| `10px 20px` | oben/unten · links/rechts |
| `10px 20px 5px` | oben · links/rechts · unten |
| `10px 20px 5px 0` | oben · rechts · unten · links (im Uhrzeigersinn) |

```css
* {
    box-sizing: border-box;
}

body {
    margin: 0;               /* Browser-Standard von ca. 8px entfernen */
}

main {
    max-width: 500px;
    margin: 5px auto;        /* auto links/rechts = horizontal zentriert */
    padding: 10px;
}
```

---

## Text & Schrift

| Eigenschaft | Kap. | Beispiel im Projekt |
|---|---|---|
| `color` | 4 | `#2b2d42` |
| `font-family` | 4 | `Arial, sans-serif` / `Georgia, serif` (mit Fallback) |
| `font-size` | 4 | `2.5em`, `1.5em` |
| `font-style` | 4 | `italic` (Tabellen-`caption`) |
| `font-weight` | 4 | `bold` (Demo) |
| `line-height` | 4 | `1.6` |
| `letter-spacing` | 4 | `1px` |
| `text-decoration` | 4 | `none` – Unterstreichung bei Links entfernen |
| `text-align` | 4 | `center` – Inline-Inhalt zentrieren |
| `list-style-type` | 3 | `circle` (inline im HTML) |
| `content` | 4 | nur mit `::before` / `::after` |

```css
body {
    font-family: Arial, sans-serif;
    color: #2b2d42;
}

h1,
h2 {
    font-family: Georgia, serif;
}

h1 {
    font-size: 2.5em;
    letter-spacing: 1px;
}

p {
    line-height: 1.6;
}
```

---

## Display, Float & Position

| Wert | Kap. | Verhalten |
|---|---|---|
| `display: block` | 4 | eigene Zeile, volle Breite |
| `display: inline` | – | im Textfluss, vertikales padding verschiebt nichts |
| `display: inline-block` | 4 | im Textfluss, aber mit Box-Eigenschaften (Nav-Links, `.btn`) |
| `display: none` | 4 | unsichtbar, nimmt keinen Platz ein |
| `display: flex` | 5 | Flex-Container (siehe [Flexbox](#flexbox)) |
| `float: right` | 4 | aus dem Fluss nehmen, nach rechts schieben, Inhalt umfließt links |
| `float: none` | 4 | Float aufheben |
| `position: relative` | 4 | Bezugspunkt für absolut positionierte Kinder |
| `position: absolute` | 4 | aus dem Fluss, Platzierung mit `top` / `right` … zum nächsten positionierten Vorfahren |
| `opacity` | 4 | Deckkraft `0`–`1` |
| `cursor: pointer` | 4 | Hand-Cursor |

```css
header {
    position: relative;      /* Bezugspunkt für den Burger-Button */
}

.burger-button {
    position: absolute;
    top: 14px;
    right: 20px;
}

/* Kap. 4.2: Navigation rechts neben dem Logo */
#hauptnav {
    float: right;
    margin-top: 8px;
}
```

---

## Flexbox

Ab Kap. 5 ersetzt Flexbox das Float-Layout in Header, Navigation, Footer und
Burger-Button.

| Eigenschaft | Kap. | Werte im Projekt | Wirkung |
|---|---|---|---|
| `display: flex` | 5 | – | Kinder werden Flex-Items |
| `flex-direction` | 5 | `row` (Standard), `column` | Hauptachse |
| `justify-content` | 5 | `space-between`, `center` | Verteilung auf der Hauptachse |
| `align-items` | 5 | `center`, `flex-start` | Ausrichtung auf der Querachse |
| `gap` | 5 | `15px` | Abstand zwischen den Items |

```css
header {
    display: flex;
    align-items: center;
    justify-content: space-between;   /* Logo links, Navigation rechts */
}

footer p {
    display: flex;
    justify-content: center;
    gap: 15px;
}

/* Drei Striche des Burger-Buttons gleichmäßig verteilen */
.burger-button {
    display: none;
    flex-direction: column;
    justify-content: space-between;
    width: 28px;
    height: 20px;
}
```

---

## Tabellen & Formulare

| Eigenschaft / Selektor | Kap. | Beispiel |
|---|---|---|
| `border-collapse` | 4 | `collapse` – Doppelrahmen zusammenfassen |
| `background-color` | 4 | `thead`, gerade Zeilen, Hover |
| `background` | 4 | `none` – Button-Hintergrund entfernen |
| `input[type="…"]`, `textarea`, `select` | 4 | Formularfelder einheitlich gestalten |

```css
table {
    border-collapse: collapse;
    width: 100%;
}

table td,
table th {
    padding: 8px;
    border: 1px solid #8d99ae;
}

thead {
    background-color: #2b2d42;
    color: #ffffff;
}

table tbody tr:hover {
    background-color: #d8dee6;
}

input[type="text"],
input[type="email"],
textarea,
select {
    border: 1px solid #8d99ae;
    padding: 6px;
    border-radius: 4px;
}
```

---

## Responsive Design

```html
<!-- Voraussetzung im <head>, sonst meldet ein Smartphone ca. 980px Breite -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
```

```css
/* Am Ende des Stylesheets: gilt bei Viewport-Breite ≤ 600px */
@media (max-width: 600px) {
    #hauptnav {
        display: none;            /* Navigation zunächst ausblenden */
        flex-direction: column;
        align-items: flex-start;
    }

    #hauptnav.offen {             /* per JavaScript gesetzte Klasse */
        display: flex;
    }

    .burger-button {
        display: flex;            /* Burger-Button einblenden */
    }

    header {
        flex-direction: column;
        align-items: flex-start;
    }

    input[type="text"],
    input[type="email"],
    textarea,
    select {
        width: 100%;
    }
}
```

| Media Query | Kap. | Einsatz |
|---|---|---|
| `@media (max-width: 600px)` | 4 | Smartphone-Layout der Portfolio-Seite |
| `@media (max-width: 761px)` | 9 | kleinere `.projekt-card` |
| `media="print"` (am `<link>`) | 4 | Druck-Stylesheet |

- Media Query **ans Ende**, sonst überschreiben spätere Regeln gleicher Spezifität sie.
- Testen: Gerätesymbolleiste / responsive Ansicht in den DevTools.

---

## CSS und JavaScript

| Methode | Kap. | Beispiel im Projekt |
|---|---|---|
| `classList.toggle(k)` | 4 | Burger-Menü: `hauptnav.classList.toggle("offen")` |
| `classList.toggle(k, bool)` | 4 | `burgerButton.classList.toggle("offen", istOffen)` |
| `classList.add` / `remove` | 7 | Validierung: `is-valid` / `is-invalid` |
| `className = "…"` | 7 | Karten erzeugen: `div.className = "card"` |

```js
burgerButton.addEventListener("click", () => {
    const istOffen = hauptnav.classList.toggle("offen");
    burgerButton.classList.toggle("offen", istOffen);
});

// Kap. 5: Zeile per Klick hervorheben (CSS: tr.hervorgehoben)
zeile.classList.toggle("hervorgehoben");
```

- Lieber Klassen umschalten als `element.style.…` setzen – das Aussehen bleibt im Stylesheet.

---

## Bootstrap-Klassen

Ab Kap. 7 über CDN eingebunden (`bootstrap@5.3.3`, `bootstrap-icons@1.11.3`).

| Bereich | Klassen im Projekt |
|---|---|
| Grid | `container`, `container-fluid`, `row`, `col-6`, `col-sm-4`, `col-md-6` |
| Abstände | `mt-3`, `mt-4`, `mb-3`, `mb-4`, `mb-5`, `mx-1` (`m`/`p` + `t b s e x y` + `0–5`) |
| Flex & Anzeige | `d-flex`, `d-block`, `justify-content-center`, `align-items-center` |
| Buttons | `btn` + `btn-primary`, `btn-secondary`, `btn-success`, `btn-danger`, `btn-warning`, `btn-outline-secondary`, Größe `btn-sm` / `btn-lg`, `btn-close` |
| Karten | `card`, `card-header`, `card-body`, `card-title`, `card-text`, `card-footer` |
| Tabs | `nav`, `nav-tabs`, `nav-item`, `nav-link`, `active`, `tab-content`, `tab-pane` |
| Formulare | `form-label`, `form-control`, `form-select`, `form-check`, `form-check-input`, `form-check-label`, `form-check-inline` |
| Validierung | `is-valid`, `is-invalid`, `invalid-feedback` |
| Modal | `modal`, `modal-dialog`, `modal-content`, `modal-header`, `modal-title`, `modal-body`, `modal-footer` |
| Icons | `bi bi-pencil`, `bi bi-trash` |

```html
<div class="container">
    <div class="row">
        <div class="col-sm-4"><div class="staerke-box">...</div></div>
        <div class="col-sm-4"><div class="staerke-box">...</div></div>
        <div class="col-sm-4"><div class="staerke-box">...</div></div>
    </div>
</div>

<div class="mb-3">
    <label for="emailFeld" class="form-label">E-Mail:</label>
    <input type="email" id="emailFeld" name="email" class="form-control" required>
    <div class="invalid-feedback">Die E-Mail-Adresse muss ein @-Zeichen enthalten.</div>
</div>

<button class="btn btn-primary btn-sm">Bearbeiten</button>
```

- Grid: 12 Spalten pro `row`; `col-sm-4` = ab Breakpoint `sm` (≥ 576px) ein Drittel, darunter volle Breite.
- `container` hat eine feste Maximalbreite je Breakpoint, `container-fluid` immer 100%.
- Eigene Klassen wie `.staerke-box` oder `.card.hervorgehoben` ergänzen Bootstrap in `index.css` / `style.css`.

---

*Erhoben aus allen `.css`-, `.html`-, `.php`- und `.js`-Dateien in
`exercises/` und `solutions/` (Stand Oktober 2026).*
