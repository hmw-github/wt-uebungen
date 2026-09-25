<?php
/*
    LÖSUNGSVORSCHLAG - ÜBUNG 4: MODEL-VIEW-CONTROLLER (MVC2)
*/

spl_autoload_register(function ($class) {
    require_once $class . '.php';
});

session_start();

$controller = new Controller();
$controller->verarbeiteAnfrage();
