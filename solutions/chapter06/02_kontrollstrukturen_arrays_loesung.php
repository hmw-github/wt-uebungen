<!--
    LOESUNGSVORSCHLAG - UEBUNG 2: KONTROLLSTRUKTUREN UND ARRAYS
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
            $zahlen = [12, 7, 33, 5, 21];
            $summe = 0;
            foreach ($zahlen as $zahl) {
                $summe += $zahl;
            }
            echo "Die Summe der Zahlen ist: " . $summe;
        ?>
    </p>

    <h2>Produktliste (assoziatives Array)</h2>
    <table border="1">
        <tr><th>Produkt</th><th>Preis</th></tr>
        <?php
            $produkte = [
                "Tastatur" => 29.99,
                "Monitor" => 199.00,
                "Maus" => 14.50
            ];
            foreach ($produkte as $name => $preis) {
                echo "<tr><td>" . $name . "</td><td>" . $preis . " EUR</td></tr>";
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
                    echo "ungenuegend";
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
