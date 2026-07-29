# TODOs – Übung 7: DOM-Manipulation

## projekte.html
1. TODO 1: Ermitteln Sie per `getElementById` Referenzen auf den tbody-Bereich (`id="projekteKoerper"`) sowie auf die Zusammenfassungszelle im tfoot (`id="projekteAnzahl"`) und speichern Sie sie in Variablen.
2. TODO 2: Iterieren Sie das Array "projekte" mit einer `for...of`-Schleife. Erzeugen Sie pro Projekt per `document.createElement("tr")` eine neue Tabellenzeile mit 4 Zellen (`createElement("td")`): Titel, Technologie, Jahr sowie ein Link-Element (`createElement("a")`) mit href auf `projekt.link`, `target="_blank"` und dem Text "Repository". Hängen Sie die Zellen an die Zeile und die Zeile an den tbody (aus TODO 1) an. Setzen Sie anschließend den Text der Zusammenfassungszelle auf `"Anzahl Projekte: " + projekte.length`.
3. TODO 3: Ermitteln Sie den Button mit `id="filterButton"` und registrieren Sie per `addEventListener("click", ...)` einen Handler. Der Handler soll ALLE Zeilen des tbody (`querySelectorAll("tr")`) durchlaufen und bei jeder Zeile, deren dritte Zelle (Jahr) den Text "2026" enthält, die CSS-Klasse "hervorgehoben" per `classList.toggle` umschalten.

## css/style.css
- (kein TODO-Marker) Neue Regel `tr.hervorgehoben { background-color: #ffd60a; }` wurde gegenüber der Vorgänger-Übung ergänzt. Diese CSS-Klasse ist die visuelle Grundlage für das per TODO 3 umzuschaltende `classList.toggle("hervorgehoben")` und war ohne eigenen TODO-Marker bereits vorbereitet.

## Anmerkung zum Vorgänger-Vergleich
Der eigentliche Vorgänger dieser Website-Übung ist strukturell 01_einbinden_aufgabe (beides Ordner-basierte Website-Teilübungen); ein Vergleich mit der losen Datei 06_json_aufgabe.html ist wegen der unterschiedlichen Dateistruktur (Mehrdatei-Website vs. Einzeldatei) nicht sinnvoll möglich, daher stützt sich diese Analyse zusätzlich auf einen Abgleich mit 01_einbinden_aufgabe. Dabei zeigte sich, dass index.html, kontakt.html, ueber-mich.html, rechtliches/impressum.html, js/main.js sowie js/begruessung.js der bereits gelösten Fassung von Übung 1 entsprechen (übliches Vorkapitel-als-Ausgangsbasis-Muster) und keine weiteren TODO-losen Funde enthalten.
