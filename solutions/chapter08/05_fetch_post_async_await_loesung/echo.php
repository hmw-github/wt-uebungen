<?php
/*
    LOESUNGSVORSCHLAG - UEBUNG 5: FETCH MIT POST UND ASYNC/AWAIT - SERVERTEIL
*/

$eingabe = json_decode(file_get_contents("php://input"), true);

header("Content-Type: application/json");

echo json_encode([
    "status" => "ok",
    "name" => $eingabe["name"] ?? "",
    "alter" => $eingabe["alter"] ?? null
]);
