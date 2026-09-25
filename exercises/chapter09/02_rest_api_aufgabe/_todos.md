# TODOs – 02_rest_api_aufgabe

In api/tests.http sind Testaufrufe vorbereitet, mit denen die Implementierung getestet werden kann.

## api/service.php
Das URL-Rewriting (jede Anfrage unterhalb von api/ landet bei service.php,
der ursprüngliche Pfad steht in $_REQUEST['_url']) ist bereits vollständig
über die nginx.conf des Docker-Setups eingerichtet und kein Teil dieser
Übung (siehe Kopfkommentar der Datei sowie den Abschnitt "Wie die
Umleitung mit nginx funktioniert" im README). Ebenfalls fertig vorgegeben
sind die Datenhaltung in der PHP-Session (`$_SESSION['projekte']`,
beim ersten Aufruf mit den Beispieldaten befüllt), die CORS-Header samt
Behandlung der OPTIONS-Preflight-Anfrage sowie die Zuordnung von Methode
und Pfad zur passenden Operation.

*Lesende Operationen (GET)*

1. TODO 1: Operation "GET /projekte" implementieren: Alle Projekte aus `$_SESSION['projekte']` als JSON ausgeben und den HTTP-Status auf 200 setzen.
2. TODO 2: Operation "GET /projekt/{id}" implementieren: Das Projekt mit passender id suchen. Wird es gefunden, als JSON mit Status 200 ausgeben, andernfalls mit Status 404 und leerem Body antworten.

*Schreibende Operationen (POST, PUT, DELETE)*

3. TODO 3: "POST /projekt" implementieren: Den JSON-Body der Anfrage lesen (file_get_contents('php://input') + json_decode), eine neue, fortlaufende id vergeben, das neue Projekt an $_SESSION['projekte'] anhängen und mit Status 200 sowie dem neu angelegten Projekt als JSON antworten.
4. TODO 4: "PUT /projekt/{id}" implementieren: Das Projekt mit passender id suchen, titel, technologie, jahr und link aus dem JSON-Body aktualisieren und mit Status 200 und dem aktualisierten Projekt als JSON antworten. Existiert die id nicht, mit Status 404 antworten.
5. TODO 5: "DELETE /projekt/{id}" implementieren: Das Projekt mit passender id aus $_SESSION['projekte'] entfernen und mit Status 200 und leerem Body antworten. Existiert die id nicht, mit Status 404 antworten.

## Übrige Dateien
Die Website-Dateien (index.php, projekte.html, kontakt.php, ...) enthalten keine TODOs und entsprechen dem Stand aus Kapitel 8. Die Projekte-Seite nutzt die Schnittstelle noch nicht - das ist Gegenstand von Übung 3.
