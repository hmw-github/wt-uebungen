<?php
/*
    ÜBUNG 4: FETCH-API MIT GET - SERVERTEIL (Kapitel 8.4 - Fetch API)

    Dieses Skript ist bereits vollständig (identisch zu Übung 1): Es
    filtert das Array $technologien nach dem übergebenen Praefix und
    liefert die Treffer als kommagetrennte Liste zurück (oder
    "kein Treffer!").
*/

$technologien = ["HTML", "CSS", "JavaScript", "PHP", "Bootstrap", "REST", "MySQL"];

$praefix = $_GET['praefix'] ?? '';

$treffer = [];

foreach ($technologien as $technologie) {
    if (strpos(strtolower($technologie), strtolower($praefix)) === 0) {
        $treffer[] = $technologie;
    }
}

if (count($treffer) > 0) {
    echo implode(",", $treffer);
} else {
    echo "kein Treffer!";
}
