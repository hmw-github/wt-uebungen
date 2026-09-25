<?php
/*
    ÜBUNG 2: REST-SCHNITTSTELLE (Kapitel 9.2 - Beispiel Bestellungsverwaltung)

    Aufgabenstellung:
    Diese Datei implementiert einen (noch unvollständigen) REST-Service für
    die Ressource "Projekt" Ihrer Portfolio-Website mit allen
    CRUD-Operationen. Damit Änderungen über mehrere Anfragen hinweg
    erhalten bleiben (es gibt keine Datenbank), werden die Projekte in der
    PHP-Session gespeichert ($_SESSION['projekte']). In Übung 3 wird
    "projekte.html" der eigentlichen Website diese Schnittstelle per
    fetch() konsumieren.

    Damit "schöne" REST-URLs wie /api/projekt/2 überhaupt bei dieser Datei
    ankommen (es gibt ja keine solche Datei), braucht es serverseitiges
    URL-Rewriting. Mit dem hier verwendeten nginx-Webserver geschieht das
    zentral in der nginx.conf (siehe dort sowie den Abschnitt "Wie die
    Umleitung mit nginx funktioniert" im README): Jede Anfrage unterhalb
    von api/ wird intern an service.php weitergereicht, wobei der
    ursprüngliche Pfad als Query-Parameter "_url" übergeben wird. Diese
    Weiterleitung, die Datenhaltung in der Session sowie die CORS-Header
    sind bereits vollständig eingerichtet und kein Teil dieser Übung.

    Lesende Operationen:

    TODO 1: Implementieren Sie "GET /projekte": Geben Sie alle Projekte aus
            $_SESSION['projekte'] als JSON aus und setzen Sie den
            HTTP-Status auf 200.
    TODO 2: Implementieren Sie "GET /projekt/{id}": Suchen Sie das Projekt
            mit passender id. Wird es gefunden, geben Sie es als JSON mit
            Status 200 aus, andernfalls antworten Sie mit Status 404 und
            leerem Body.

    Schreibende Operationen:

    TODO 3: Implementieren Sie "POST /projekt": Lesen Sie den JSON-Body der
            Anfrage (file_get_contents('php://input') + json_decode),
            vergeben Sie eine neue, fortlaufende id, hängen Sie das neue
            Projekt an $_SESSION['projekte'] an und antworten Sie mit
            Status 200 sowie dem neu angelegten Projekt als JSON.
    TODO 4: Implementieren Sie "PUT /projekt/{id}": Suchen Sie das Projekt
            mit passender id, aktualisieren Sie titel, technologie, jahr
            und link aus dem JSON-Body und antworten Sie mit Status 200
            und dem aktualisierten Projekt als JSON. Existiert die id
            nicht, antworten Sie mit Status 404.
    TODO 5: Implementieren Sie "DELETE /projekt/{id}": Entfernen Sie das
            Projekt mit passender id aus $_SESSION['projekte'] und
            antworten Sie mit Status 200 und leerem Body. Existiert die id
            nicht, antworten Sie mit Status 404.

    Hinweis: Der von nginx weitergeleitete Pfad steht in $_REQUEST['_url']
    (z.B. "/projekt/2"). Die Zuordnung von Methode und Pfad zur passenden
    Operation (inkl. preg_match für die id) ist unten bereits vorgegeben.
*/

session_start();
header('Content-Type: application/json');

// CORS: erlaubt den Zugriff aus einem anderen Origin (siehe Kapitel 9.2 im
// Skript zu CORS), falls die Schnittstelle einmal separat betrieben wird.
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

// Beim ersten Aufruf Session mit den Beispieldaten befüllen - dieselben drei
// Projekte, die bereits auf der Projekte-Seite der Website vorkommen
if (!isset($_SESSION['projekte'])) {
    $_SESSION['projekte'] = [
        ['id' => 1, 'titel' => 'Wetter-App', 'technologie' => 'JavaScript, Fetch API', 'jahr' => 2024, 'link' => 'https://github.com/alexberger/wetter-app'],
        ['id' => 2, 'titel' => 'Rezeptsammlung', 'technologie' => 'PHP, MySQL', 'jahr' => 2025, 'link' => 'https://github.com/alexberger/rezeptsammlung'],
        ['id' => 3, 'titel' => 'Portfolio-Website', 'technologie' => 'HTML, CSS, JavaScript, PHP, REST', 'jahr' => 2026, 'link' => 'https://github.com/alexberger/portfolio'],
    ];
}

$methode = $_SERVER['REQUEST_METHOD'];
$pfad = isset($_REQUEST['_url']) ? $_REQUEST['_url'] : '/';
$pfad = '/' . ltrim($pfad, '/'); // nginx liefert den Pfad ohne führenden Schrägstrich

if ($methode === 'GET' && $pfad === '/projekte') {

    // TODO 1: Alle Projekte als JSON zurückgeben (Status 200)

} elseif ($methode === 'GET' && preg_match('#^/projekt/([0-9]+)$#', $pfad, $treffer)) {
    $id = (int) $treffer[1];

    // TODO 2: Projekt mit passender id suchen und als JSON zurückgeben
    //         (Status 200) bzw. mit Status 404 antworten, falls nicht gefunden

} elseif ($methode === 'POST' && $pfad === '/projekt') {

    // TODO 3: Neues Projekt aus dem JSON-Body anlegen und mit Status 200
    //         zurückgeben

} elseif ($methode === 'PUT' && preg_match('#^/projekt/([0-9]+)$#', $pfad, $treffer)) {
    $id = (int) $treffer[1];

    // TODO 4: Projekt mit passender id aktualisieren (Status 200) bzw.
    //         Status 404, falls die id nicht existiert

} elseif ($methode === 'DELETE' && preg_match('#^/projekt/([0-9]+)$#', $pfad, $treffer)) {
    $id = (int) $treffer[1];

    // TODO 5: Projekt mit passender id löschen (Status 200) bzw.
    //         Status 404, falls die id nicht existiert

} else {
    http_response_code(404);
}
