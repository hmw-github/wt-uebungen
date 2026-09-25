# TODOs – Übung 1: Grid und Komponenten

**Aufgabenstellung:**
    Überarbeiten Sie die Portfolio-Website mit Bootstrap 5: Layout mit
    Container und Grid, Bootstrap-Buttons statt der eigenen Klasse "btn"
    aus Kapitel 4, ein Projekt-Karten-Deck (Cards) auf der Projekte-Seite
    und Tabs auf der Seite "Über mich". Die TODO-Nummern zählen pro Datei;
    die Kapitelangaben ordnen sie den Themen zu (7.2–7.7), sodass die
    Übung in Etappen bearbeitet werden kann.

- (kein TODO-Marker) Bootstrap 5 ist bereits site-weit per CDN eingebunden
  (CSS im `<head>`, JS-Bundle vor `</body>`) – bewusst fertig vorgegeben,
  kein eigener TODO.

## index.php

*Container und Grid (7.2–7.3)*

1. TODO 1: Den Abschnitt "Meine Stärken" (Überschrift und die drei
   Vorteils-Boxen) mit einem div der Klasse "container" umschließen,
   damit der Inhalt zentriert und responsive dargestellt wird.
2. TODO 2: Innerhalb dieses Containers eine Bootstrap-Grid-Zeile
   (div class="row") mit drei Spalten (je div class="col-sm-4") erstellen,
   die je eine der drei vorgegebenen Stärken (Sauberer Code, Moderne
   Technologien, Zuverlässig) mit Überschrift und kurzem Text enthalten.
   Die drei Spalten müssen sich zu 12 aufsummieren.

*Buttons (7.5)*

3. TODO 3: Bei "Projekte ansehen" die Klasse "btn" durch
   "btn btn-primary btn-lg" ersetzen (großer, auffälliger Haupt-Button).

## technik-spielwiese.php

*Container (7.2)*

1. TODO 1: Im Abschnitt "Container-Vergleich" (bewusst AUSSERHALB des
   `container mt-4`-Wrappers oben auf der Seite, damit der Unterschied
   sichtbar bleibt) ein div der Klasse "container" mit sichtbarer
   Hintergrundfarbe (Klasse "beispiel-container") erstellen, das den Text
   "Ich bin ein 'container' - zentriert mit fester maximaler Breite"
   enthält.
2. TODO 2: Direkt darunter ein div der Klasse "container-fluid" mit
   sichtbarer Hintergrundfarbe (Klasse "beispiel-fluid") erstellen, das
   den Text "Ich bin ein 'container-fluid' - immer 100% Bildschirmbreite"
   enthält, damit der Unterschied zu TODO 1 optisch erkennbar ist.

- (kein TODO-Marker) Die übrigen Code-Demos auf dieser Seite (PHP-
  Grundlagen, JS-Einbindung) sind bereits fertig vorgegeben.

## projekte.html

Die bisherige Projekttabelle wird durch ein Karten-Deck ersetzt. Die
Projekte werden dynamisch per JavaScript aus dem Array `projekte` erzeugt,
diesmal als Bootstrap-Card statt als Tabellenzeile. Eine fertige
Beispielkarte (Wetter-App) ist als reines HTML vorgegeben, damit klar ist,
welche Struktur pro Karte am Ende herauskommen soll; sie ist zu löschen,
sobald die JS-Erzeugung funktioniert.

*Container (7.2)*

1. TODO 1: Den gesamten Seiteninhalt zwischen `<main>` und `</main>` mit
   einem `div class="container mt-4"` umschließen.

*Buttons (7.5)*

2. TODO 2: Beim Button "Projekte aus 2026 hervorheben" die Klasse "btn"
   durch "btn btn-secondary" ersetzen (die Klasse "mb-3" bleibt).

*Cards (7.6)*

3. TODO 3: Pro Durchlauf der Schleife über `projekte` eine Spalte
   (`div class="col-md-6 mb-3"`) mit verschachteltem `div class="card"`
   (`dataset.jahr = projekt.jahr`) und darin einem `card-header`
   (`id` = `cardId + "-titel"`, Textinhalt `projekt.titel`) erzeugen.
   `cardId` ist `"card" + laufende Nummer` (1, 2, 3, ...).
4. TODO 4: `card-body` mit zwei Absätzen (`p class="card-text"`) erzeugen:
   "Technologie:" (fett, `strong`) gefolgt von einem `span`
   (`id` = `cardId + "-technologie"`, Wert `projekt.technologie`), analog
   "Jahr:" mit `id` = `cardId + "-jahr"` und Wert `projekt.jahr`.
5. TODO 5: `card-footer` mit Link "Repository" (`href` = `projekt.link`,
   `target="_blank"`, Klasse "btn btn-outline-secondary btn-sm") und
   Button "Bearbeiten" (Klasse "btn btn-primary btn-sm", ruft per
   Event-Listener `projektBearbeiten(cardId)` auf) erzeugen; fertige Karte
   in `projekteKoerper` einfügen.
6. TODO 6: JavaScript-Funktion `projektBearbeiten(cardId)` implementieren,
   die (als Platzhalter für Übung 3) eine Meldung mit der übergebenen
   cardId anzeigt, z.B. per `alert(...)` oder `console.log(...)`.

## kontakt.php

*Buttons (7.5)*

1. TODO 1: Beim Submit-Button des Kontaktformulars die Klasse "btn"
   durch "btn btn-primary" ersetzen.
2. TODO 2: Beim Link-Button "Zum Gästebuch" die Klasse "btn" durch
   "btn btn-secondary" ersetzen.

## ueber-mich.html

*Tabs (7.7)*

1. TODO 1: Tab-Navigation als `ul class="nav nav-tabs"` mit drei
   `li class="nav-item"` erstellen, die je einen `a class="nav-link"`
   enthalten: "Werdegang" (`href="#werdegang"`, `data-bs-toggle="tab"`,
   zusätzlich Klasse "active", da beim Laden aktiv), "Fähigkeiten"
   (`href="#fähigkeiten"`, `data-bs-toggle="tab"`), "Begriffe"
   (`href="#begriffe"`, `data-bs-toggle="tab"`).
2. TODO 2: Darunter ein `div class="tab-content"` mit drei
   `div class="tab-pane"` erstellen (ids passend zu den hrefs aus
   TODO 1, das erste zusätzlich mit Klasse "active"): `id="werdegang"`
   (aktiv, enthält die bereits vorhandene ol mit dem Werdegang),
   `id="fähigkeiten"` (enthält die bereits vorhandene verschachtelte ul),
   `id="begriffe"` (enthält die bereits vorhandene dl mit den
   Fachbegriffen).

- (kein TODO-Marker) Bootstrap-Einbindung ergänzt sowie ein neuer
  Navigationslink "Technik-Spielwiese" (ebenso auf `projekte.html`).

## css/style.css und css/index.css

- (kein TODO-Marker) Neue Regeln `.technik-tests` (Rahmen/Hintergrund für
  Testboxen auf `technik-spielwiese.php`) sowie `.beispiel-container` /
  `.beispiel-fluid` (Hintergrundfarben zur Veranschaulichung von
  `container` vs. `container-fluid`) in `style.css`.
- (kein TODO-Marker) Neue Regel `.card.hervorgehoben` (gelber 3px-Rahmen)
  in `style.css` – wird vom bereits vorhandenen Filter-Button-Skript
  ("Projekte aus 2026 hervorheben") verwendet, um Karten mit
  `data-jahr="2026"` optisch hervorzuheben.
- (kein TODO-Marker) Neue Datei `index.css` mit dem Stil `.staerke-box`
  (Kästchen für die Grid-Spalten im Abschnitt "Meine Stärken").

## rechtliches/impressum.html

- (kein TODO-Marker) Bootstrap-CDN-Link und JS-Bundle ergänzt (kein
  Navigationsmenü auf dieser Seite, daher kein neuer Nav-Link).
