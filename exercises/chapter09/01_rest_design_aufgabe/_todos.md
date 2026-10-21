# TODOs – 01_rest_design_aufgabe

## routen.php
Wählen Sie für jede Route HTTP-Methode und Pfad nach den REST-Grundprinzipien aus 9.1. Die vorgegebenen Testfälle zeigen, welche Kombinationen am Ende funktionieren müssen.

1. TODO 1: Ein Client kann die Liste aller Projekte abrufen. Aktion: "projekte_liste".
2. TODO 2: Ein Client kann ein einzelnes Projekt anhand seiner id abrufen. Aktion: "projekt_lesen".
3. TODO 3: Ein Client kann ein neues Projekt anlegen. Die id vergibt der Server. Aktion: "projekt_anlegen".
4. TODO 4: Ein Client kann ein bestehendes Projekt anhand seiner id ändern. Aktion: "projekt_aktualisieren".
5. TODO 5: Ein Client kann ein Projekt anhand seiner id löschen. Aktion: "projekt_loeschen".
6. TODO 6: Das Skript gibt für jeden Testfall die passende Aktion aus, z.B. `PUT /projekt/2 -> projekt_aktualisieren`. Ein Platzhalter `{id}` in einem Routenpfad passt auf jede Zahl (`/projekt/3`, `/projekt/42`), aber nicht auf beliebigen Text: `GET /projekt/abc` ergibt `nicht gefunden`, ebenso jede Methode/Pfad-Kombination, für die keine Route existiert (z.B. `DELETE /projekte`). Ergänzen Sie solche Testfälle zur Kontrolle gern selbst.
