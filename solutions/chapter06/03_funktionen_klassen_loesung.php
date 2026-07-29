<!--
    LÖSUNGSVORSCHLAG - ÜBUNG 3: FUNKTIONEN UND KLASSEN
-->
<!DOCTYPE html>
<html>
<head>
    <title>Funktionen und Klassen</title>
    <meta charset="UTF-8">
</head>
<body>

    <h1>Funktionen und Klassen</h1>

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

    <h2>Vorzeichenprüfung</h2>
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

    <h2>Projekte</h2>
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
