<!--
    LOESUNGSVORSCHLAG - UEBUNG 5: FORMULARVERARBEITUNG MIT POST
-->
<!DOCTYPE html>
<html>
<head>
    <title>Registrierung</title>
    <meta charset="UTF-8">
</head>
<body>

    <h1>Registrierung</h1>

    <?php
        $abgeschickt = isset($_POST['vorname']);

        if ($abgeschickt) {
            $vorname = $_POST['vorname'];
            $geschlecht = $_POST['geschlecht'] ?? '';
            $agbAkzeptiert = isset($_POST['agb']);
            $land = $_POST['land'] ?? '';
        }
    ?>

    <form method="post" action="">

        <label for="vornameFeld">Vorname:</label>
        <input type="text" id="vornameFeld" name="vorname" value="<?= $abgeschickt ? htmlspecialchars($vorname) : '' ?>">
        <br><br>

        <p>Geschlecht:</p>
        <input type="radio" id="geschlechtM" name="geschlecht" value="maennlich" <?= ($abgeschickt && $geschlecht === 'maennlich') ? 'checked' : '' ?>>
        <label for="geschlechtM">maennlich</label><br>
        <input type="radio" id="geschlechtW" name="geschlecht" value="weiblich" <?= ($abgeschickt && $geschlecht === 'weiblich') ? 'checked' : '' ?>>
        <label for="geschlechtW">weiblich</label><br>
        <input type="radio" id="geschlechtD" name="geschlecht" value="divers" <?= ($abgeschickt && $geschlecht === 'divers') ? 'checked' : '' ?>>
        <label for="geschlechtD">divers</label><br><br>

        <input type="checkbox" id="agbFeld" name="agb" value="akzeptiert" <?= ($abgeschickt && $agbAkzeptiert) ? 'checked' : '' ?>>
        <label for="agbFeld">Ich akzeptiere die AGB</label><br><br>

        <label for="landFeld">Land:</label>
        <select id="landFeld" name="land">
            <option value="de" <?= ($abgeschickt && $land === 'de') ? 'selected' : '' ?>>Deutschland</option>
            <option value="at" <?= ($abgeschickt && $land === 'at') ? 'selected' : '' ?>>Oesterreich</option>
            <option value="ch" <?= ($abgeschickt && $land === 'ch') ? 'selected' : '' ?>>Schweiz</option>
        </select><br><br>

        <input type="submit" value="Registrieren">

    </form>

    <h2>Zusammenfassung</h2>
    <p>
        <?php
            if ($abgeschickt) {
                echo "Vorname: " . htmlspecialchars($vorname) . "<br>";
                echo "Geschlecht: " . htmlspecialchars($geschlecht) . "<br>";
                echo "AGB akzeptiert: " . ($agbAkzeptiert ? "ja" : "nein") . "<br>";
                echo "Land: " . htmlspecialchars($land);
            } else {
                echo "Noch keine Registrierung abgeschickt.";
            }
        ?>
    </p>

</body>
</html>
