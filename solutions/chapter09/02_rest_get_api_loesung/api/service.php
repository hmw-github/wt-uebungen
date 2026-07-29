<?php
/*
    LÖSUNGSVORSCHLAG - ÜBUNG 2: REST GET-SCHNITTSTELLE
*/

header('Content-Type: application/json');

// CORS: erlaubt den Zugriff aus einem anderen Origin (siehe Kapitel 9.2 im
// Skript zu CORS), falls die Schnittstelle einmal separat betrieben wird.
header('Access-Control-Allow-Origin: *');

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
    http_response_code(200);
    echo json_encode($projekte);

} elseif ($methode === 'GET' && preg_match('#^/projekt/([0-9]+)$#', $pfad, $treffer)) {
    $id = (int) $treffer[1];
    $gefundenesProjekt = null;

    foreach ($projekte as $projekt) {
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

} else {
    http_response_code(404);
}
