<?php
/*
    ÜBUNG 7: MODEL-VIEW-CONTROLLER (MVC2) (Kapitel 6.5 - Model-View-Controller-Muster)

    Aufgabenstellung:
    Das Gästebuch aus Übung 6 (Session-Handling, siehe ../kontakt.php) wird
    hier in das MVC2-Muster aufgeteilt:
    - index.php (diese Datei) ist der einzige Einstiegspunkt für alle
      Anfragen. Sie registriert das Autoloading, startet die Session und
      ruft den Controller auf. Diese Datei ist bereits vollständig fertig
      verdrahtet - hier müssen Sie nichts ergänzen.
    - Controller.php nimmt die Anfrage entgegen, aktualisiert bei Bedarf
      das Model und wählt anschließend die View aus.
    - Gästebuch.php ist das Model und kapselt den Zugriff auf
      $_SESSION['gaestebucheintraege'].
    - GaestebuchView.php ist die View und erzeugt die HTML-Ausgabe.

    Ergänzen Sie die TODOs in Controller.php, Gästebuch.php und
    GaestebuchView.php.
*/

spl_autoload_register(function ($class) {
    require_once $class . '.php';
});

session_start();

$controller = new Controller();
$controller->verarbeiteAnfrage();
