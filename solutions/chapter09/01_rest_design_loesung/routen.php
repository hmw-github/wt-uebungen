<?php
/*
    LOESUNGSVORSCHLAG - UEBUNG 1: REST-ROUTENDESIGN

    Ausfuehrung:
    - Ueber die Kommandozeile: php routen.php
    - Oder ueber den Browser, wenn diese Datei ueber den PHP-Webserver
      (siehe Docker-Setup dieses Kapitels) aufgerufen wird.
*/

// Routentabelle der REST-Schnittstelle fuer die Ressource "Buch"
$routen = [
    ['methode' => 'GET',    'pfad' => '/buecher',   'aktion' => 'buecher_liste'],
    ['methode' => 'GET',    'pfad' => '/buch/{id}', 'aktion' => 'buch_lesen'],
    ['methode' => 'POST',   'pfad' => '/buch',      'aktion' => 'buch_anlegen'],
    ['methode' => 'PUT',    'pfad' => '/buch/{id}', 'aktion' => 'buch_aktualisieren'],
    ['methode' => 'DELETE', 'pfad' => '/buch/{id}', 'aktion' => 'buch_loeschen'],
];

// Testfaelle: jeweils [Methode, Pfad]
$testfaelle = [
    ['GET', '/buecher'],
    ['GET', '/buch/3'],
    ['POST', '/buch'],
    ['PUT', '/buch/7'],
    ['DELETE', '/buch/2'],
];

// Zeilenumbruch passend zur Ausfuehrungsart (CLI oder Browser)
$eol = (php_sapi_name() === 'cli') ? "\n" : "<br>\n";

foreach ($testfaelle as $testfall) {
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
