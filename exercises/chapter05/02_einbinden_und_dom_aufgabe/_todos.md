# TODOs – Übung 2: JavaScript einbinden und DOM

**Aufgabenstellung:**
    Bringen Sie JavaScript in Ihre Portfolio-Website: Binden Sie Skripte auf
    verschiedene Arten ein, lesen Sie die Werte des Kontaktformulars per
    DOM-Zugriff aus und erzeugen Sie die Projekttabelle per
    DOM-Manipulation aus JSON-Daten. Die TODO-Nummern zählen pro Datei; die
    Gruppierung folgt der Folienreihenfolge (5.2, 5.5), sodass die Übung in
    Etappen bearbeitet werden kann.

## index.html

*JavaScript einbinden (5.2)*

1. TODO 1: Ergänzen Sie im `<script>`-Block im `<head>` ein `console.log()`, das eine Begrüßung ausgibt (z.B. "Startseite wird geladen...").
2. TODO 2: Ergänzen Sie einen Link, der als href das `javascript:`-Pseudo-Protokoll verwendet, um beim Klick direkt eine `alert()`-Meldung mit einem kurzen Fakt über diese Website anzuzeigen, z.B. `href="javascript:alert('Diese Seite wurde mit HTML, CSS und JavaScript gebaut.')"`.
3. TODO 3: Ergänzen Sie einen Button mit dem Text "Info anzeigen", der über das Attribut `onclick` die Funktion `zeigeAlert()` aufruft. (Diese Funktion wird in `js/begruessung.js` definiert, siehe unten.)
4. TODO 4: Binden Sie am Ende des `<body>` die externe Datei "js/begruessung.js" per `<script src="..."></script>` ein.

## js/begruessung.js

*JavaScript einbinden (5.2)*

1. TODO 1: Implementieren Sie die Funktion `zeigeAlert()`, die per `alert()` den Text "Hallo aus der externen Datei!" anzeigt.

## js/main.js

Der Block für das Burger-Menü am Dateianfang ist bereits fertig (kein TODO).

*DOM-Werte lesen (5.5) – Kontaktformular*

1. TODO 1 (Submit-Handler des Kontaktformulars): Werte der Formularfelder auslesen (`nameFeld.value`, `emailFeld.value`, `betreffFeld.value`, `nachrichtFeld.value`), das ausgewählte Radio-Button-Element für die Rückmeldung per `document.querySelector('input[name="rueckmeldung"]:checked')` ermitteln (kann `null` sein) sowie den Zustand der Newsletter-Checkbox per `newsletterFeld.checked` lesen. Daraus ein Objekt mit den Eigenschaften `name`, `email`, `betreff`, `rueckmeldung`, `nachricht` und `newsletter` erstellen.
2. TODO 2: Das Objekt mit `JSON.stringify` in einen JSON-String umwandeln und mit `localStorage.setItem` unter dem Schlüssel `"kontaktanfrage"` speichern.
3. TODO 3: Mit `location.href` zu `"kontaktanfrage-bestaetigung.html"` weiterleiten.
4. TODO 4 (auf kontaktanfrage-bestaetigung.html): Den JSON-String unter dem Schlüssel `"kontaktanfrage"` per `localStorage.getItem` lesen. Falls kein Wert vorhanden ist, in `#begruessung` einen Hinweistext anzeigen und abbrechen (`return`). Andernfalls mit `JSON.parse` zurück in ein Objekt wandeln und dessen Eigenschaften per `textContent` in die vorgegebenen Platzhalter-Elemente (`#begruessung`, `#detailEmail`, `#detailBetreff`, `#detailRueckmeldung`, `#detailNachricht`, `#detailNewsletter`) eintragen.

*DOM-Manipulation (5.5) – Projekttabelle*

`loadProjects()` ist vorgegeben: lädt `projekte.json` per fetch() und übergibt die Daten an `fillProjectTable(projekte)`.

5. TODO 5: `fillProjectTable(projekte)` implementieren.
    - Ermitteln Sie per `getElementById` Referenzen auf den tbody-Bereich (`id="projekteKoerper"`) sowie auf die Zusammenfassungszelle im tfoot (`id="projekteAnzahl"`).
    - Iterieren Sie das übergebene Array `projekte` mit einer `for...of`-Schleife.
    - Erzeugen Sie pro Projekt per `document.createElement("tr")` eine neue Tabellenzeile mit 4 Zellen (`createElement("td")`): Titel, Technologie, Jahr sowie ein Link-Element (`createElement("a")`) mit href auf `projekt.link`, `target="_blank"` und dem Text "Repository".
    - Hängen Sie die Zellen an die Zeile und die Zeile an den tbody an.
    - Setzen Sie anschließend den Text der Zusammenfassungszelle auf `"Anzahl Projekte: " + projekte.length`.
6. TODO 6:
    - Ermitteln Sie den Button mit `id="filterButton"` und registrieren Sie per `addEventListener("click", ...)` einen Handler.
    - Der Handler soll ALLE Zeilen des tbody (`querySelectorAll("tr")`) durchlaufen und bei jeder Zeile, deren dritte Zelle (Jahr) den Text "2026" enthält, die CSS-Klasse "hervorgehoben" per `classList.toggle` umschalten.

## kontakt.html

- (kein TODO-Marker) Das Formular hat die neue `id="kontaktFormular"` bekommen und sein `action`-Attribut zeigt auf `kontaktanfrage-bestaetigung.html`. Die eigentliche Logik steckt in `js/main.js` (TODO 1–3).

## kontaktanfrage-bestaetigung.html (neu)

- (kein TODO-Marker) Neue Seite mit vorgegebenen Platzhalter-Elementen (`#begruessung` sowie den `#detail...`-Spans), die von TODO 4 in `js/main.js` befüllt werden. Analog zu `solutions/chapter09/04_rest_client_loesung/kontakt-verarbeiten.php` aufgebaut (Begrüßungstext + Liste der übermittelten Werte + Link zurück zum Formular), liest die Daten hier jedoch aus dem localStorage statt aus `$_POST`.

## projekte.html und projekte.json

- (kein TODO-Marker) Die statischen Tabellenzeilen wurden entfernt: `tbody` hat die `id="projekteKoerper"`, die Zusammenfassungszelle im `tfoot` die `id="projekteAnzahl"`, und über der Tabelle steht der neue Button `#filterButton`. Die Seite bindet ausschließlich `js/main.js` ein.
- (kein TODO-Marker) `projekte.json` enthält die 3 Projektdatensätze (titel, technologie, jahr, link) als vorgegebene Datenquelle, die per fetch() in `loadProjects()` geladen wird.

## css/style.css

- (kein TODO-Marker) Enthält die Regel `tr.hervorgehoben { background-color: #ffd60a; }` als visuelle Grundlage für das per TODO 6 umzuschaltende `classList.toggle("hervorgehoben")`.

## ueber-mich.html

- (kein TODO-Marker) Strukturvereinfachung gegenüber Kapitel 4: Die aufklappbaren `<details>`/`<summary>`-Blöcke ("Werdegang", "Fähigkeiten", "Find me on Github") wurden durch einfache `<h2>`/`<ul>`-Abschnitte ersetzt, der Abschnitt "Wichtige Begriffe" heißt jetzt nur noch "Begriffe". Diese Änderung ist inhaltlich unabhängig von den JS-TODOs dieser Übung und betrifft keinen der TODO-Punkte.
