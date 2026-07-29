<?php
/*
    LÖSUNGSVORSCHLAG - ÜBUNG 1: REST-ROUTENDESIGN

    Ausführung:
    - Über die Kommandozeile: php routen.php
    - Oder über den Browser, wenn diese Datei über den PHP-Webserver
      (siehe Docker-Setup dieses Kapitels) aufgerufen wird.
*/

// Routentabelle der REST-Schnittstelle für die Ressource "Projekt"
$routen = [
    ['methode' => 'GET',    'pfad' => '/projekte',      'aktion' => 'projekte_liste'],
    ['methode' => 'GET',    'pfad' => '/projekt/{id}',  'aktion' => 'projekt_lesen'],
    ['methode' => 'POST',   'pfad' => '/projekt',       'aktion' => 'projekt_anlegen'],
    ['methode' => 'PUT',    'pfad' => '/projekt/{id}',  'aktion' => 'projekt_aktualisieren'],
    ['methode' => 'DELETE', 'pfad' => '/projekt/{id}',  'aktion' => 'projekt_loeschen'],
];

// Testfälle: jeweils [Methode, Pfad]
$testfälle = [
    ['GET', '/projekte'],
    ['GET', '/projekt/3'],
    ['POST', '/projekt'],
    ['PUT', '/projekt/2'],
    ['DELETE', '/projekt/1'],
];

// Zeilenumbruch passend zur Ausführungsart (CLI oder Browser)
$eol = (php_sapi_name() === 'cli') ? "\n" : "<br>\n";

foreach ($testfälle as $testfall) {
    $methode = $testfall[0];
    $pfad = $testfall[1];
    $gefunden = 'nicht gefunden';

    foreach ($routen as $route) {
        if ($route['methode'] !== $methode) {
            continue;
        }

        // "{id}" im Pfad-Muster durch ein numerisches Muster ersetzen
        $muster = '#^' . str_replace('{id}', '[0-9]+', $route['pfad']) . '$#';

        if (preg_match($muster, $pfad)) {
            $gefunden = $route['aktion'];
            break;
        }
    }

    echo $methode . ' ' . $pfad . ' -> ' . $gefunden . $eol;
}
