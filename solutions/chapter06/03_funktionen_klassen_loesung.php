<!--
    LOESUNGSVORSCHLAG - UEBUNG 3: FUNKTIONEN UND KLASSEN
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

    <h2>Vorzeichenpruefung</h2>
    <p>
        <?php
            $beispielzahl = -8;
            $ergebnis = "";
            pruefeVorzeichen($beispielzahl, $ergebnis);
            echo "Die Zahl " . $beispielzahl . " ist " . $ergebnis . ".";
        ?>
    </p>

    <?php
        class Buch
        {
            private $titel;
            private $autor;

            public function __construct($titel, $autor)
            {
                $this->titel = $titel;
                $this->autor = $autor;
            }

            public function __toString()
            {
                return "'" . $this->titel . "' von " . $this->autor;
            }
        }

        class EBook extends Buch
        {
            private $dateigroesse;

            public function __construct($titel, $autor, $dateigroesse)
            {
                parent::__construct($titel, $autor);
                $this->dateigroesse = $dateigroesse;
            }

            public function __toString()
            {
                return parent::__toString() . " (E-Book, " . $this->dateigroesse . " MB)";
            }
        }
    ?>

    <h2>Buecher</h2>
    <p>
        <?php
            $buch = new Buch("Der alte Mann und das Meer", "Ernest Hemingway");
            $ebook = new EBook("Clean Code", "Robert C. Martin", 4.2);

            echo $buch . "<br>";
            echo $ebook;
        ?>
    </p>

</body>
</html>
