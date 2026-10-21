<?php
/*
    ÜBUNG 1: REST-ROUTENDESIGN (Kapitel 9.1 - REST-Grundprinzipien)

    Aufgabenstellung:
    Für die Ressource "Projekt" (Attribute: id, titel, technologie, jahr)
    Ihrer Portfolio-Website soll eine REST-Schnittstelle entworfen werden -
    genau die Schnittstelle, die Sie in den Übungen 2 und 3 tatsächlich
    umsetzen. Ergänzen Sie in der Tabelle $routen die fehlenden Routen
    (Methode + Pfad + Aktionsname) nach den REST-Grundprinzipien, sodass
    die Testfälle unten zur jeweils passenden Aktion führen. Ergänzen Sie
    anschließend die Zuordnungslogik, die zu einer gegebenen
    Methode/Pfad-Kombination die passende Aktion ermittelt.

    TODO 1: Ein Client kann die Liste aller Projekte abrufen (Aktion
            "projekte_liste").
    TODO 2: Ein Client kann ein einzelnes Projekt anhand seiner id abrufen
            (Aktion "projekt_lesen").
    TODO 3: Ein Client kann ein neues Projekt anlegen, die id vergibt der
            Server (Aktion "projekt_anlegen").
    TODO 4: Ein Client kann ein bestehendes Projekt anhand seiner id ändern
            (Aktion "projekt_aktualisieren").
    TODO 5: Ein Client kann ein Projekt anhand seiner id löschen (Aktion
            "projekt_loeschen").
    TODO 6: Für jeden Testfall gibt das Skript die passende Aktion aus, z.B.
            "PUT /projekt/2 -> projekt_aktualisieren". Ein Platzhalter {id} in
            einem Routenpfad passt auf jede Zahl, aber nicht auf beliebigen
            Text: "GET /projekt/abc" ergibt "nicht gefunden", ebenso jede
            Methode/Pfad-Kombination, für die keine Route existiert.

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
    // TODO 1: Projekte auflisten

    // TODO 2: ein Projekt lesen

    // TODO 3: Projekt anlegen

    // TODO 4: Projekt aktualisieren

    // TODO 5: Projekt löschen

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

    // TODO 6: passende Aktion ermitteln (Platzhalter {id} passt auf Zahlen)

    echo $methode . ' ' . $pfad . ' -> ' . $gefunden . $eol;
}
