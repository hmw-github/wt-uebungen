<?php
/*
    ÜBUNG 4: FETCH MIT POST UND ASYNC/AWAIT - SERVERTEIL
    (Kapitel 8.4/8.6 - Fetch API / async/await)

    Aufgabenstellung:
    Dieses Skript soll einen JSON-Request-Body der Form
    {"titel": "...", "jahr": ...} entgegennehmen und eine JSON-Bestätigung
    zurücksenden.

    TODO 1: Lesen Sie den rohen Request-Body mit file_get_contents("php://input")
            aus und wandeln Sie ihn mit json_decode(..., true) in ein
            assoziatives PHP-Array um.
    TODO 2: Setzen Sie den Response-Header auf "Content-Type: application/json"
            und geben Sie mit echo json_encode(...) eine Bestätigung im
            Format {"status":"ok","titel":"...","jahr":...} zurück (nutzen
            Sie dafür die Werte aus dem in TODO 1 dekodierten Array).
*/

// TODO 1: Request-Body lesen und JSON dekodieren

// TODO 2: Content-Type-Header setzen und JSON-Bestätigung zurückgeben
