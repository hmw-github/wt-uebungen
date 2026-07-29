# TODOs – 04_rest_client_aufgabe

## projekte.html
1. TODO 1: ladeProjekte() implementieren: Per fetch() alle Projekte laden (GET "api/projekte"), #projekteListe leeren und für jedes Projekt per erzeugeKarte(projekt) eine Karte einfügen. Die geladenen Projekte zusätzlich in der Variable projekteCache speichern (wird von projektBearbeiten() benötigt).
2. TODO 2: speichern() implementieren: Titel, Technologie, Jahr und Link aus den Modal-Eingabefeldern lesen. Ist aktuelleProjektId null, per fetch() eine POST-Anfrage (API_URL + "/projekt") mit den Daten als JSON-Body senden (neues Projekt anlegen). Andernfalls eine PUT-Anfrage (API_URL + "/projekt/" + aktuelleProjektId) mit denselben Daten senden (bestehendes Projekt aktualisieren). In beiden Fällen anschließend die Liste neu laden (ladeProjekte()) und das Modal schließen (schließen()).
3. TODO 3: projektLoeschen(id) implementieren: Per fetch() eine DELETE-Anfrage (API_URL + "/projekt/" + id) senden und anschließend die Liste neu laden (ladeProjekte()).
- (kein TODO-Marker) erzeugeKarte(projekt): Fertig vorgegebene Hilfsfunktion, die aus einem Projekt-Objekt eine Bootstrap-Card erzeugt (inkl. Bearbeiten-/Löschen-Buttons) - dient als Grundlage für die TODO-Funktionen, muss nicht implementiert werden.

## api/service.php
- (kein TODO-Marker) Bereits vollständige Lösung aus Übung 3: Die Datei trägt im Kopfkommentar "LÖSUNGSVORSCHLAG - ÜBUNG 3" und enthält POST/PUT/DELETE bereits fertig implementiert (inkl. Vergabe einer neuen id, Aktualisierung einzelner Felder, Löschen per array_splice sowie Status 200/404). Für Übung 4 liegt der Fokus ausschließlich auf dem JavaScript-Client in projekte.html; die Schnittstelle selbst muss nicht mehr bearbeitet werden.

## api/.htaccess
- (kein TODO-Marker) Unverändert gegenüber der fertigen Fassung aus Übung 3 (Rewriting bereits aktiv) - keine Bearbeitung nötig.
