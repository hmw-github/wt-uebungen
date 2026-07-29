<?php
/*
    ÜBUNG 1: XHR-GRUNDLAGEN - SERVERTEIL (Kapitel 8.2 - Name-Finder-Beispiel)

    Aufgabenstellung:
    Dieses Skript erhält per GET-Parameter "praefix" ein Praefix und soll
    daraufhin alle Technologien aus dem unten hart kodierten Array liefern,
    die mit diesem Praefix beginnen (Groß-/Kleinschreibung soll dabei
    keine Rolle spielen).

    TODO 1: Filtern Sie das Array $technologien so, dass nur Einträge
            übrig bleiben, deren Anfang (unabhängig von Groß-/
            Kleinschreibung) mit dem Wert aus $_GET['praefix']
            übereinstimmt. Verwenden Sie dazu strtolower() und strpos()
            (ein Treffer liegt vor, wenn strpos() die Position 0 liefert).
    TODO 2: Geben Sie die gefundenen Technologien als kommagetrennte Liste
            aus (z.B. "PHP,PostgreSQL"), falls mindestens ein Treffer
            existiert. Geben Sie andernfalls den Text "kein Treffer!" aus.
*/

$technologien = ["HTML", "CSS", "JavaScript", "PHP", "Bootstrap", "REST", "MySQL"];

$praefix = $_GET['praefix'] ?? '';

$treffer = [];

// TODO 1: Array $technologien nach Praefix filtern (strtolower, strpos)

// TODO 2: Treffer als kommagetrennte Liste ausgeben, sonst "kein Treffer!"
