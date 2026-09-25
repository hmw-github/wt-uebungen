<?php
/*
    LÖSUNGSVORSCHLAG - ÜBUNG 2: REST-SCHNITTSTELLE
*/

session_start();
header('Content-Type: application/json');

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

// Beim ersten Aufruf Session mit den Beispieldaten befüllen
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
    $eingabe = json_decode(file_get_contents('php://input'), true);

    // Neue id ermitteln (höchste bisherige id + 1)
    $neueId = 1;
    foreach ($_SESSION['projekte'] as $projekt) {
        if ($projekt['id'] >= $neueId) {
            $neueId = $projekt['id'] + 1;
        }
    }

    $neuesProjekt = [
        'id' => $neueId,
        'titel' => isset($eingabe['titel']) ? $eingabe['titel'] : '',
        'technologie' => isset($eingabe['technologie']) ? $eingabe['technologie'] : '',
        'jahr' => isset($eingabe['jahr']) ? (int) $eingabe['jahr'] : null,
        'link' => isset($eingabe['link']) ? $eingabe['link'] : '',
    ];

    $_SESSION['projekte'][] = $neuesProjekt;

    http_response_code(200);
    echo json_encode($neuesProjekt);

} elseif ($methode === 'PUT' && preg_match('#^/projekt/([0-9]+)$#', $pfad, $treffer)) {
    $id = (int) $treffer[1];
    $eingabe = json_decode(file_get_contents('php://input'), true);
    $aktualisiertesProjekt = null;

    foreach ($_SESSION['projekte'] as $index => $projekt) {
        if ($projekt['id'] === $id) {
            if (isset($eingabe['titel'])) {
                $_SESSION['projekte'][$index]['titel'] = $eingabe['titel'];
            }
            if (isset($eingabe['technologie'])) {
                $_SESSION['projekte'][$index]['technologie'] = $eingabe['technologie'];
            }
            if (isset($eingabe['jahr'])) {
                $_SESSION['projekte'][$index]['jahr'] = (int) $eingabe['jahr'];
            }
            if (isset($eingabe['link'])) {
                $_SESSION['projekte'][$index]['link'] = $eingabe['link'];
            }
            $aktualisiertesProjekt = $_SESSION['projekte'][$index];
            break;
        }
    }

    if ($aktualisiertesProjekt !== null) {
        http_response_code(200);
        echo json_encode($aktualisiertesProjekt);
    } else {
        http_response_code(404);
    }

} elseif ($methode === 'DELETE' && preg_match('#^/projekt/([0-9]+)$#', $pfad, $treffer)) {
    $id = (int) $treffer[1];
    $gefunden = false;

    foreach ($_SESSION['projekte'] as $index => $projekt) {
        if ($projekt['id'] === $id) {
            array_splice($_SESSION['projekte'], $index, 1);
            $gefunden = true;
            break;
        }
    }

    http_response_code($gefunden ? 200 : 404);

} else {
    http_response_code(404);
}
