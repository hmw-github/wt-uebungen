<!--
    LOESUNGSVORSCHLAG - UEBUNG 1: PHP-GRUNDLAGEN UND AUSGABE
-->
<!DOCTYPE html>
<html>
<head>
    <title>PHP Grundlagen und Ausgabe</title>
    <meta charset="UTF-8">
</head>
<body>

    <h1>PHP-Grundlagen und Ausgabe</h1>

    <?php
        $name = "Max Mustermann";
        $alter = 23;
        $istStudent = true;
    ?>

    <h2>Datentypen</h2>
    <ul>
        <?php
            echo "<li>\$name ist vom Typ: " . gettype($name) . "</li>";
            echo "<li>\$alter ist vom Typ: " . gettype($alter) . "</li>";
            echo "<li>\$istStudent ist vom Typ: " . gettype($istStudent) . "</li>";
        ?>
    </ul>

    <h2>Begruessung</h2>
    <p>
        <?php
            echo "Hallo, ich heisse " . $name . " und bin " . $alter . " Jahre alt.";
        ?>
    </p>

    <h2>Aktuelles Datum und Uhrzeit</h2>
    <p>
        <?php
            echo "Es ist jetzt " . date("H:i:s d.m.Y") . " Uhr.";
        ?>
    </p>

</body>
</html>
