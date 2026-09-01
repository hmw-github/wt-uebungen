<?php
/*
    LÖSUNGSVORSCHLAG - ÜBUNG 4: FETCH MIT POST UND ASYNC/AWAIT - SERVERTEIL
*/

$eingabe = json_decode(file_get_contents("php://input"), true);

header("Content-Type: application/json");

echo json_encode([
    "status" => "ok",
    "titel" => $eingabe["titel"] ?? "",
    "jahr" => $eingabe["jahr"] ?? null
]);
