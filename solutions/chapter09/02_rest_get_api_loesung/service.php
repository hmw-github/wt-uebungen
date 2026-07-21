<?php
/*
    LOESUNGSVORSCHLAG - UEBUNG 2: REST GET-SCHNITTSTELLE
*/

header('Content-Type: application/json');

// CORS: erlaubt den Zugriff aus einem anderen Docker-Container/Origin
// (siehe Kapitel 9.2 im Skript zu CORS).
header('Access-Control-Allow-Origin: *');

// Feste Beispieldaten (keine Datenbank noetig)
$buecher = [
    ['id' => 1, 'titel' => 'Der Prozess', 'autor' => 'Franz Kafka'],
    ['id' => 2, 'titel' => 'Faust', 'autor' => 'Johann Wolfgang von Goethe'],
    ['id' => 3, 'titel' => 'Die Verwandlung', 'autor' => 'Franz Kafka'],
    ['id' => 4, 'titel' => 'Effi Briest', 'autor' => 'Theodor Fontane'],
];

$methode = $_SERVER['REQUEST_METHOD'];
$pfad = isset($_REQUEST['_url']) ? $_REQUEST['_url'] : '/';
$pfad = '/' . ltrim($pfad, '/'); // .htaccess liefert den Pfad ohne fuehrenden Schraegstrich

if ($methode === 'GET' && $pfad === '/buecher') {
    http_response_code(200);
    echo json_encode($buecher);

} elseif ($methode === 'GET' && preg_match('#^/buch/([0-9]+)$#', $pfad, $treffer)) {
    $id = (int) $treffer[1];
    $gefundenesBuch = null;

    foreach ($buecher as $buch) {
        if ($buch['id'] === $id) {
            $gefundenesBuch = $buch;
            break;
        }
    }

    if ($gefundenesBuch !== null) {
        http_response_code(200);
        echo json_encode($gefundenesBuch);
    } else {
        http_response_code(404);
    }

} else {
    http_response_code(404);
}
