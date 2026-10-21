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

1. TODO 1: Der Abschnitt "Meine Stärken" (Überschrift und die drei
   Stärken-Boxen) ist horizontal zentriert, hat links und rechts etwas
   Abstand zum Fensterrand und wird auf sehr breiten Bildschirmen nicht
   beliebig breit. Die Breite passt sich stufenweise der Fenstergröße an.
2. TODO 2: Die drei vorgegebenen Stärken (Sauberer Code, Moderne
   Technologien, Zuverlässig, je mit Überschrift und kurzem Text) stehen
   ab einer Fensterbreite von 576px als drei gleich breite Spalten
   nebeneinander. Auf schmaleren Bildschirmen stehen sie untereinander und
   nutzen jeweils die volle Breite.

*Buttons (7.5)*

3. TODO 3: "Projekte ansehen" erscheint als großer, auffälliger
   Haupt-Button im Bootstrap-Stil (Primärfarbe) statt im eigenen
   Button-Stil aus Kapitel 4.

## technik-spielwiese.php

*Container (7.2)*

1. TODO 1: Im Abschnitt "Container-Vergleich" steht ein farbig
   hinterlegter Kasten (die Farbe liefert die vorgegebene Klasse
   "beispiel-container") mit dem Text "Ich bin ein 'container' -
   zentriert mit fester maximaler Breite". Er ist zentriert und wächst
   beim Vergrößern des Fensters nur stufenweise bis zu einer festen
   Maximalbreite.
2. TODO 2: Direkt darunter steht ein farbig hinterlegter Kasten
   (vorgegebene Klasse "beispiel-fluid") mit dem Text "Ich bin ein
   'container-fluid' - immer 100% Bildschirmbreite". Er nimmt bei jeder
   Fenstergröße die volle Breite ein. Beim Ändern der Fensterbreite ist
   der Unterschied zu TODO 1 deutlich sichtbar. Beide Kästen liegen
   bewusst außerhalb des zentrierten Seitenbereichs oben auf der Seite.

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

1. TODO 1: Der gesamte Seiteninhalt (Überschrift, Text, Button, Karten)
   ist zentriert, hat seitlichen Abstand zum Fensterrand und etwas
   Abstand nach oben.

*Buttons (7.5)*

2. TODO 2: Der Button "Projekte aus 2026 hervorheben" erscheint als
   Bootstrap-Button in der Sekundärfarbe (grau). Der Abstand nach unten
   bleibt erhalten.

*Cards (7.6)*

3. TODO 3: Für jedes Projekt im Array `projekte` erscheint eine Karte,
   die exakt so aufgebaut ist wie die vorgegebene Beispielkarte (gleiche
   Elemente, Klassen, ids und `data-jahr`-Attribut, damit der vorhandene
   Filter-Button funktioniert). Ab mittlerer Fensterbreite stehen zwei
   Karten nebeneinander. In diesem Schritt: Spalte, Karte und Kopfzeile
   mit dem Projekttitel (id `cardId + "-titel"`). `cardId` ist
   `"card" + laufende Nummer` (1, 2, 3, ...).
4. TODO 4: Im Inhaltsbereich der Karte stehen Technologie und Jahr des
   Projekts in je einem Absatz, mit fett gedruckter Beschriftung
   "Technologie:" bzw. "Jahr:". Die Werte selbst lassen sich über die
   ids `cardId + "-technologie"` bzw. `cardId + "-jahr"` gezielt ansprechen
   (wird in Übung 3 benötigt).
5. TODO 5: Die Fußzeile der Karte enthält einen kleinen, umrandeten
   Link-Button "Repository", der das Repository des Projekts in einem
   neuen Tab öffnet, sowie einen kleinen Button "Bearbeiten" in der
   Primärfarbe. Ein Klick darauf ruft `projektBearbeiten(cardId)` für genau
   diese Karte auf. Die fertige Karte erscheint im Karten-Deck
   (`projekteKoerper`). Am Ende sind alle drei Karten (inkl. Wetter-App)
   per JavaScript erzeugt und die Beispielkarte ist gelöscht.
6. TODO 6: Ein Aufruf von `projektBearbeiten(cardId)` zeigt (als
   Platzhalter für die Bearbeitungsfunktion aus Übung 3) eine Meldung
   mit der übergebenen cardId an, z.B. "Bearbeiten von card2".

## kontakt.php

*Buttons (7.5)*

1. TODO 1: Der Absende-Button des Kontaktformulars erscheint als
   Bootstrap-Button in der Primärfarbe.
2. TODO 2: Der Link "Zum Gästebuch" erscheint als Bootstrap-Button in
   der Sekundärfarbe (grau).

## ueber-mich.html

*Tabs (7.7)*

1. TODO 1: Über den Inhalten erscheinen drei Registerkarten-Reiter:
   "Werdegang", "Fähigkeiten" und "Begriffe". Beim Laden der Seite ist
   "Werdegang" als ausgewählt markiert.
2. TODO 2: Es ist immer nur der Inhalt des ausgewählten Reiters
   sichtbar: bei "Werdegang" die bereits vorhandene nummerierte Liste,
   bei "Fähigkeiten" die verschachtelte Liste, bei "Begriffe" die
   Begriffsliste. Beim Laden ist der Werdegang sichtbar. Ein Klick auf
   einen Reiter wechselt den Inhalt sofort, ohne die Seite neu zu laden
   und ohne eigenen JavaScript-Code.

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
