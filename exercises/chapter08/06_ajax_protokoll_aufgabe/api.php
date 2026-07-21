<?php
/*
    UEBUNG 6: PROTOKOLL MIT AJAX - SERVERTEIL (Kapitel 8.2/8.4 - AJAX-Prinzip)

    Aufgabenstellung:
    Dieses Skript verwaltet ein einfaches Sitzungs-Protokoll aus
    Textnachrichten. Der Request-Body ist immer ein JSON-Objekt mit einem
    Feld "action", das entweder "list" oder "save" ist:

    - {"action": "list"}: liefert alle bisher gespeicherten Eintraege.
    - {"action": "save", "message": "..."}: speichert einen neuen,
      zeitgestempelten Eintrag und liefert danach alle Eintraege (inklusive
      des neuen).

    Die Antwort ist in jedem Fall ein JSON-Objekt der Form
    {"entries": ["12:00:00 21.07.2026 - Hallo", ...]}.

    TODO 1: Dekodieren Sie den JSON-Request-Body (file_get_contents("php://input"),
            json_decode(..., true)) und werten Sie das Feld "action" aus:
            - Bei "save": Pruefen Sie, ob "message" gesetzt und nicht leer
              ist. Ist das der Fall, haengen Sie einen neuen Eintrag der
              Form date("H:i:s d.m.Y") . " - " . $message an
              $_SESSION['eintraege'] an. Ist die Nachricht leer, aendern Sie
              $_SESSION['eintraege'] nicht.
            - Bei "list" (und nach "save"): tun Sie nichts weiter, die
              Antwort wird unten einheitlich zusammengestellt.
    TODO 2: Setzen Sie den Response-Header auf "Content-Type: application/json"
            und geben Sie mit echo json_encode(["entries" => ...]) die
            aktuellen Eintraege aus $_SESSION['eintraege'] zurueck.
*/

session_start();

if (!isset($_SESSION['eintraege'])) {
    $_SESSION['eintraege'] = [];
}

$daten = json_decode(file_get_contents("php://input"), true);
$action = $daten['action'] ?? '';

// TODO 1: action auswerten ("save": Eintrag anhaengen, falls message
//         nicht leer ist; "list": nichts weiter tun)

// TODO 2: Content-Type-Header setzen und aktuelle Eintraege als JSON zurueckgeben
