<?php
/*
    Model: kapselt den Zugriff auf die in der Session gespeicherten
    Protokoll-Eintraege ($_SESSION['eintraege']).

    TODO 1: Implementieren Sie den Konstruktor __construct(). Er soll
            $_SESSION['eintraege'] als leeres Array initialisieren, falls es
            noch nicht existiert (isset() verwenden).
    TODO 2: Implementieren Sie die Methode hinzufuegen($text). Sie soll einen
            neuen Eintrag der Form date("H:i:s d.m.Y") . " - " . $text an
            $_SESSION['eintraege'] anhaengen.
    TODO 3: Implementieren Sie die Methode alleEintraege(), die das Array
            $_SESSION['eintraege'] zurueckgibt.
*/

class Protokoll
{
    public function __construct()
    {
        // TODO 1: $_SESSION['eintraege'] initialisieren, falls nicht vorhanden
    }

    public function hinzufuegen($text)
    {
        // TODO 2: neuen Eintrag mit Zeitstempel anhaengen
    }

    public function alleEintraege()
    {
        // TODO 3: alle Eintraege zurueckgeben
    }
}
