<?php
/*
    UEBUNG 3: REST CRUD-SCHNITTSTELLE (Kapitel 9.2 - Beispiel Bestellungsverwaltung)

    Aufgabenstellung:
    Diese Uebung erweitert Uebung 2 um die restlichen REST-Operationen
    (Create, Update, Delete). Damit Aenderungen ueber mehrere Anfragen
    hinweg erhalten bleiben (es gibt keine Datenbank), werden die Buecher
    in der PHP-Session gespeichert ($_SESSION['buecher']).

    Die Operationen "GET /buecher" und "GET /buch/{id}" sind bereits aus
    Uebung 2 uebernommen und vollstaendig implementiert.

    TODO 1: Implementieren Sie "POST /buch": Lesen Sie den JSON-Body der
            Anfrage (file_get_contents('php://input') + json_decode),
            vergeben Sie eine neue, fortlaufende id, haengen Sie das neue
            Buch an $_SESSION['buecher'] an und antworten Sie mit Status 200
            sowie dem neu angelegten Buch als JSON.
    TODO 2: Implementieren Sie "PUT /buch/{id}": Suchen Sie das Buch mit
            passender id, aktualisieren Sie titel und autor aus dem
            JSON-Body und antworten Sie mit Status 200 und dem aktualisierten
            Buch als JSON. Existiert die id nicht, antworten Sie mit
            Status 404.
    TODO 3: Implementieren Sie "DELETE /buch/{id}": Entfernen Sie das Buch
            mit passender id aus $_SESSION['buecher'] und antworten Sie mit
            Status 200 und leerem Body. Existiert die id nicht, antworten
            Sie mit Status 404.
*/

session_start();
header('Content-Type: application/json');

// Beim ersten Aufruf Session mit denselben Beispieldaten wie in Uebung 2 befuellen
if (!isset($_SESSION['buecher'])) {
    $_SESSION['buecher'] = [
        ['id' => 1, 'titel' => 'Der Prozess', 'autor' => 'Franz Kafka'],
        ['id' => 2, 'titel' => 'Faust', 'autor' => 'Johann Wolfgang von Goethe'],
        ['id' => 3, 'titel' => 'Die Verwandlung', 'autor' => 'Franz Kafka'],
        ['id' => 4, 'titel' => 'Effi Briest', 'autor' => 'Theodor Fontane'],
    ];
}

$methode = $_SERVER['REQUEST_METHOD'];
$pfad = isset($_REQUEST['_url']) ? $_REQUEST['_url'] : '/';
$pfad = '/' . ltrim($pfad, '/'); // .htaccess liefert den Pfad ohne fuehrenden Schraegstrich

if ($methode === 'GET' && $pfad === '/buecher') {
    http_response_code(200);
    echo json_encode($_SESSION['buecher']);

} elseif ($methode === 'GET' && preg_match('#^/buch/([0-9]+)$#', $pfad, $treffer)) {
    $id = (int) $treffer[1];
    $gefundenesBuch = null;

    foreach ($_SESSION['buecher'] as $buch) {
        if ($buch['id'] === $id) {
            $gefundenesBuch = $buch;
            break;
        }
    }

    if ($gefundenesBuch !== null) {
        http_response_code(200);
        echo json_encode($gefundenesBuch);
    } else {
        http_response_code(404);
    }

} elseif ($methode === 'POST' && $pfad === '/buch') {

    // TODO 1: Neues Buch aus dem JSON-Body anlegen und mit Status 200
    //         zurueckgeben

} elseif ($methode === 'PUT' && preg_match('#^/buch/([0-9]+)$#', $pfad, $treffer)) {
    $id = (int) $treffer[1];

    // TODO 2: Buch mit passender id aktualisieren (Status 200) bzw.
    //         Status 404, falls die id nicht existiert

} elseif ($methode === 'DELETE' && preg_match('#^/buch/([0-9]+)$#', $pfad, $treffer)) {
    $id = (int) $treffer[1];

    // TODO 3: Buch mit passender id loeschen (Status 200) bzw.
    //         Status 404, falls die id nicht existiert

} else {
    http_response_code(404);
}
