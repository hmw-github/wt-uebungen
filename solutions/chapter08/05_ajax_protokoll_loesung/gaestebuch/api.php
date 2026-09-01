<?php
/*
    LÖSUNGSVORSCHLAG - ÜBUNG 5: PROTOKOLL MIT AJAX - SERVERTEIL
*/

spl_autoload_register(function ($class) {
    require_once $class . '.php';
});

session_start();

$gaestebuch = new Gaestebuch();

$daten = json_decode(file_get_contents("php://input"), true);
$action = $daten['action'] ?? '';

if ($action === 'save') {
    $message = $daten['message'] ?? '';
    if ($message !== '') {
        $gaestebuch->hinzufuegen($message);
    }
}

header("Content-Type: application/json");
echo json_encode(["entries" => $gaestebuch->alleEintraege()]);
