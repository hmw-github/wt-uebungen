<?php
/*
    UEBUNG 1: REST-ROUTENDESIGN (Kapitel 9.1 - REST-Grundprinzipien)

    Aufgabenstellung:
    Fuer die Ressource "Buch" (Attribute: id, titel, autor) soll eine
    REST-Schnittstelle entworfen werden. Ergaenzen Sie in der Tabelle
    $routen die fehlenden Routen (Methode + Pfad + Aktionsname) sowie
    anschliessend die Zuordnungslogik, die zu einer gegebenen Methode/Pfad-
    Kombination die passende Aktion ermittelt.

    TODO 1: Route zum Auflisten aller Buecher ergaenzen:
            Methode GET, Pfad "/buecher", Aktion "buecher_liste".
    TODO 2: Route zum Lesen eines einzelnen Buchs ergaenzen:
            Methode GET, Pfad "/buch/{id}", Aktion "buch_lesen".
    TODO 3: Route zum Anlegen eines neuen Buchs ergaenzen:
            Methode POST, Pfad "/buch", Aktion "buch_anlegen".
    TODO 4: Route zum Aktualisieren eines Buchs ergaenzen:
            Methode PUT, Pfad "/buch/{id}", Aktion "buch_aktualisieren".
    TODO 5: Route zum Loeschen eines Buchs ergaenzen:
            Methode DELETE, Pfad "/buch/{id}", Aktion "buch_loeschen".
    TODO 6: Vervollstaendigen Sie die Zuordnungslogik in der Schleife weiter
            unten: Fuer jeden Testfall soll die Liste $routen durchsucht
            werden. Eine Route passt, wenn die Methode uebereinstimmt und
            entweder der Pfad exakt gleich ist, oder das Pfad-Muster ein
            "{id}" enthaelt und der tatsaechliche Pfad an dieser Stelle eine
            Zahl enthaelt (pruefen Sie dies mit preg_match, indem Sie
            "{id}" im Muster durch "[0-9]+" ersetzen). Passt eine Route,
            soll deren Aktionsname in $gefunden gespeichert werden.

    Ausfuehrung:
    - Ueber die Kommandozeile: php routen.php
    - Oder ueber den Browser, wenn diese Datei ueber den PHP-Webserver
      (siehe Docker-Setup dieses Kapitels) aufgerufen wird.
*/

// Routentabelle der REST-Schnittstelle fuer die Ressource "Buch"
$routen = [

    // TODO 1: Route "Buecher auflisten" ergaenzen

    // TODO 2: Route "Buch lesen" ergaenzen

    // TODO 3: Route "Buch anlegen" ergaenzen

    // TODO 4: Route "Buch aktualisieren" ergaenzen

    // TODO 5: Route "Buch loeschen" ergaenzen

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

    // TODO 6: Passende Route in $routen suchen und $gefunden setzen

    echo $methode . ' ' . $pfad . ' -> ' . $gefunden . $eol;
}
