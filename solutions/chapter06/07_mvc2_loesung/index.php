<?php
/*
    LOESUNGSVORSCHLAG - UEBUNG 7: MODEL-VIEW-CONTROLLER (MVC2)
    index.php: Einstiegspunkt, Autoloading, Session-Start, Controller-Aufruf.
*/

spl_autoload_register(function ($class) {
    require_once $class . '.php';
});

session_start();

$controller = new Controller();
$controller->verarbeiteAnfrage();
