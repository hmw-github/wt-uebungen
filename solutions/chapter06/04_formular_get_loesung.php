<!--
    LOESUNGSVORSCHLAG - UEBUNG 4: FORMULARVERARBEITUNG MIT GET
-->
<!DOCTYPE html>
<html>
<head>
    <title>Unterkunftssuche</title>
    <meta charset="UTF-8">
</head>
<body>

    <h1>Unterkunftssuche</h1>

    <form method="get" action="">
        <label for="stadtFeld">Stadt:</label>
        <input type="text" id="stadtFeld" name="stadt" value="<?= htmlspecialchars($_GET['stadt'] ?? '') ?>">
        <br><br>

        <label for="landFeld">Land:</label>
        <input type="text" id="landFeld" name="land" value="<?= htmlspecialchars($_GET['land'] ?? '') ?>">
        <br><br>

        <input type="submit" value="Suchen">
    </form>

    <h2>Ergebnis</h2>
    <p>
        <?php
            if (isset($_GET['stadt']) && isset($_GET['land']) && $_GET['stadt'] !== '' && $_GET['land'] !== '') {
                $stadt = $_GET['stadt'];
                $land = $_GET['land'];
                echo "Sie suchen nach Unterkuenften in " . htmlspecialchars($stadt) . ", " . htmlspecialchars($land) . ".";
            } else {
                echo "Bitte geben Sie eine Stadt und ein Land ein.";
            }
        ?>
    </p>

</body>
</html>
