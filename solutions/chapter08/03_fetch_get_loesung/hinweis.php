<?php
/*
    LÖSUNGSVORSCHLAG - ÜBUNG 3: FETCH-API MIT GET - SERVERTEIL
    (identisch zu Übung 1)
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
