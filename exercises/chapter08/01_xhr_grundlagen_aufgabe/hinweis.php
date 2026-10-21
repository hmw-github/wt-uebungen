<?php
/*
    ÜBUNG 1: XHR-GRUNDLAGEN - SERVERTEIL (Kapitel 8.2 - Name-Finder-Beispiel)

    Aufgabenstellung:
    Dieses Skript erhält per GET-Parameter "praefix" ein Praefix und soll
    daraufhin alle Technologien aus dem unten hart kodierten Array liefern,
    die mit diesem Praefix beginnen (Groß-/Kleinschreibung soll dabei
    keine Rolle spielen).

    TODO 1: In $treffer stehen nur die Technologien, die mit dem übergebenen
            Präfix beginnen, unabhängig von Groß-/Kleinschreibung: "p" und "P"
            liefern also beide PHP; "sql" liefert MySQL nicht, da es nicht am
            Anfang steht.
    TODO 2: Die Antwort ist eine kommagetrennte Liste der Treffer ohne
            Leerzeichen (z.B. "PHP,PostgreSQL"). Gibt es keinen Treffer,
            lautet die Antwort "kein Treffer!".
*/

$technologien = ["HTML", "CSS", "JavaScript", "PHP", "Bootstrap", "REST", "MySQL"];

$praefix = $_GET['praefix'] ?? '';

$treffer = [];

// TODO 1: nur Technologien behalten, die mit dem Präfix beginnen
//         (Groß-/Kleinschreibung egal)

// TODO 2: Treffer als kommagetrennte Liste ausgeben, sonst "kein Treffer!"
