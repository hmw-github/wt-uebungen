<?php
/*
    ÜBUNG 5: PROTOKOLL MIT AJAX - SERVERTEIL (Kapitel 8.2/8.4 - AJAX-Prinzip)

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

    TODO 1: Dekodieren Sie den JSON-Request-Body (file_get_contents("php://input"),
            json_decode(..., true)) und werten Sie das Feld "action" aus:
            - Bei "save": Prüfen Sie, ob "message" gesetzt und nicht leer
              ist. Ist das der Fall, rufen Sie $gaestebuch->hinzufuegen($message)
              auf. Ist die Nachricht leer, tun Sie nichts.
            - Bei "list" (und nach "save"): tun Sie nichts weiter, die
              Antwort wird unten einheitlich zusammengestellt.
    TODO 2: Setzen Sie den Response-Header auf "Content-Type: application/json"
            und geben Sie mit echo json_encode(["entries" => ...]) die
            aktuellen Einträge zurück (nutzen Sie dafür
            $gaestebuch->alleEintraege()).
*/

spl_autoload_register(function ($class) {
    require_once $class . '.php';
});

session_start();

$gaestebuch = new Gaestebuch();

$daten = json_decode(file_get_contents("php://input"), true);
$action = $daten['action'] ?? '';

// TODO 1: action auswerten ("save": $gaestebuch->hinzufuegen($message)
//         aufrufen, falls message nicht leer ist; "list": nichts weiter tun)

// TODO 2: Content-Type-Header setzen und $gaestebuch->alleEintraege() als JSON zurückgeben
