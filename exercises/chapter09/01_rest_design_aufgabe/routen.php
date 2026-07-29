<?php
/*
    ÜBUNG 1: REST-ROUTENDESIGN (Kapitel 9.1 - REST-Grundprinzipien)

    Aufgabenstellung:
    Für die Ressource "Projekt" (Attribute: id, titel, technologie, jahr)
    Ihrer Portfolio-Website soll eine REST-Schnittstelle entworfen werden -
    genau die Schnittstelle, die Sie in den Übungen 2 bis 4 tatsächlich
    umsetzen. Ergänzen Sie in der Tabelle $routen die fehlenden Routen
    (Methode + Pfad + Aktionsname) sowie anschließend die
    Zuordnungslogik, die zu einer gegebenen Methode/Pfad-Kombination die
    passende Aktion ermittelt.

    TODO 1: Route zum Auflisten aller Projekte ergänzen:
            Methode GET, Pfad "/projekte", Aktion "projekte_liste".
    TODO 2: Route zum Lesen eines einzelnen Projekts ergänzen:
            Methode GET, Pfad "/projekt/{id}", Aktion "projekt_lesen".
    TODO 3: Route zum Anlegen eines neuen Projekts ergänzen:
            Methode POST, Pfad "/projekt", Aktion "projekt_anlegen".
    TODO 4: Route zum Aktualisieren eines Projekts ergänzen:
            Methode PUT, Pfad "/projekt/{id}", Aktion "projekt_aktualisieren".
    TODO 5: Route zum Löschen eines Projekts ergänzen:
            Methode DELETE, Pfad "/projekt/{id}", Aktion "projekt_loeschen".
    TODO 6: Vervollständigen Sie die Zuordnungslogik in der Schleife weiter
            unten: Für jeden Testfall soll die Liste $routen durchsucht
            werden. Eine Route passt, wenn die Methode übereinstimmt und
            entweder der Pfad exakt gleich ist, oder das Pfad-Muster ein
            "{id}" enthält und der tatsächliche Pfad an dieser Stelle eine
            Zahl enthält (prüfen Sie dies mit preg_match, indem Sie
            "{id}" im Muster durch "[0-9]+" ersetzen). Passt eine Route,
            soll deren Aktionsname in $gefunden gespeichert werden.

    Ausführung:
    - Über die Kommandozeile: php routen.php
    - Oder über den Browser, wenn diese Datei über den PHP-Webserver
      (siehe Docker-Setup dieses Kapitels) aufgerufen wird.
*/

// Routentabelle der REST-Schnittstelle für die Ressource "Projekt"
// jede Route durch ['methode' => '<HTTP Methode>',
//                   'pfad' => '<Pfad>',
//                   'aktion' => '<aufzurufende Methode>']
// definieren
$routen = [
    // TODO 1: Route "Projekte auflisten" ergänzen

    // TODO 2: Route "Projekt lesen" ergänzen

    // TODO 3: Route "Projekt anlegen" ergänzen

    // TODO 4: Route "Projekt aktualisieren" ergänzen

    // TODO 5: Route "Projekt löschen" ergänzen

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

    // TODO 6: Passende Route in $routen suchen und $gefunden setzen

    echo $methode . ' ' . $pfad . ' -> ' . $gefunden . $eol;
}
