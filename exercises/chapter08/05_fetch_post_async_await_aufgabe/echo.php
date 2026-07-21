<?php
/*
    UEBUNG 5: FETCH MIT POST UND ASYNC/AWAIT - SERVERTEIL
    (Kapitel 8.4/8.6 - Fetch API / async/await)

    Aufgabenstellung:
    Dieses Skript soll einen JSON-Request-Body der Form
    {"name": "...", "alter": ...} entgegennehmen und eine JSON-Bestaetigung
    zuruecksenden.

    TODO 1: Lesen Sie den rohen Request-Body mit file_get_contents("php://input")
            aus und wandeln Sie ihn mit json_decode(..., true) in ein
            assoziatives PHP-Array um.
    TODO 2: Setzen Sie den Response-Header auf "Content-Type: application/json"
            und geben Sie mit echo json_encode(...) eine Bestaetigung im
            Format {"status":"ok","name":"...","alter":...} zurueck (nutzen
            Sie dafuer die Werte aus dem in TODO 1 dekodierten Array).
*/

// TODO 1: Request-Body lesen und JSON dekodieren

// TODO 2: Content-Type-Header setzen und JSON-Bestaetigung zurueckgeben
