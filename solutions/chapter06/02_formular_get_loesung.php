<!--
    LÖSUNGSVORSCHLAG - ÜBUNG 4: FORMULARVERARBEITUNG MIT GET
-->
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
        <input type="text" id="technologieFeld" name="technologie" value="<?= htmlspecialchars($_GET['technologie'] ?? '') ?>">
        <br><br>

        <input type="submit" value="Filtern">
    </form>

    <h2>Ergebnis</h2>
    <ul>
        <?php
            if (isset($_GET['technologie']) && $_GET['technologie'] !== '') {
                $suchbegriff = $_GET['technologie'];
                foreach ($projekte as $projekt) {
                    if (stripos($projekt['technologie'], $suchbegriff) !== false) {
                        echo "<li>" . htmlspecialchars($projekt['titel']) . " (" . htmlspecialchars($projekt['technologie']) . ")</li>";
                    }
                }
            } else {
                echo "<li>Bitte geben Sie eine Technologie ein.</li>";
            }
        ?>
    </ul>

</body>
</html>
