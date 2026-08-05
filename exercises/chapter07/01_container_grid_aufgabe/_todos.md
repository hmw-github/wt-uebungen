# TODOs – Container und Grid

## index.php
1. TODO 1: Den Abschnitt "Meine Stärken" (Überschrift und die drei
   Vorteils-Boxen) mit einem div der Klasse "container" umschließen,
   damit der Inhalt zentriert und responsive dargestellt wird.
2. TODO 2: Innerhalb dieses Containers eine Bootstrap-Grid-Zeile
   (div class="row") mit drei Spalten (je div class="col-sm-4") erstellen,
   die je eine der drei vorgegebenen Stärken (Sauberer Code, Moderne
   Technologien, Zuverlässig) mit Überschrift und kurzem Text enthalten.
   Die drei Spalten müssen sich zu 12 aufsummieren.
- (kein TODO-Marker) Bootstrap 5 ist bereits site-weit per CDN eingebunden
  (CSS im `<head>`, JS-Bundle vor `</body>`) – laut Kopfkommentar bewusst
  fertig vorgegeben, kein eigener TODO.

## technik-spielwiese.php
3. TODO 3: Im Abschnitt "Container-Vergleich" (bewusst AUSSERHALB des
   `container mt-4`-Wrappers oben auf der Seite, damit der Unterschied
   sichtbar bleibt) ein div der Klasse "container" mit sichtbarer
   Hintergrundfarbe (Klasse "beispiel-container") erstellen, das den Text
   "Ich bin ein 'container' - zentriert mit fester maximaler Breite"
   enthält.
4. TODO 4: Direkt darunter ein div der Klasse "container-fluid" mit
   sichtbarer Hintergrundfarbe (Klasse "beispiel-fluid") erstellen, das
   den Text "Ich bin ein 'container-fluid' - immer 100% Bildschirmbreite"
   enthält, damit der Unterschied zu TODO 3 optisch erkennbar ist.
- (kein TODO-Marker) Die übrigen Code-Demos auf dieser Seite (PHP-
  Grundlagen, JS-Einbindung) sind bereits fertig vorgegeben.

## ueber-mich.html
- (kein TODO-Marker) Bootstrap-Einbindung ergänzt: CDN-Link zu Bootstrap
  5.3.3 CSS im `<head>`, Bootstrap-JS-Bundle vor `</body>` sowie ein neuer
  Navigationslink "Technik-Spielwiese" – Grundlage für die Verwendung von
  Bootstrap-Klassen in den folgenden Chapter-07-Übungen.

## projekte.html
- (kein TODO-Marker) Gleiche Bootstrap-Einbindung wie bei ueber-mich.html
  (CDN-Link, JS-Bundle, neuer Nav-Link "Technik-Spielwiese").

## rechtliches/impressum.html
- (kein TODO-Marker) Bootstrap-CDN-Link und JS-Bundle ergänzt (kein
  Navigationsmenü auf dieser Seite, daher kein neuer Nav-Link).

## css/style.css
- (kein TODO-Marker) Neue Regeln `.technik-tests` (Rahmen/Hintergrund für
  Testboxen auf `technik-spielwiese.php`) sowie `.beispiel-container` /
  `.beispiel-fluid` (Hintergrundfarben zur Veranschaulichung von
  `container` vs. `container-fluid`, für TODO 3/4) ergänzt.

## css/index.css
- (kein TODO-Marker) Neue Datei mit Beispielstil `.staerke-box` (Kästchen
  für die Grid-Spalten im Abschnitt "Meine Stärken") für die Startseite.
