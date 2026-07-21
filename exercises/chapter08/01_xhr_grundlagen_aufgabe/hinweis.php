<?php
/*
    UEBUNG 1: XHR-GRUNDLAGEN - SERVERTEIL (Kapitel 8.2 - Name-Finder-Beispiel)

    Aufgabenstellung:
    Dieses Skript erhaelt per GET-Parameter "praefix" ein Praefix und soll
    daraufhin alle Vornamen aus dem unten hart kodierten Array liefern, die
    mit diesem Praefix beginnen (Gross-/Kleinschreibung soll dabei keine
    Rolle spielen).

    TODO 1: Filtern Sie das Array $namen so, dass nur Namen uebrig bleiben,
            deren Anfang (unabhaengig von Gross-/Kleinschreibung) mit dem
            Wert aus $_GET['praefix'] uebereinstimmt. Verwenden Sie dazu
            strtolower() und strpos() (ein Treffer liegt vor, wenn strpos()
            die Position 0 liefert).
    TODO 2: Geben Sie die gefundenen Namen als kommagetrennte Liste aus
            (z.B. "Anna,Anton"), falls mindestens ein Treffer existiert.
            Geben Sie andernfalls den Text "kein Treffer!" aus.
*/

$namen = ["Anna", "Anton", "Bernd", "Berta", "Clara", "Daniel", "Emil", "Frieda"];

$praefix = $_GET['praefix'] ?? '';

$treffer = [];

// TODO 1: Array $namen nach Praefix filtern (strtolower, strpos)

// TODO 2: Treffer als kommagetrennte Liste ausgeben, sonst "kein Treffer!"
