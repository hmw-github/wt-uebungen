# TODOs – Modal

## projekte.html
1. TODO 1: Auf der Seite gibt es ein Bootstrap-Dialogfenster (Modal),
   das zunächst unsichtbar ist. Es hat die Überschrift "Projekt
   bearbeiten" und oben rechts ein Schließen-Kreuz, das den Dialog
   schließt. Im Inhaltsbereich steht ein Formular mit den beschrifteten
   Feldern Titel, Technologie und Jahr (nur Zahlen erlaubt), alle im
   Bootstrap-Stil. Unten stehen die Buttons "Abbrechen" (grau) und
   "Speichern" (Primärfarbe), die `schließen()` bzw. `speichern()`
   aufrufen.
2. TODO 2: Ein Klick auf "Bearbeiten" bei einer Karte ruft
   `projektBearbeiten(cardId)` auf und öffnet den Dialog. Die drei Felder
   sind mit den aktuell auf genau dieser Karte angezeigten Werten
   vorausgefüllt, auch wenn die Karte zuvor schon bearbeitet wurde.
   Danach ist klar, welche Karte gerade bearbeitet wird.
3. TODO 3: `schließen()` blendet den Dialog wieder aus. Änderungen in den
   Feldern werden verworfen, die Karte bleibt unverändert.
4. TODO 4: `speichern()` übernimmt die Werte aus dem Dialog in die gerade
   bearbeitete Karte (Titel, Technologie, Jahr) und schließt den Dialog.
   Andere Karten bleiben unverändert. Auch der vorhandene Button
   "Projekte aus 2026 hervorheben" berücksichtigt danach das geänderte
   Jahr: Eine Karte, deren Jahr auf 2026 geändert wurde, wird
   hervorgehoben, eine von 2026 auf ein anderes Jahr geänderte nicht mehr.

(ueber-mich.html und rechtliches/impressum.html unterscheiden sich nur
durch den aktualisierten Kopfkommentar-Titel bzw. sind unverändert;
css/* und js/* sind unverändert – daher hier nicht aufgeführt.)
