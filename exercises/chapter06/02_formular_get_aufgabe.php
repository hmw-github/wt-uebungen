<!DOCTYPE html>
<html>
<head>
    <title>Projekte filtern</title>
    <meta charset="UTF-8">
</head>
<body>

    <h1>Projekte filtern</h1>

    <?php
        $projekte = [
            ["titel" => "Wetter-App", "technologie" => "JavaScript, Fetch API"],
            ["titel" => "Rezeptsammlung", "technologie" => "PHP, MySQL"],
            ["titel" => "Portfolio-Website", "technologie" => "HTML, CSS, JavaScript, PHP, REST"]
        ];
    ?>

    <form method="get" action="">
        <label for="technologieFeld">Technologie:</label>
        <input type="text" id="technologieFeld" name="technologie" value="<?php // TODO 3: Wert aus $_GET wieder einsetzen ?>">
        <br><br>

        <input type="submit" value="Filtern">
    </form>

    <h2>Ergebnis</h2>
    <ul>
        <?php
            // TODO 1: prüfen, ob das Formular abgeschickt wurde (isset()/??)

                // TODO 2: $projekte durchsuchen und passende Treffer als <li> ausgeben
        ?>
    </ul>

</body>
</html>
