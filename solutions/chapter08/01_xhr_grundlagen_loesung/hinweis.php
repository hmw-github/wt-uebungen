<?php
/*
    LOESUNGSVORSCHLAG - UEBUNG 1: XHR-GRUNDLAGEN - SERVERTEIL
*/

$namen = ["Anna", "Anton", "Bernd", "Berta", "Clara", "Daniel", "Emil", "Frieda"];

$praefix = $_GET['praefix'] ?? '';

$treffer = [];

foreach ($namen as $name) {
    if (strpos(strtolower($name), strtolower($praefix)) === 0) {
        $treffer[] = $name;
    }
}

if (count($treffer) > 0) {
    echo implode(",", $treffer);
} else {
    echo "kein Treffer!";
}
