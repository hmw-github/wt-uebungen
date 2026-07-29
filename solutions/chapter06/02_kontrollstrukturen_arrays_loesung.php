<!--
    LÖSUNGSVORSCHLAG - ÜBUNG 2: KONTROLLSTRUKTUREN UND ARRAYS
-->
<!DOCTYPE html>
<html>
<head>
    <title>Kontrollstrukturen und Arrays</title>
    <meta charset="UTF-8">
</head>
<body>

    <h1>Kontrollstrukturen und Arrays</h1>

    <h2>Summe eines Arrays</h2>
    <p>
        <?php
            $jahre = [2022, 2023, 2024, 2025, 2026];
            $summe = 0;
            foreach ($jahre as $jahr) {
                $summe += $jahr;
            }
            echo "Die Summe der Jahre ist: " . $summe;
        ?>
    </p>

    <h2>Technologien (assoziatives Array)</h2>
    <table border="1">
        <tr><th>Technologie</th><th>Erfahrung (Jahre)</th></tr>
        <?php
            $technologien = [
                "HTML" => 4,
                "CSS" => 4,
                "JavaScript" => 3,
                "PHP" => 2
            ];
            foreach ($technologien as $technologie => $jahre) {
                echo "<tr><td>" . $technologie . "</td><td>" . $jahre . "</td></tr>";
            }
        ?>
    </table>

    <h2>Notentext</h2>
    <p>
        <?php
            $note = 2;
            switch ($note) {
                case 1:
                    echo "sehr gut";
                    break;
                case 2:
                    echo "gut";
                    break;
                case 3:
                    echo "befriedigend";
                    break;
                case 4:
                    echo "ausreichend";
                    break;
                case 5:
                    echo "mangelhaft";
                    break;
                case 6:
                    echo "ungenügend";
                    break;
                default:
                    echo "unbekannte Note";
            }
        ?>
    </p>

    <h2>Kleines Einmaleins</h2>
    <ul>
        <?php
            $basiszahl = 7;
            for ($i = 1; $i <= 10; $i++) {
                echo "<li>" . $basiszahl . " * " . $i . " = " . ($basiszahl * $i) . "</li>";
            }
        ?>
    </ul>

</body>
</html>
