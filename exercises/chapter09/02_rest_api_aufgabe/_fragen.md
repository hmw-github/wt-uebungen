## 9.2 REST-Schnittstelle (`02_rest_api_aufgabe`)

### Lesende Operationen (GET)

1. Wie gelangen alle Anfragen unter `api/` zu `service.php` (URL-Rewriting)?
2. Wie ermittelt `service.php` Methode und Pfad (`$_SERVER['REQUEST_METHOD']`, `$_REQUEST['_url']`)?
3. Wie setzt man den HTTP-Statuscode in PHP (`http_response_code()`)?
4. Was bedeuten die Statuscodes 200, 201, 204, 400, 404 und 500?
5. Warum antwortet man bei einer unbekannten ID mit 404 und nicht mit 200 und leerem Body?
6. Wie sucht man in `$_SESSION['projekte']` nach dem Projekt mit passender ID? Warum muss man beim Vergleich auf den Typ achten (String aus URL ↔ int im Array)?
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

### Schreibende Operationen (POST, PUT, DELETE)

1. Wie liest man den JSON-Body einer POST- oder PUT-Anfrage in PHP?
2. Wie vergibt man eine neue fortlaufende ID? Warum ist `count($projekte) + 1` problematisch, wenn schon Projekte gelöscht wurden?
3. Warum antwortet POST mit dem neu angelegten Projekt? Welcher Statuscode wäre eigentlich passender?
4. Wie ändert man ein Element in einem Array innerhalb einer `foreach`-Schleife (Referenz `&` bzw. Zugriff über den Index)?
5. Wie entfernt man ein Element aus einem Array (`array_splice` vs. `unset`)? Was passiert mit den Indizes?
6. Warum werden die Projekte in `$_SESSION` gespeichert? Welche Nachteile hat das?
7. Was ist CORS, und wozu dient die OPTIONS-Anfrage (Preflight)?

<details><summary>Erwartete Antworten</summary>

1. `json_decode(file_get_contents('php://input'), true)`.
2. Höchste vorhandene ID + 1 (z.B. `max(array_column($projekte, 'id')) + 1`). Mit `count + 1` kann eine ID doppelt vergeben werden, wenn schon gelöscht wurde.
3. Der Client erfährt so die vom Server vergebene ID. Nach REST wäre 201 Created passender, die Übung verlangt 200.
4. `foreach ($arr as &$p)` oder `foreach ($arr as $i => $p) { $arr[$i][…] = …; }`. Ohne `&` ändert man nur eine Kopie.
5. `array_splice($arr, $i, 1)` entfernt und nummeriert neu. `unset` hinterlässt eine Lücke im Index, die `json_encode` in ein Objekt statt eines Arrays verwandelt.
6. Es geht ohne Datenbank. Daten gelten nur pro Browser/Client und gehen mit der Session verloren.
7. Cross-Origin Resource Sharing: Der Server erlaubt per Header Anfragen von fremden Origins. Bei „nicht einfachen“ Anfragen (PUT, DELETE, JSON-Body) fragt der Browser vorher per OPTIONS an, ob die Anfrage erlaubt ist.
</details>
