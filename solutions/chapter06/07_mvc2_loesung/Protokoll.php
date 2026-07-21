<?php
/*
    LOESUNGSVORSCHLAG - Protokoll (Model)
*/

class Protokoll
{
    public function __construct()
    {
        if (!isset($_SESSION['eintraege'])) {
            $_SESSION['eintraege'] = [];
        }
    }

    public function hinzufuegen($text)
    {
        $_SESSION['eintraege'][] = date("H:i:s d.m.Y") . " - " . $text;
    }

    public function alleEintraege()
    {
        return $_SESSION['eintraege'];
    }
}
