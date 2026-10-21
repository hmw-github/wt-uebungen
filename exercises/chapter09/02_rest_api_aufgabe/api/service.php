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

    TODO 1: "GET /projekte" liefert mit Status 200 alle aktuell gespeicherten
            Projekte als JSON-Array.
    TODO 2: "GET /projekt/{id}" liefert mit Status 200 genau das Projekt mit
            dieser id als JSON-Objekt. Gibt es keins, lautet die Antwort
            Status 404 mit leerem Body.

    Schreibende Operationen:

    TODO 3: "POST /projekt" legt aus den im Body als JSON gesendeten Daten
            (titel, technologie, jahr, link) ein neues Projekt an. Es erhält
            eine neue id, die größer ist als alle bisherigen. Die Antwort
            (Status 200) ist das neue Projekt inklusive id. Ein anschließendes
            "GET /projekte" enthält es.
    TODO 4: "PUT /projekt/{id}" überschreibt titel, technologie, jahr und link
            des Projekts mit dieser id mit den im Body gesendeten Werten. Die
            id bleibt gleich. Antwort: Status 200 mit dem aktualisierten
            Projekt als JSON, bzw. Status 404, falls die id nicht existiert.
    TODO 5: "DELETE /projekt/{id}" entfernt das Projekt mit dieser id.
            Antwort: Status 200 mit leerem Body, bzw. Status 404, falls die id
            nicht existiert. Ein anschließendes "GET /projekte" enthält es
            nicht mehr.

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

    // TODO 1: alle Projekte liefern (Status 200)

} elseif ($methode === 'GET' && preg_match('#^/projekt/([0-9]+)$#', $pfad, $treffer)) {
    $id = (int) $treffer[1];

    // TODO 2: Projekt mit dieser id liefern (200) bzw. 404

} elseif ($methode === 'POST' && $pfad === '/projekt') {

    // TODO 3: neues Projekt mit neuer id anlegen und zurückliefern (200)

} elseif ($methode === 'PUT' && preg_match('#^/projekt/([0-9]+)$#', $pfad, $treffer)) {
    $id = (int) $treffer[1];

    // TODO 4: Projekt mit dieser id aktualisieren und zurückliefern (200)
    //         bzw. 404

} elseif ($methode === 'DELETE' && preg_match('#^/projekt/([0-9]+)$#', $pfad, $treffer)) {
    $id = (int) $treffer[1];

    // TODO 5: Projekt mit dieser id löschen (200, leerer Body) bzw. 404

} else {
    http_response_code(404);
}
