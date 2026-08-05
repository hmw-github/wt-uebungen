<?php
/*
    Model: kapselt den Zugriff auf die in der Session gespeicherten
    Gästebuch-Einträge ($_SESSION['gaestebucheintraege']).

    TODO 1: Implementieren Sie den Konstruktor __construct(). Er soll
            $_SESSION['gaestebucheintraege'] als leeres Array initialisieren,
            falls es noch nicht existiert (isset() verwenden).
    TODO 2: Implementieren Sie die Methode hinzufuegen($text). Sie soll einen
            neuen Eintrag der Form date("H:i:s d.m.Y") . " - " . $text (mit
            $text bereits per htmlspecialchars() abgesichert) an
            $_SESSION['gaestebucheintraege'] anhängen.
    TODO 3: Implementieren Sie die Methode alleEintraege(), die das Array
            $_SESSION['gaestebucheintraege'] zurückgibt.
*/

class Gaestebuch
{
    public function __construct()
    {
        // TODO 1: $_SESSION['gaestebucheintraege'] initialisieren, falls nicht vorhanden
    }

    public function hinzufuegen($text)
    {
        // TODO 2: neuen Eintrag mit Zeitstempel anhängen (htmlspecialchars auf $text anwenden)
    }

    public function alleEintraege()
    {
        // TODO 3: alle Einträge zurückgeben
    }
}
