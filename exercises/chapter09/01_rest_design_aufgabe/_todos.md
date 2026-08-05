# TODOs – 01_rest_design_aufgabe

## routen.php
1. TODO 1: Route zum Auflisten aller Projekte ergänzen: Methode GET, Pfad "/projekte", Aktion "projekte_liste".
2. TODO 2: Route zum Lesen eines einzelnen Projekts ergänzen: Methode GET, Pfad "/projekt/{id}", Aktion "projekt_lesen".
3. TODO 3: Route zum Anlegen eines neuen Projekts ergänzen: Methode POST, Pfad "/projekt", Aktion "projekt_anlegen".
4. TODO 4: Route zum Aktualisieren eines Projekts ergänzen: Methode PUT, Pfad "/projekt/{id}", Aktion "projekt_aktualisieren".
5. TODO 5: Route zum Löschen eines Projekts ergänzen: Methode DELETE, Pfad "/projekt/{id}", Aktion "projekt_loeschen".
6. TODO 6: Zuordnungslogik in der Schleife vervollständigen: Für jeden Testfall die Liste $routen durchsuchen; eine Route passt, wenn die Methode übereinstimmt und entweder der Pfad exakt gleich ist oder das Pfad-Muster "{id}" enthält und der tatsächliche Pfad an dieser Stelle eine Zahl enthält (per preg_match, "{id}" durch "[0-9]+" ersetzen). Bei Treffer den Aktionsnamen in $gefunden speichern.
