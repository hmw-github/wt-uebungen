# TODOs – Übung 5: DOM-Manipulation

## projekte.json
- (kein TODO-Marker) Enthält die 3 Projektdatensätze (titel, technologie, jahr, link) als vorgegebene Datenquelle, die per fetch() in `loadProjects()` geladen wird.

## js/main.js
- (kein TODO-Marker) Der Block für das Kontaktformular (Submit-Handler auf `#kontaktFormular` sowie die Anzeige-Logik auf `kontaktanfrage-bestaetigung.html`) ist unverändert und bereits gelöst aus Übung 4 übernommen.
- (kein TODO-Marker) `loadProjects()` ist vorgegeben: lädt `projekte.json` per fetch() und übergibt die Daten an `fillProjectTable(projekte)`.
1. TODO 1: `fillProjectTable(projekte)` implementieren. Ermitteln Sie per `getElementById` Referenzen auf den tbody-Bereich (`id="projekteKoerper"`) sowie auf die Zusammenfassungszelle im tfoot (`id="projekteAnzahl"`). Iterieren Sie das übergebene Array `projekte` mit einer `for...of`-Schleife. Erzeugen Sie pro Projekt per `document.createElement("tr")` eine neue Tabellenzeile mit 4 Zellen (`createElement("td")`): Titel, Technologie, Jahr sowie ein Link-Element (`createElement("a")`) mit href auf `projekt.link`, `target="_blank"` und dem Text "Repository". Hängen Sie die Zellen an die Zeile und die Zeile an den tbody an. Setzen Sie anschließend den Text der Zusammenfassungszelle auf `"Anzahl Projekte: " + projekte.length`.
2. TODO 2: Ermitteln Sie den Button mit `id="filterButton"` und registrieren Sie per `addEventListener("click", ...)` einen Handler. Der Handler soll ALLE Zeilen des tbody (`querySelectorAll("tr")`) durchlaufen und bei jeder Zeile, deren dritte Zelle (Jahr) den Text "2026" enthält, die CSS-Klasse "hervorgehoben" per `classList.toggle` umschalten.

## projekte.html
- (kein TODO-Marker) Das frühere Inline-`<script>` (statisches `projekte`-Array + TODOs) wurde entfernt; die Seite bindet ausschließlich `js/main.js` ein.

## kontakt.html / kontaktanfrage-bestaetigung.html
- (kein TODO-Marker) Beide Seiten sind unverändert und bereits gelöst aus Übung 4 übernommen (Kontaktformular liest seine Werte per DOM-Zugriff aus, speichert sie als JSON-Objekt im localStorage und leitet zur Bestätigungsseite weiter, die die Daten wieder ausliest).

## css/style.css
- (kein TODO-Marker) Enthält die Regel `tr.hervorgehoben { background-color: #ffd60a; }` als visuelle Grundlage für das per TODO 2 umzuschaltende `classList.toggle("hervorgehoben")`.

## Anmerkung zur Nummerierung
Diese Übung hieß vormals `07_dom_manipulation_aufgabe`. Durch die Zusammenlegung der Übungen 2-5 zu `02_js_basics_aufgabe.html` sowie das Einfügen der neuen Übung 4 (`04_dom_werte_lesen_aufgabe/`) ist sie zu Übung 5 geworden.
