<?php
/*
    LÖSUNGSVORSCHLAG - Model Gästebuch
*/

class Gaestebuch
{
    public function __construct()
    {
        if (!isset($_SESSION['gaestebucheintraege'])) {
            $_SESSION['gaestebucheintraege'] = [];
        }
    }

    public function hinzufuegen($text)
    {
        $_SESSION['gaestebucheintraege'][] = date("H:i:s d.m.Y") . " - " . htmlspecialchars($text);
    }

    public function alleEintraege()
    {
        return $_SESSION['gaestebucheintraege'];
    }
}
