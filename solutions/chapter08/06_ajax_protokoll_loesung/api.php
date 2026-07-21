<?php
/*
    LOESUNGSVORSCHLAG - UEBUNG 6: PROTOKOLL MIT AJAX - SERVERTEIL
*/

session_start();

if (!isset($_SESSION['eintraege'])) {
    $_SESSION['eintraege'] = [];
}

$daten = json_decode(file_get_contents("php://input"), true);
$action = $daten['action'] ?? '';

if ($action === 'save') {
    $message = trim($daten['message'] ?? '');
    if ($message !== '') {
        $_SESSION['eintraege'][] = date("H:i:s d.m.Y") . " - " . $message;
    }
}

header("Content-Type: application/json");
echo json_encode(["entries" => $_SESSION['eintraege']]);
