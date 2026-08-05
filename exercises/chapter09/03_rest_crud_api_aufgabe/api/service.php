<?php
/*
    ÜBUNG 3: REST CRUD-SCHNITTSTELLE (Kapitel 9.2 - Beispiel Bestellungsverwaltung)

    Aufgabenstellung:
    Diese Übung erweitert Übung 2 um die restlichen REST-Operationen
    (Create, Update, Delete). Damit Änderungen über mehrere Anfragen
    hinweg erhalten bleiben (es gibt keine Datenbank), werden die Projekte
    in der PHP-Session gespeichert ($_SESSION['projekte']).

    Die Operationen "GET /projekte" und "GET /projekt/{id}" sind bereits aus
    Übung 2 übernommen und vollständig implementiert.

    TODO 1: Implementieren Sie "POST /projekt": Lesen Sie den JSON-Body der
            Anfrage (file_get_contents('php://input') + json_decode),
            vergeben Sie eine neue, fortlaufende id, hängen Sie das neue
            Projekt an $_SESSION['projekte'] an und antworten Sie mit
            Status 200 sowie dem neu angelegten Projekt als JSON.
    TODO 2: Implementieren Sie "PUT /projekt/{id}": Suchen Sie das Projekt
            mit passender id, aktualisieren Sie titel, technologie, jahr
            und link aus dem JSON-Body und antworten Sie mit Status 200
            und dem aktualisierten Projekt als JSON. Existiert die id
            nicht, antworten Sie mit Status 404.
    TODO 3: Implementieren Sie "DELETE /projekt/{id}": Entfernen Sie das
            Projekt mit passender id aus $_SESSION['projekte'] und
            antworten Sie mit Status 200 und leerem Body. Existiert die id
            nicht, antworten Sie mit Status 404.
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

// Beim ersten Aufruf Session mit denselben Beispieldaten wie in Übung 2 befüllen
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
    http_response_code(200);
    echo json_encode($_SESSION['projekte']);

} elseif ($methode === 'GET' && preg_match('#^/projekt/([0-9]+)$#', $pfad, $treffer)) {
    $id = (int) $treffer[1];
    $gefundenesProjekt = null;

    foreach ($_SESSION['projekte'] as $projekt) {
        if ($projekt['id'] === $id) {
            $gefundenesProjekt = $projekt;
            break;
        }
    }

    if ($gefundenesProjekt !== null) {
        http_response_code(200);
        echo json_encode($gefundenesProjekt);
    } else {
        http_response_code(404);
    }

} elseif ($methode === 'POST' && $pfad === '/projekt') {

    // TODO 1: Neues Projekt aus dem JSON-Body anlegen und mit Status 200
    //         zurückgeben

} elseif ($methode === 'PUT' && preg_match('#^/projekt/([0-9]+)$#', $pfad, $treffer)) {
    $id = (int) $treffer[1];

    // TODO 2: Projekt mit passender id aktualisieren (Status 200) bzw.
    //         Status 404, falls die id nicht existiert

} elseif ($methode === 'DELETE' && preg_match('#^/projekt/([0-9]+)$#', $pfad, $treffer)) {
    $id = (int) $treffer[1];

    // TODO 3: Projekt mit passender id löschen (Status 200) bzw.
    //         Status 404, falls die id nicht existiert

} else {
    http_response_code(404);
}
