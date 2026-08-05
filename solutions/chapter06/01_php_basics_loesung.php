<!--
    LÖSUNGSVORSCHLAG - ÜBUNG 1: PHP-GRUNDLAGEN
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
        $name = "Alex Berger";
        $studiengang = "Angewandte Informatik";
        $eingeschrieben = true;
    ?>

    <ul>
        <?php
            echo "<li>\$name ist vom Typ: " . gettype($name) . "</li>";
            echo "<li>\$studiengang ist vom Typ: " . gettype($studiengang) . "</li>";
            echo "<li>\$eingeschrieben ist vom Typ: " . gettype($eingeschrieben) . "</li>";
        ?>
    </ul>

    <p>
        <?php
            echo "Hallo, ich heiße " . $name . " und studiere " . $studiengang . ".";
        ?>
    </p>

    <p>
        <?php
            echo "Stand: " . date("H:i:s d.m.Y");
        ?>
    </p>

    <h2>Kontrollstrukturen und Arrays</h2>

    <h3>Summe eines Arrays</h3>
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

    <h3>Technologien (assoziatives Array)</h3>
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

    <h3>Notentext</h3>
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

    <h3>Kleines Einmaleins</h3>
    <ul>
        <?php
            $basiszahl = 7;
            for ($i = 1; $i <= 10; $i++) {
                echo "<li>" . $basiszahl . " * " . $i . " = " . ($basiszahl * $i) . "</li>";
            }
        ?>
    </ul>

    <h2>Funktionen und Klassen</h2>

    <?php
        function pruefeVorzeichen($zahl, &$ergebnis)
        {
            if ($zahl > 0) {
                $ergebnis = "positiv";
            } elseif ($zahl < 0) {
                $ergebnis = "negativ";
            } else {
                $ergebnis = "null";
            }
        }
    ?>

    <h3>Vorzeichenprüfung</h3>
    <p>
        <?php
            $beispielzahl = -8;
            $ergebnis = "";
            pruefeVorzeichen($beispielzahl, $ergebnis);
            echo "Die Zahl " . $beispielzahl . " ist " . $ergebnis . ".";
        ?>
    </p>

    <?php
        class Projekt
        {
            private $titel;
            private $technologie;

            public function __construct($titel, $technologie)
            {
                $this->titel = $titel;
                $this->technologie = $technologie;
            }

            public function __toString()
            {
                return "'" . $this->titel . "' - " . $this->technologie;
            }
        }

        class Webprojekt extends Projekt
        {
            private $jahr;

            public function __construct($titel, $technologie, $jahr)
            {
                parent::__construct($titel, $technologie);
                $this->jahr = $jahr;
            }

            public function __toString()
            {
                return parent::__toString() . " (" . $this->jahr . ")";
            }
        }
    ?>

    <h3>Projekte</h3>
    <p>
        <?php
            $projekt = new Projekt("Rezeptsammlung", "PHP, MySQL");
            $webprojekt = new Webprojekt("Portfolio-Website", "HTML, CSS, JavaScript, PHP, REST", 2026);

            echo $projekt . "<br>";
            echo $webprojekt;
        ?>
    </p>

</body>
</html>
