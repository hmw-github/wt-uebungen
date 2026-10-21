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

1. TODO 1: Beim Laden der Startseite erscheint in der Entwicklerkonsole eine Begrüßung (z.B. "Startseite wird geladen..."). Der Code dafür steht im bereits vorhandenen `<script>`-Block im `<head>`.
2. TODO 2: Auf der Startseite gibt es einen Link, der beim Anklicken eine Meldung mit einem kurzen Fakt über diese Website anzeigt (z.B. "Diese Seite wurde mit HTML, CSS und JavaScript gebaut."). Der Link verlässt die Seite nicht. Der JavaScript-Code steckt vollständig im Linkziel selbst, es gibt keinen separaten Skriptblock dafür.
3. TODO 3: Auf der Startseite gibt es einen Button mit dem Text "Info anzeigen". Ein Klick darauf ruft die Funktion `zeigeAlert()` auf, die in `js/begruessung.js` definiert ist (siehe unten). Die Verknüpfung von Button und Funktion steht direkt im HTML-Tag des Buttons.
4. TODO 4: Die Funktionen aus der externen Datei `js/begruessung.js` stehen auf der Startseite zur Verfügung, sodass der Button aus TODO 3 funktioniert. Die Einbindung erfolgt am Ende des `<body>`.

## js/begruessung.js

*JavaScript einbinden (5.2)*

1. TODO 1: Ein Aufruf von `zeigeAlert()` öffnet ein Meldungsfenster mit dem Text "Hallo aus der externen Datei!".

## js/main.js

Der Block für das Burger-Menü am Dateianfang ist bereits fertig (kein TODO).

*DOM-Werte lesen (5.5) – Kontaktformular*

1. TODO 1 (Submit-Handler des Kontaktformulars): Beim Absenden werden alle Eingaben erfasst: Name, E-Mail, Betreff, Nachricht, die gewählte Rückmeldungsart und ob die Newsletter-Checkbox angekreuzt ist. Wurde keine Rückmeldungsart gewählt, darf das Skript nicht abbrechen. Die Werte stehen danach in einem Objekt mit den Eigenschaften `name`, `email`, `betreff`, `rueckmeldung`, `nachricht` und `newsletter` (letztere als Wahrheitswert).
2. TODO 2: Das Objekt liegt anschließend als JSON-Text unter dem Schlüssel `"kontaktanfrage"` im localStorage des Browsers (prüfbar in den Entwicklertools).
3. TODO 3: Danach landet der Benutzer auf der Seite `"kontaktanfrage-bestaetigung.html"`.
4. TODO 4 (auf kontaktanfrage-bestaetigung.html): Die Seite zeigt die gespeicherte Kontaktanfrage in den vorgegebenen Platzhalter-Elementen an:
    - `#begruessung`: "Vielen Dank, <name>! Ihre Nachricht wurde empfangen."
    - `#detailEmail`, `#detailBetreff`, `#detailNachricht`: die jeweiligen Werte
    - `#detailRueckmeldung`: die gewählte Rückmeldungsart oder "keine Angabe"
    - `#detailNewsletter`: "ja" oder "nein"

    Liegt keine gespeicherte Anfrage vor, zeigt `#begruessung` stattdessen "Es wurde keine Kontaktanfrage gefunden. Bitte füllen Sie zuerst das Kontaktformular aus.", und die übrigen Elemente bleiben leer. Benutzereingaben werden dabei als reiner Text angezeigt, nicht als HTML interpretiert.

*DOM-Manipulation (5.5) – Projekttabelle*

`loadProjects()` ist vorgegeben: lädt `projekte.json` per fetch() und übergibt die Daten an `fillProjectTable(projekte)`.

5. TODO 5: Nach dem Aufruf von `fillProjectTable(projekte)` enthält der Tabellenkörper (`id="projekteKoerper"`) für jedes übergebene Projekt eine Zeile mit vier Zellen: Titel, Technologie, Jahr und einen Link mit dem Text "Repository", der auf `projekt.link` verweist und in einem neuen Tab öffnet. Die Zusammenfassungszelle im Tabellenfuß (`id="projekteAnzahl"`) zeigt "Anzahl Projekte: 3" (bzw. die tatsächliche Anzahl).
6. TODO 6: Ein Klick auf den Button "filterButton" hebt alle Tabellenzeilen mit dem Jahr 2026 gelb hervor (die CSS-Klasse "hervorgehoben" ist vorgegeben). Ein weiterer Klick nimmt die Hervorhebung wieder zurück. Andere Zeilen bleiben unverändert.

## kontakt.html

- (kein TODO-Marker) Das Formular hat die neue `id="kontaktFormular"` bekommen und sein `action`-Attribut zeigt auf `kontaktanfrage-bestaetigung.html`. Die eigentliche Logik steckt in `js/main.js` (TODO 1–3).

## kontaktanfrage-bestaetigung.html (neu)

- (kein TODO-Marker) Neue Seite mit vorgegebenen Platzhalter-Elementen (`#begruessung` sowie den `#detail...`-Spans), die von TODO 4 in `js/main.js` befüllt werden. Analog zu `solutions/chapter09/03_rest_client_loesung/kontakt-verarbeiten.php` aufgebaut (Begrüßungstext + Liste der übermittelten Werte + Link zurück zum Formular), liest die Daten hier jedoch aus dem localStorage statt aus `$_POST`.

## projekte.html und projekte.json

- (kein TODO-Marker) Die statischen Tabellenzeilen wurden entfernt: `tbody` hat die `id="projekteKoerper"`, die Zusammenfassungszelle im `tfoot` die `id="projekteAnzahl"`, und über der Tabelle steht der neue Button `#filterButton`. Die Seite bindet ausschließlich `js/main.js` ein.
- (kein TODO-Marker) `projekte.json` enthält die 3 Projektdatensätze (titel, technologie, jahr, link) als vorgegebene Datenquelle, die per fetch() in `loadProjects()` geladen wird.

## css/style.css

- (kein TODO-Marker) Enthält die Regel `tr.hervorgehoben { background-color: #ffd60a; }` als visuelle Grundlage für die Hervorhebung aus TODO 6.

## ueber-mich.html

- (kein TODO-Marker) Strukturvereinfachung gegenüber Kapitel 4: Die aufklappbaren `<details>`/`<summary>`-Blöcke ("Werdegang", "Fähigkeiten", "Find me on Github") wurden durch einfache `<h2>`/`<ul>`-Abschnitte ersetzt, der Abschnitt "Wichtige Begriffe" heißt jetzt nur noch "Begriffe". Diese Änderung ist inhaltlich unabhängig von den JS-TODOs dieser Übung und betrifft keinen der TODO-Punkte.
