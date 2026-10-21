<?php
/*
    ÜBUNG 5: Gästebuch MIT AJAX - SERVERTEIL (Kapitel 8.2/8.4 - AJAX-Prinzip)

    Aufgabenstellung:
    Dieses Skript verwaltet das Gästebuch (wiederverwendet dazu das bereits
    aus Kapitel 6 bekannte Model Gästebuch.php). Der Request-Body ist immer
    ein JSON-Objekt mit einem Feld "action", das entweder "list" oder "save"
    ist:

    - {"action": "list"}: liefert alle bisher gespeicherten Einträge.
    - {"action": "save", "message": "..."}: speichert einen neuen,
      zeitgestempelten Eintrag und liefert danach alle Einträge (inklusive
      des neuen).

    Die Antwort ist in jedem Fall ein JSON-Objekt der Form
    {"entries": ["12:00:00 21.07.2026 - Hallo", ...]}.

    TODO 1: Bei "save" mit nicht leerer "message" landet die Nachricht als
            neuer, zeitgestempelter Eintrag im Gästebuch (über das vorhandene
            Model). Bei leerer Nachricht und bei "list" ändert sich am
            Gästebuch nichts.
    TODO 2: Die Antwort ist als JSON gekennzeichnet (Content-Type
            application/json) und enthält in jedem Fall alle aktuellen
            Einträge in der Form {"entries": [...]}.
*/

spl_autoload_register(function ($class) {
    require_once $class . '.php';
});

session_start();

$gaestebuch = new Gaestebuch();

$daten = json_decode(file_get_contents("php://input"), true);
$action = $daten['action'] ?? '';

// TODO 1: bei "save" nicht leere Nachricht ins Gästebuch übernehmen, sonst
//         nichts ändern

// TODO 2: alle aktuellen Einträge als JSON ({"entries": [...]}) zurückgeben
