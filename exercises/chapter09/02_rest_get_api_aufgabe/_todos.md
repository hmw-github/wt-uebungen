# TODOs – 02_rest_get_api_aufgabe

## api/service.php
Das URL-Rewriting (jede Anfrage unterhalb von api/ landet bei service.php,
der ursprüngliche Pfad steht in $_REQUEST['_url']) ist bereits vollständig
über die nginx.conf des Docker-Setups eingerichtet und kein Teil dieser
Übung (siehe Kopfkommentar der Datei sowie den Abschnitt "Wie die
Umleitung mit nginx funktioniert" im README).

In api/tests.http sind Testaufrufe vorbereitet, mit denen die Implementierung getestet werden kann.

1. TODO 1: Operation "GET /projekte" implementieren: Das gesamte Projekt-Array als JSON ausgeben und den HTTP-Status auf 200 setzen.
2. TODO 2: Operation "GET /projekt/{id}" implementieren: Das Projekt mit passender id im Array suchen. Wird es gefunden, als JSON mit Status 200 ausgeben, andernfalls mit Status 404 und leerem Body antworten.
