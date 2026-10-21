# TODOs – 03_rest_client_aufgabe

## projekte.html
Alle drei Funktionen sprechen mit der REST-Schnittstelle aus Übung 2 (Basis-URL in `API_URL`). Fehler werden jeweils in der Konsole gemeldet (der try/catch-Rahmen ist vorgegeben).

1. TODO 1: Nach `ladeProjekte()` zeigt die Projektliste (`#projekteListe`) für jedes Projekt, das die Schnittstelle aktuell kennt, genau eine Karte (Darstellung über die vorgegebene Funktion `erzeugeKarte(projekt)`). Mehrfaches Laden erzeugt keine doppelten Karten. Die geladenen Projekte stehen anschließend in der Variablen `projekteCache` bereit (wird vom vorgegebenen `projektBearbeiten()` benötigt).
2. TODO 2: Ein Klick auf "Speichern" im Dialog ruft `speichern()` auf. Titel, Technologie, Jahr und Link aus dem Dialog werden in die Schnittstelle übernommen:
    - wurde der Dialog über "Neues Projekt" geöffnet (`aktuelleProjektId` ist `null`), als neues Projekt,
    - wurde er über "Bearbeiten" geöffnet, als Änderung genau dieses Projekts.

    Danach schließt sich der Dialog, und die Liste zeigt den neuen Stand. Dieser bleibt auch nach einem Neuladen der Seite erhalten, da er jetzt auf dem Server liegt. Im Netzwerk-Reiter der Entwicklertools sind die passenden REST-Anfragen aus Übung 1 zu sehen.
3. TODO 3: Ein Klick auf "Löschen" bei einer Karte ruft `projektLoeschen(id)` auf. Das Projekt wird in der Schnittstelle gelöscht und verschwindet aus der Liste, auch nach einem Neuladen der Seite.
- (kein TODO-Marker) erzeugeKarte(projekt): Fertig vorgegebene Hilfsfunktion, die aus einem Projekt-Objekt eine Bootstrap-Card erzeugt (inkl. Bearbeiten-/Löschen-Buttons) - dient als Grundlage für die TODO-Funktionen, muss nicht implementiert werden.

## api/service.php
- (kein TODO-Marker) Bereits vollständige Lösung aus Übung 2: Die Datei trägt im Kopfkommentar "LÖSUNGSVORSCHLAG - ÜBUNG 2" und enthält POST/PUT/DELETE bereits fertig implementiert (inkl. Vergabe einer neuen id, Aktualisierung einzelner Felder, Löschen per array_splice sowie Status 200/404). Für Übung 3 liegt der Fokus ausschließlich auf dem JavaScript-Client in projekte.html; die Schnittstelle selbst muss nicht mehr bearbeitet werden. Das URL-Rewriting auf service.php ist weiterhin zentral über die nginx.conf des Docker-Setups eingerichtet (kein Teil dieser Übung, siehe README).
