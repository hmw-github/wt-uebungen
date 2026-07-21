<?php
/*
    UEBUNG 4: FETCH-API MIT GET - SERVERTEIL (Kapitel 8.4 - Fetch API)

    Dieses Skript ist bereits vollstaendig (identisch zu Uebung 1): Es
    filtert das Array $namen nach dem uebergebenen Praefix und liefert die
    Treffer als kommagetrennte Liste zurueck (oder "kein Treffer!").
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
