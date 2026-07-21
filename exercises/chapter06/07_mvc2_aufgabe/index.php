<?php
/*
    UEBUNG 7: MODEL-VIEW-CONTROLLER (MVC2) (Kapitel 6.5 - Model-View-Controller-Muster)

    Aufgabenstellung:
    Das Notiz-Protokoll aus Uebung 6 wird hier in das MVC2-Muster aufgeteilt:
    - index.php (diese Datei) ist der einzige Einstiegspunkt fuer alle
      Anfragen. Sie registriert das Autoloading, startet die Session und
      ruft den Controller auf. Diese Datei ist bereits vollstaendig fertig
      verdrahtet - hier muessen Sie nichts ergaenzen.
    - Controller.php nimmt die Anfrage entgegen, aktualisiert bei Bedarf
      das Model und waehlt anschliessend die View aus.
    - Protokoll.php ist das Model und kapselt den Zugriff auf
      $_SESSION['eintraege'].
    - ProtokollView.php ist die View und erzeugt die HTML-Ausgabe.

    Ergaenzen Sie die TODOs in Controller.php, Protokoll.php und
    ProtokollView.php.
*/

spl_autoload_register(function ($class) {
    require_once $class . '.php';
});

session_start();

$controller = new Controller();
$controller->verarbeiteAnfrage();
