# TODOs – Übung 4: DOM-Werte lesen

## kontakt.html
- (kein TODO-Marker) Das Formular hat die neue `id="kontaktFormular"` bekommen und sein `action`-Attribut zeigt auf `kontaktanfrage-bestaetigung.html`. Die eigentliche Logik steckt in `js/main.js`.

## js/main.js
1. TODO 1 (Submit-Handler des Kontaktformulars): Werte der Formularfelder auslesen (`nameFeld.value`, `emailFeld.value`, `betreffFeld.value`, `nachrichtFeld.value`), das ausgewählte Radio-Button-Element für die Rückmeldung per `document.querySelector('input[name="rueckmeldung"]:checked')` ermitteln (kann `null` sein) sowie den Zustand der Newsletter-Checkbox per `newsletterFeld.checked` lesen. Daraus ein Objekt mit den Eigenschaften `name`, `email`, `betreff`, `rueckmeldung`, `nachricht` und `newsletter` erstellen.
2. TODO 2: Das Objekt mit `JSON.stringify` in einen JSON-String umwandeln und mit `localStorage.setItem` unter dem Schlüssel `"kontaktanfrage"` speichern.
3. TODO 3: Mit `location.href` zu `"kontaktanfrage-bestaetigung.html"` weiterleiten.
4. TODO 4 (auf kontaktanfrage-bestaetigung.html): Den JSON-String unter dem Schlüssel `"kontaktanfrage"` per `localStorage.getItem` lesen. Falls kein Wert vorhanden ist, in `#begruessung` einen Hinweistext anzeigen und abbrechen (`return`). Andernfalls mit `JSON.parse` zurück in ein Objekt wandeln und dessen Eigenschaften per `textContent` in die vorgegebenen Platzhalter-Elemente (`#begruessung`, `#detailEmail`, `#detailBetreff`, `#detailRueckmeldung`, `#detailNachricht`, `#detailNewsletter`) eintragen.

## kontaktanfrage-bestaetigung.html (neu)
- (kein TODO-Marker) Neue Seite mit vorgegebenen Platzhalter-Elementen (`#begruessung` sowie den `#detail...`-Spans), die von TODO 4 befüllt werden. Analog zu `solutions/chapter09/04_rest_client_loesung/kontakt-verarbeiten.php` aufgebaut (Begrüßungstext + Liste der übermittelten Werte + Link zurück zum Formular), liest die Daten hier jedoch aus dem localStorage statt aus `$_POST`.

## projekte.html
- (kein TODO-Marker) Unverändert gegenüber Übung 1 (statische Tabelle). Wird erst in Übung 5 (DOM-Manipulation) per JavaScript befüllt.

## Sonstige Dateien
- (kein TODO-Marker) `index.html`, `ueber-mich.html`, `rechtliches/impressum.html`, `css/style.css`, `css/druck.css`, `js/begruessung.js` entsprechen unverändert dem Stand der vorherigen Website-Übungen und enthalten keine TODOs.

