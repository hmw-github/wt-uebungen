<?php
/**
 * index.php – Front Controller der Adressverwaltung
 *
 * Das ist die EINZIGE Datei, die der Browser aufruft. Jede Anfrage
 * (jeder Klick auf einen Button) landet hier. Die Datei
 *   1. registriert den Autoloader für die Klassen,
 *   2. startet die Session,
 *   3. holt den Controller aus der Session (oder legt ihn neu an) und
 *   4. übergibt die Anfrage an den Controller.
 *
 * Was genau passieren soll, entscheidet anschließend der Controller.
 */

// Fehlermeldungen im Browser anzeigen – praktisch beim Entwickeln,
// in einer produktiven Anwendung aber abschalten!
ini_set("display_errors", 1);

// Autoloader: Wird eine Klasse zum ersten Mal verwendet (z.B. "new Adresse()"),
// ruft PHP diese Funktion mit dem vollständigen Klassennamen auf, z.B.
// "model\Adresse". Da Namespaces und Ordner gleich heißen, ergibt sich daraus
// direkt der Dateiname: model\Adresse -> model/Adresse.php
// Unbekannte Klassen (z.B. aus einer veralteten Session) werden ignoriert.
spl_autoload_register(function($class) {
    $datei = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    if (is_file($datei)) {
        require $datei;
    }
});

// "use" erlaubt es, Klassen ohne ihren Namespace anzusprechen:
// "Controller" statt "controller\Controller".
use controller\Controller;
use model\AdressenDAO;

// Session starten bzw. fortsetzen. Dabei stellt PHP alle Objekte wieder her,
// die bei der letzten Anfrage in $_SESSION gespeichert wurden.
session_start();

if (!($_SESSION['controller'] ?? null) instanceof Controller) {
    // Erster Aufruf (oder ungültige Session): Controller und Data Access
    // Object für Adressen erzeugen und in der Session speichern, damit sie
    // bei den folgenden Anfragen erhalten bleiben.
	$controller = new Controller();
	$_SESSION['controller'] = $controller;
	$_SESSION['adressenDAO'] = new AdressenDAO();
} else {
    // Folgeaufruf: vorhandenen Controller aus der Session verwenden.
	$controller = $_SESSION['controller'];
}

// Anfrage an den Controller übergeben.
$controller->run();
?>