<?php
/*
    UEBUNG 2: REST GET-SCHNITTSTELLE (Kapitel 9.2 - Beispiel Bestellungsverwaltung)

    Aufgabenstellung:
    Diese Datei implementiert einen (noch unvollstaendigen) REST-Service fuer
    die Ressource "Buch". Die Buecher werden der Einfachheit halber in einem
    festen PHP-Array gehalten (keine Datenbank).

    TODO 1: Ergaenzen Sie in der Datei .htaccess in diesem Verzeichnis das
            Rewriting, damit jede Anfrage an service.php weitergeleitet wird
            (der urspruengliche Pfad soll dabei ueber den Query-Parameter
            "_url" erhalten bleiben).
    TODO 2: Implementieren Sie die Operation "GET /buecher": Geben Sie das
            gesamte Buch-Array als JSON aus und setzen Sie den HTTP-Status
            auf 200.
    TODO 3: Implementieren Sie die Operation "GET /buch/{id}": Suchen Sie das
            Buch mit passender id im Array. Wird es gefunden, geben Sie es
            als JSON mit Status 200 aus, andernfalls antworten Sie mit
            Status 404 und leerem Body.

    Hinweis: Der von .htaccess weitergeleitete Pfad steht in
    $_REQUEST['_url'] (z.B. "/buch/2"). Nutzen Sie preg_match bzw. explode,
    um die id aus dem Pfad zu extrahieren.
*/

header('Content-Type: application/json');

// Feste Beispieldaten (keine Datenbank noetig)
$buecher = [
    ['id' => 1, 'titel' => 'Der Prozess', 'autor' => 'Franz Kafka'],
    ['id' => 2, 'titel' => 'Faust', 'autor' => 'Johann Wolfgang von Goethe'],
    ['id' => 3, 'titel' => 'Die Verwandlung', 'autor' => 'Franz Kafka'],
    ['id' => 4, 'titel' => 'Effi Briest', 'autor' => 'Theodor Fontane'],
];

$methode = $_SERVER['REQUEST_METHOD'];
$pfad = isset($_REQUEST['_url']) ? $_REQUEST['_url'] : '/';
$pfad = '/' . ltrim($pfad, '/'); // .htaccess liefert den Pfad ohne fuehrenden Schraegstrich

if ($methode === 'GET' && $pfad === '/buecher') {

    // TODO 2: Alle Buecher als JSON zurueckgeben (Status 200)

} elseif ($methode === 'GET' && preg_match('#^/buch/([0-9]+)$#', $pfad, $treffer)) {
    $id = (int) $treffer[1];

    // TODO 3: Buch mit passender id suchen und als JSON zurueckgeben
    //         (Status 200) bzw. mit Status 404 antworten, falls nicht gefunden

} else {
    http_response_code(404);
}
