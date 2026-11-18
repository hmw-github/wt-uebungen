<?php declare(strict_types=1); ?>
<!--
    ÜBUNG 1: PHP-GRUNDLAGEN (Kapitel 6.1/6.2 - PHP-Sprachkonzepte: Ausgabe,
    Kontrollstrukturen, Arrays, Funktionen, Klassen)

    Aufgabenstellung:
    Diese Seite ist bewusst eine eigenständige Datei ohne Bezug zur
    Portfolio-Website und übt anhand der immer gleichen Projektdaten von
    Alex Berger (Titel, Technologie, Jahr) grundlegende
    PHP-Sprachkonzepte ein. Ergänzen Sie an den TODO-Stellen den fehlenden
    PHP-Code:
-->
<!DOCTYPE html>
<html>
<head>
    <title>PHP-Grundlagen</title>
    <meta charset="UTF-8">
</head>
<body>

    <h1>PHP-Grundlagen</h1>

    <h2>Steckbrief</h2>

    <?php
        // TODO 1: Steckbriefdaten (Name, Studiengang, eingeschrieben ja/nein)
        //         bereitstellen
        $name = "Alex Berger";
        $studiengang = "Angewandte Informatik";
        $eingeschrieben = true;
    ?>

    <ul>
        <?php
            // TODO 2: Datentyp jeder Steckbriefangabe als Listeneintrag
            //         anzeigen
            echo "<li>Name = " . $name . ", Typ = " . gettype($name) . "</li>"; 
            echo "<li>Studiengang = " . $studiengang . ", Typ = " . gettype($studiengang) . "</li>"; 
            echo "<li>Eingeschrieben = " . $eingeschrieben . ", Typ = " . gettype($eingeschrieben) . "</li>"; 

            echo "PHP kennt folgende Typen: string, boolean, integer, double, array, NULL, object";
        ?>
    </ul>

    <p>
        <?php
            // TODO 3: Begrüßungssatz mit Name und Studiengang anzeigen
            echo "Hallo, ich heisse " . $name . " und studiere " . $studiengang . "<br>2. Zeile";
        ?>
    </p>

    <p>
        <?php
            // TODO 4: Aktuellen Zeitpunkt als "Stand: ..." anzeigen
            echo "Stand: " . date("d.m.Y H:m:i");
        ?>
    </p>

    <h2>Kontrollstrukturen und Arrays</h2>

    <h3>Summe eines Arrays</h3>
    <p>
        <?php
            // TODO 5: Summe der Projektjahre 2022 bis 2026 anzeigen
            //      Index     0     1     2     3 
            $jahre = array(2022, 2023, 2024, 2025);
            $jahre[] = 2026; // 2026 anfügen
            $summe = 0;

            // for ($i = 0; $i < count($jahre); ++$i) {
            //     $summe += $jahre[$i];
            // }
            foreach ($jahre as $jahr) {
                $summe += $jahr;
            }
            echo "Die Summe der Jahre ist: " . $summe; 
        ?>
    </p>

    <h3>Technologien (assoziatives Array)</h3>
    <table border="1">
        <tr><th>Technologie</th><th>Erfahrung (Jahre)</th></tr>
        <?php
            // TODO 6: Technologien mit Erfahrung in Jahren als Tabellenzeilen
            //         anzeigen
            $erfahrungen = array(
                // key => value
                "HTML"       => 4,
                "CSS"        => 4,
                "JavaScript" => 3,
                "PHP"        => 2
            );
            foreach ($erfahrungen as $technologie => $jahre) {
                echo "<tr><td>" . $technologie . "</td><td>" 
                    . $jahre . "</td></tr>";
            }
        ?>
    </table>

    <h3>Notentext</h3>
    <p>
        <?php
            // TODO 7: Eine Note (1-6) als Notentext anzeigen
            $note = 11;

            switch ($note) {
                case 1:
                    $notentext = "eins";
                    break;
                case 2:
                    $notentext = "zwei";
                    break;
                case 3:
                    $notentext = "drei";
                    break;
                case 4:
                    $notentext = "vier";
                    break;
                case 5:
                    $notentext = "fünf";
                    break;
                case 6:
                    $notentext = "sechs";
                    break;
                default:
                    $notentext = "ungültig";
                    break;
            }
            echo "Note: " . $notentext . " (" . $note . ")";
        ?>
    </p>

    <h3>Kleines Einmaleins</h3>
    <ul>
        <?php
            // TODO 8: Einmaleins einer Zahl als Liste anzeigen
            for ($i = 1; $i <= 10; ++$i) {
                echo "<li>7 * " . $i . " = " . $i * 7 . "</li>";
            }
        ?>
    </ul>

    <h2>Funktionen und Klassen</h2>

    <?php
        // TODO 9: Funktion pruefeVorzeichen: liefert
        //         "positiv"/"negativ"/"null" über ihren zweiten Parameter

        // C:
        //void f(int x, int *erg) { ... }

        function pruefeVorzeichen($zahl, &$ergebnis) 
        {
            if (gettype($zahl) != 'integer') {
                $ergebnis = "keine ganze Zahl";
            } else if ($zahl < 0) {
                $ergebnis = "negativ";
            } else if ($zahl == 0) {
                $ergebnis = "null";
            } else {
                $ergebnis = "positiv";
            }
        }
    ?>

    <h3>Vorzeichenprüfung</h3>
    <p>
        <?php
            // TODO 10: Vorzeichen einer Beispielzahl ermitteln und anzeigen
            $zahl = "-8";
            pruefeVorzeichen($zahl, $ergebnis);
            echo "Die Zahl " . $zahl . " ist " . $ergebnis;
        ?>
    </p>

    <?php
        // TODO 11: Klasse Projekt (Titel, Technologie, Textdarstellung)

        // TODO 12: Klasse Webprojekt: Projekt mit zusätzlichem Jahr
    ?>

    <h3>Projekte</h3>
    <p>
        <?php
            // TODO 13: Ein Projekt und ein Webprojekt anzeigen
        ?>
    </p>

</body>
</html>
