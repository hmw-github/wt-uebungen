<?php
/*
    ÜBUNG 2: REST GET-SCHNITTSTELLE (Kapitel 9.2 - Beispiel Bestellungsverwaltung)

    Aufgabenstellung:
    Diese Datei implementiert einen (noch unvollständigen) REST-Service für
    die Ressource "Projekt" Ihrer Portfolio-Website. Die Projekte werden der
    Einfachheit halber in einem festen PHP-Array gehalten (keine Datenbank).
    In Übung 4 wird "projekte.html" der eigentlichen Website diese
    Schnittstelle tatsächlich per fetch() konsumieren.

    TODO 1: Ergänzen Sie in der Datei .htaccess in diesem Verzeichnis das
            Rewriting, damit jede Anfrage an service.php weitergeleitet wird
            (der ursprüngliche Pfad soll dabei über den Query-Parameter
            "_url" erhalten bleiben).
    TODO 2: Implementieren Sie die Operation "GET /projekte": Geben Sie das
            gesamte Projekt-Array als JSON aus und setzen Sie den HTTP-Status
            auf 200.
    TODO 3: Implementieren Sie die Operation "GET /projekt/{id}": Suchen Sie
            das Projekt mit passender id im Array. Wird es gefunden, geben
            Sie es als JSON mit Status 200 aus, andernfalls antworten Sie
            mit Status 404 und leerem Body.

    Hinweis: Der von .htaccess weitergeleitete Pfad steht in
    $_REQUEST['_url'] (z.B. "/projekt/2"). Nutzen Sie preg_match, um die id
    aus dem Pfad zu extrahieren.
*/

header('Content-Type: application/json');

// Feste Beispieldaten (keine Datenbank nötig) - dieselben drei Projekte,
// die bereits auf der Projekte-Seite der Website vorkommen.
$projekte = [
    ['id' => 1, 'titel' => 'Wetter-App', 'technologie' => 'JavaScript, Fetch API', 'jahr' => 2024, 'link' => 'https://github.com/alexberger/wetter-app'],
    ['id' => 2, 'titel' => 'Rezeptsammlung', 'technologie' => 'PHP, MySQL', 'jahr' => 2025, 'link' => 'https://github.com/alexberger/rezeptsammlung'],
    ['id' => 3, 'titel' => 'Portfolio-Website', 'technologie' => 'HTML, CSS, JavaScript, PHP, REST', 'jahr' => 2026, 'link' => 'https://github.com/alexberger/portfolio'],
];

$methode = $_SERVER['REQUEST_METHOD'];
$pfad = isset($_REQUEST['_url']) ? $_REQUEST['_url'] : '/';
$pfad = '/' . ltrim($pfad, '/'); // .htaccess liefert den Pfad ohne führenden Schrägstrich

if ($methode === 'GET' && $pfad === '/projekte') {

    // TODO 2: Alle Projekte als JSON zurückgeben (Status 200)

} elseif ($methode === 'GET' && preg_match('#^/projekt/([0-9]+)$#', $pfad, $treffer)) {
    $id = (int) $treffer[1];

    // TODO 3: Projekt mit passender id suchen und als JSON zurückgeben
    //         (Status 200) bzw. mit Status 404 antworten, falls nicht gefunden

} else {
    http_response_code(404);
}
