# TODOs – 02_rest_get_api_aufgabe

## api/.htaccess
1. TODO 1: Rewriting aktivieren, damit jede Anfrage an service.php weitergeleitet wird und der ursprüngliche Pfad über den Query-Parameter "_url" erhalten bleibt (RewriteEngine On, RewriteCond %{REQUEST_FILENAME} !-f, RewriteRule ^(.*)$ service.php?_url=$1 [QSA,L]).

## api/service.php
1. TODO 1: In der Datei .htaccess in diesem Verzeichnis das Rewriting ergänzen, damit jede Anfrage an service.php weitergeleitet wird (der ursprüngliche Pfad soll dabei über den Query-Parameter "_url" erhalten bleiben).
2. TODO 2: Operation "GET /projekte" implementieren: Das gesamte Projekt-Array als JSON ausgeben und den HTTP-Status auf 200 setzen.
3. TODO 3: Operation "GET /projekt/{id}" implementieren: Das Projekt mit passender id im Array suchen. Wird es gefunden, als JSON mit Status 200 ausgeben, andernfalls mit Status 404 und leerem Body antworten.
