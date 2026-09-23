## 9.2 REST-GET-API (`02_rest_get_api_aufgabe`)

1. Wie gelangen alle Anfragen unter `api/` zu `service.php` (URL-Rewriting)?
2. Wie ermittelt `service.php` Methode und Pfad (`$_SERVER['REQUEST_METHOD']`, `$_REQUEST['_url']`)?
3. Wie setzt man den HTTP-Statuscode in PHP (`http_response_code()`)?
4. Was bedeuten die Statuscodes 200, 201, 204, 400, 404 und 500?
5. Warum antwortet man bei einer unbekannten ID mit 404 und nicht mit 200 und leerem Body?
6. Wie sucht man in einem Array nach dem Projekt mit passender ID? Warum muss man beim Vergleich auf den Typ achten (String aus URL ↔ int im Array)?
7. Wie benutzt man die Datei `tests.http` zum Testen?

<details><summary>Erwartete Antworten</summary>

1. Die `nginx.conf` leitet alle Anfragen unter `api/` an `service.php` weiter und übergibt den ursprünglichen Pfad als Parameter `_url`.
2. Die Methode steht in `$_SERVER['REQUEST_METHOD']`, der Pfad in `$_REQUEST['_url']`.
3. `http_response_code(404);`
4. 200 OK, 201 Created, 204 No Content, 400 Bad Request, 404 Not Found, 500 Internal Server Error.
5. Der Client soll am Status erkennen, dass die Ressource nicht existiert, ohne den Body auszuwerten.
6. Mit `foreach` und Vergleich der `id`. Die ID aus der URL ist ein String, daher mit `(int)` umwandeln oder bewusst `==` verwenden.
7. Mit einer Erweiterung wie REST Client (VS Code) die Anfragen per Klick senden und die Antwort mit Status und Body ansehen (Alternativen: curl, Postman).
</details>
