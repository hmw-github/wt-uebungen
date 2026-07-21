<?php
/*
    LOESUNGSVORSCHLAG - UEBUNG 3: REST CRUD-SCHNITTSTELLE
*/

session_start();
header('Content-Type: application/json');

// CORS: der Client aus Uebung 4 laeuft im eigenen Docker-Setup (exercises/
// chapter09, Port 8009) und spricht diese Schnittstelle hier (solutions/
// chapter09, Port 8019) somit von einem anderen Origin aus an. Ohne diese
// Header wuerde der Browser die Antwort blockieren (siehe Kapitel 9.2 im
// Skript zu CORS-Preflight-Anfragen).
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

// Beim ersten Aufruf Session mit denselben Beispieldaten wie in Uebung 2 befuellen
if (!isset($_SESSION['buecher'])) {
    $_SESSION['buecher'] = [
        ['id' => 1, 'titel' => 'Der Prozess', 'autor' => 'Franz Kafka'],
        ['id' => 2, 'titel' => 'Faust', 'autor' => 'Johann Wolfgang von Goethe'],
        ['id' => 3, 'titel' => 'Die Verwandlung', 'autor' => 'Franz Kafka'],
        ['id' => 4, 'titel' => 'Effi Briest', 'autor' => 'Theodor Fontane'],
    ];
}

$methode = $_SERVER['REQUEST_METHOD'];
$pfad = isset($_REQUEST['_url']) ? $_REQUEST['_url'] : '/';
$pfad = '/' . ltrim($pfad, '/'); // .htaccess liefert den Pfad ohne fuehrenden Schraegstrich

if ($methode === 'GET' && $pfad === '/buecher') {
    http_response_code(200);
    echo json_encode($_SESSION['buecher']);

} elseif ($methode === 'GET' && preg_match('#^/buch/([0-9]+)$#', $pfad, $treffer)) {
    $id = (int) $treffer[1];
    $gefundenesBuch = null;

    foreach ($_SESSION['buecher'] as $buch) {
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

} elseif ($methode === 'POST' && $pfad === '/buch') {
    $eingabe = json_decode(file_get_contents('php://input'), true);

    // Neue id ermitteln (hoechste bisherige id + 1)
    $neueId = 1;
    foreach ($_SESSION['buecher'] as $buch) {
        if ($buch['id'] >= $neueId) {
            $neueId = $buch['id'] + 1;
        }
    }

    $neuesBuch = [
        'id' => $neueId,
        'titel' => isset($eingabe['titel']) ? $eingabe['titel'] : '',
        'autor' => isset($eingabe['autor']) ? $eingabe['autor'] : '',
    ];

    $_SESSION['buecher'][] = $neuesBuch;

    http_response_code(200);
    echo json_encode($neuesBuch);

} elseif ($methode === 'PUT' && preg_match('#^/buch/([0-9]+)$#', $pfad, $treffer)) {
    $id = (int) $treffer[1];
    $eingabe = json_decode(file_get_contents('php://input'), true);
    $aktualisiertesBuch = null;

    foreach ($_SESSION['buecher'] as $index => $buch) {
        if ($buch['id'] === $id) {
            if (isset($eingabe['titel'])) {
                $_SESSION['buecher'][$index]['titel'] = $eingabe['titel'];
            }
            if (isset($eingabe['autor'])) {
                $_SESSION['buecher'][$index]['autor'] = $eingabe['autor'];
            }
            $aktualisiertesBuch = $_SESSION['buecher'][$index];
            break;
        }
    }

    if ($aktualisiertesBuch !== null) {
        http_response_code(200);
        echo json_encode($aktualisiertesBuch);
    } else {
        http_response_code(404);
    }

} elseif ($methode === 'DELETE' && preg_match('#^/buch/([0-9]+)$#', $pfad, $treffer)) {
    $id = (int) $treffer[1];
    $gefunden = false;

    foreach ($_SESSION['buecher'] as $index => $buch) {
        if ($buch['id'] === $id) {
            array_splice($_SESSION['buecher'], $index, 1);
            $gefunden = true;
            break;
        }
    }

    http_response_code($gefunden ? 200 : 404);

} else {
    http_response_code(404);
}
