<?php
/*
    Model: kapselt den Zugriff auf die in der Session gespeicherten
    Gästebuch-Einträge ($_SESSION['gaestebucheintraege']).

    TODO 1: Wird ein Gästebuch-Objekt erzeugt, steht in
            $_SESSION['gaestebucheintraege'] immer eine Liste bereit: beim
            ersten Mal leer, danach mit allen bisherigen Einträgen.
    TODO 2: Nach hinzufuegen($text) steht am Ende des Gästebuchs ein neuer
            Eintrag der Form "14:05:09 21.10.2026 - <text>". HTML in $text
            wird später wörtlich angezeigt und nie ausgeführt.
    TODO 3: alleEintraege() liefert die Liste aller bisherigen Einträge.
*/

class Gaestebuch
{
    public function __construct()
    {
        // TODO 1: Gästebuch-Liste in der Session bereitstellen
    }

    public function hinzufuegen($text)
    {
        // TODO 2: Eintrag mit Zeitstempel ans Gästebuch anhängen
    }

    public function alleEintraege()
    {
        // TODO 3: alle Einträge liefern
    }
}
