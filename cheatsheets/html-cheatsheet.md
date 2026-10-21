# HTML Cheat-Sheet

Alle 51 HTML-Tags, die in den Übungen und Musterlösungen (Kapitel 3–9)
vorkommen – mit typischen Attributen und Beispielen aus dem
Portfolio-Projekt. **Kap.** = Kapitel der ersten Verwendung, *leer* =
Element ohne End-Tag.

- [Dokument-Grundgerüst](#dokument-grundgerüst)
- [Seitenstruktur & Container](#seitenstruktur--container)
- [Überschriften & Text](#überschriften--text)
- [Listen](#listen)
- [Links & Bilder](#links--bilder)
- [Tabellen](#tabellen)
- [Formulare](#formulare)
- [Interaktive Elemente](#interaktive-elemente)

---

## Dokument-Grundgerüst

| Tag | Kap. | Zweck | Attribute im Projekt |
|---|---|---|---|
| `<html>` | 3 | Wurzelelement der Seite | `lang` |
| `<head>` | 3 | Metadaten (nicht sichtbar) | – |
| `<meta>` | 3 | Metainformationen, *leer* | `charset`, `name`, `content` |
| `<title>` | 3 | Titel im Browser-Tab | – |
| `<link>` | 4 | Externe Ressource (Stylesheet), *leer* | `rel`, `href`, `media` |
| `<script>` | 4 | JavaScript (extern oder inline) | `src`, `defer` |
| `<body>` | 3 | Sichtbarer Inhalt | – |

```html
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projekte - Alex Berger</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/druck.css" media="print">
    <script src="js/main.js" defer></script>
</head>
<body>
    ...
</body>
</html>
```

- `viewport`-Meta-Tag ist Voraussetzung für Responsive Design (Kap. 4).
- `media="print"` lädt ein Stylesheet nur für den Druck.
- `defer` führt das Skript erst aus, wenn das HTML fertig geparst ist.

---

## Seitenstruktur & Container

| Tag | Kap. | Zweck | Attribute im Projekt |
|---|---|---|---|
| `<header>` | 3 | Kopfbereich (Logo, Navigation) | – |
| `<nav>` | 3 | Hauptnavigation | `id` |
| `<main>` | 4 | Hauptinhalt, nur einmal pro Seite | – |
| `<footer>` | 3 | Fußbereich (Impressum) | – |
| `<div>` | 3 | Neutraler Block-Container (Layout) | `class`, `id` |
| `<span>` | 3 | Neutraler Inline-Container | `id`, `class`, `style` |
| `<iframe>` | 9 | Bettet eine andere Seite ein | `src`, `width`, `height` |

```html
<header>
    <img src="images/logo.png" alt="Logo Alex Berger" height="50">
    <nav id="hauptmenue">
        <ul>
            <li><a href="index.html">Startseite</a></li>
            <li><a href="projekte.html">Projekte</a></li>
        </ul>
    </nav>
</header>
<main>
    <h1>Über mich</h1>
    <div class="container">...</div>
</main>
<footer>
    <a href="rechtliches/impressum.html">Impressum</a>
</footer>

<iframe src="gaestebuch/index.php" width="100%" height="500px"></iframe>
```

---

## Überschriften & Text

| Tag | Kap. | Zweck | Attribute im Projekt |
|---|---|---|---|
| `<h1>` | 3 | Hauptüberschrift, einmal pro Seite | `class` |
| `<h2>` | 3 | Überschrift Ebene 2 | `class` |
| `<h3>` | 6 | Überschrift Ebene 3 | – |
| `<h5>` | 7 | Ebene 5 (Bootstrap-Karten, Modal-Titel) | `class`, `id` |
| `<h6>` | 7 | Ebene 6 | – |
| `<p>` | 3 | Absatz | `id`, `class` |
| `<br>` | 3 | Zeilenumbruch, *leer* | – |
| `<hr>` | 3 | Thematischer Trenner, *leer* | – |
| `<strong>` | 3 | Starke Betonung (fett) | – |
| `<em>` | 3 | Betonung (kursiv) | – |
| `<i>` | 9 | Hier: Platzhalter für Bootstrap-Icons | `class` |
| `<pre>` | 3 | Vorformatierter Text (Leerzeichen bleiben) | `id` |
| `<code>` | 9 | Inline-Codefragment | – |

```html
<h1>Meine Projekte</h1>
<p>Ich studiere <strong>Angewandte Informatik</strong>.</p>
<h5 class="card-title">Portfolio</h5>
<pre id="ausgabe"></pre>
<p>... über die Schnittstelle (<code>api/</code>).</p>
<i class="bi bi-trash"></i>
```

- Überschriftenebenen nicht überspringen (`h4` kommt im Projekt nicht vor).
- `<br>` nicht für Abstände missbrauchen – dafür gibt es CSS.

---

## Listen

| Tag | Kap. | Zweck | Attribute im Projekt |
|---|---|---|---|
| `<ul>` | 3 | Ungeordnete Liste (z.B. Menü) | `class`, `id`, `style` |
| `<ol>` | 3 | Nummerierte Liste | – |
| `<li>` | 3 | Listeneintrag | `class` |
| `<dl>` | 3 | Beschreibungsliste | – |
| `<dt>` | 3 | Begriff | – |
| `<dd>` | 3 | Beschreibung zum Begriff | – |

```html
<ol>
    <li>Abitur</li>
    <li>Studium</li>
</ol>

<dl>
    <dt>MVC</dt>
    <dd>Model-View-Controller ...</dd>
    <dt>REST</dt>
    <dd>...</dd>
</dl>
```

---

## Links & Bilder

| Tag | Kap. | Zweck | Attribute im Projekt |
|---|---|---|---|
| `<a>` | 3 | Hyperlink | `href`, `target`, `class`, `data-bs-toggle` |
| `<img>` | 3 | Bild, *leer* | `src`, `alt`, `width`, `height`, `title` |

```html
<a href="projekte.html">Projekte</a>
<a href="https://github.com/alexberger/portfolio" target="_blank">Repository</a>

<img src="images/profil.png" alt="Profilfoto von Alex Berger"
     height="200" title="Foto aus dem Jahr 2024">
```

- `target="_blank"` öffnet den Link in einem neuen Tab.
- `alt` ist Pflicht (Barrierefreiheit), `title` erscheint als Tooltip.
- Relative Pfade (`../images/logo.png`) beziehen sich auf die aktuelle Datei.

---

## Tabellen

Die Projekttabelle (Kap. 3–6, ab Kap. 5 per DOM befüllt); ab Kap. 7
durch Bootstrap-Karten ersetzt.

| Tag | Kap. | Zweck | Attribute im Projekt |
|---|---|---|---|
| `<table>` | 3 | Tabelle (nur für Daten, nicht für Layout) | `border` (veraltet) |
| `<caption>` | 3 | Tabellenüberschrift | – |
| `<thead>` | 3 | Kopfbereich | – |
| `<tbody>` | 3 | Rumpf | `id` |
| `<tfoot>` | 3 | Fußbereich | – |
| `<tr>` | 3 | Zeile | – |
| `<th>` | 3 | Kopfzelle | `class` |
| `<td>` | 3 | Datenzelle | `colspan`, `rowspan`, `id` |

```html
<table>
    <caption>Meine Projekte</caption>
    <thead>
        <tr><th>Projekt</th><th>Technologie</th><th>Jahr</th><th>Link</th></tr>
    </thead>
    <tbody id="projekteTabelle">
        <tr>
            <td rowspan="2">Portfolio-Website</td>
            ...
        </tr>
    </tbody>
    <tfoot>
        <tr><td colspan="4">Anzahl Projekte: 3</td></tr>
    </tfoot>
</table>
```

- `colspan` verbindet Zellen über mehrere Spalten, `rowspan` über mehrere Zeilen.

---

## Formulare

Das Kontaktformular (ab Kap. 3, ab Kap. 6 per PHP ausgewertet). Der
`name` eines Feldes wird zum Schlüssel in `$_POST` bzw. `$_GET`.

| Tag | Kap. | Zweck | Attribute im Projekt |
|---|---|---|---|
| `<form>` | 3 | Formular | `action`, `method`, `id`, `onsubmit` |
| `<label>` | 3 | Beschriftung eines Feldes | `for`, `class` |
| `<input>` | 3 | Eingabefeld, *leer* | `type`, `id`, `name`, `value`, `required`, `checked`, `class` |
| `<textarea>` | 3 | Mehrzeiliges Textfeld | `id`, `name`, `rows`, `cols`, `required`, `class` |
| `<select>` | 3 | Auswahlliste | `id`, `name`, `class` |
| `<option>` | 3 | Eintrag einer Auswahlliste | `value`, `selected` |
| `<button>` | 3 | Schaltfläche | `type`, `class`, `id`, `onclick` |

Verwendete `input`-Typen: `text`, `email`, `number`, `radio`,
`checkbox`, `submit`.

```html
<form action="kontakt-verarbeiten.php" method="post">
    <label for="nameFeld">Name:</label><br>
    <input type="text" id="nameFeld" name="name" required><br>

    <label for="emailFeld">E-Mail:</label><br>
    <input type="email" id="emailFeld" name="email" required><br>

    <label for="betreffFeld">Betreff:</label><br>
    <select id="betreffFeld" name="betreff">
        <option value="anfrage" selected>Anfrage</option>
        <option value="feedback">Feedback</option>
        <option value="sonstiges">Sonstiges</option>
    </select><br>

    <label for="nachrichtFeld">Nachricht:</label><br>
    <textarea id="nachrichtFeld" name="nachricht" rows="4" cols="30" required></textarea><br>

    <input type="radio" id="rueckmeldungEmail" name="rueckmeldung" value="email" checked>
    <label for="rueckmeldungEmail">E-Mail</label>
    <input type="radio" id="rueckmeldungTelefon" name="rueckmeldung" value="telefon">
    <label for="rueckmeldungTelefon">Telefon</label><br>

    <input type="checkbox" id="newsletterFeld" name="newsletter">
    <label for="newsletterFeld">Ich möchte den Newsletter erhalten</label><br>

    <input type="submit" value="Absenden">
</form>
```

- `label for="…"` verweist auf die `id` des Feldes – ein Klick auf das Label fokussiert das Feld.
- Radio-Buttons mit gleichem `name` bilden eine Gruppe (nur einer auswählbar).
- `<button>` ohne `type` ist in einem Formular automatisch `submit` – für reine JS-Aktionen `type="button"` setzen.

---

## Interaktive Elemente

| Tag | Kap. | Zweck | Attribute im Projekt |
|---|---|---|---|
| `<details>` | 4 | Aufklappbarer Bereich (ohne JavaScript) | – |
| `<summary>` | 4 | Immer sichtbare Kopfzeile von `details` | – |

```html
<details>
    <summary>Werdegang</summary>
    <ol>...</ol>
</details>
```

---

*Erhoben aus allen `.html`-, `.php`- und `.js`-Dateien in `exercises/`
und `solutions/` (Stand Oktober 2026).*
