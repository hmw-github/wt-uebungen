# TODOs – 03_rest_crud_api_aufgabe

## api/service.php
1. TODO 1: "POST /projekt" implementieren: Den JSON-Body der Anfrage lesen (file_get_contents('php://input') + json_decode), eine neue, fortlaufende id vergeben, das neue Projekt an $_SESSION['projekte'] anhängen und mit Status 200 sowie dem neu angelegten Projekt als JSON antworten.
2. TODO 2: "PUT /projekt/{id}" implementieren: Das Projekt mit passender id suchen, titel, technologie, jahr und link aus dem JSON-Body aktualisieren und mit Status 200 und dem aktualisierten Projekt als JSON antworten. Existiert die id nicht, mit Status 404 antworten.
3. TODO 3: "DELETE /projekt/{id}" implementieren: Das Projekt mit passender id aus $_SESSION['projekte'] entfernen und mit Status 200 und leerem Body antworten. Existiert die id nicht, mit Status 404 antworten.
- (kein TODO-Marker) GET-Operationen bereits fertig: "GET /projekte" und "GET /projekt/{id}" sind unverändert aus Übung 2 übernommen und bereits vollständig implementiert (dienen als Vorbild für die zu ergänzenden CRUD-Operationen). Neu und bereits fertig ist außerdem die Umstellung der Datenhaltung auf die PHP-Session ($_SESSION['projekte'] statt festem Array) inkl. Initialisierung mit den Beispieldaten, sowie die CORS-Header und die Behandlung der OPTIONS-Preflight-Anfrage.

## api/.htaccess
- (kein TODO-Marker) Bereits vollständig: Im Gegensatz zu Übung 2 ist das Rewriting hier schon fertig eingetragen (RewriteEngine On, RewriteCond %{REQUEST_FILENAME} !-f, RewriteRule ^(.*)$ service.php?_url=$1 [QSA,L]) – kein eigener TODO-Marker mehr vorhanden.
