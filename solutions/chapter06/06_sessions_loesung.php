<?php
/*
    LOESUNGSVORSCHLAG - UEBUNG 6: SESSION-HANDLING
*/
    session_start();

    if (!isset($_SESSION['eintraege'])) {
        $_SESSION['eintraege'] = [];
    }

    if (isset($_POST['nachricht']) && trim($_POST['nachricht']) !== '') {
        $_SESSION['eintraege'][] = date("H:i:s d.m.Y") . " - " . $_POST['nachricht'];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Notiz-Protokoll</title>
    <meta charset="UTF-8">
</head>
<body>

    <h1>Notiz-Protokoll</h1>

    <form method="post" action="">
        <label for="nachrichtFeld">Nachricht:</label>
        <input type="text" id="nachrichtFeld" name="nachricht">
        <input type="submit" value="Eintragen">
    </form>

    <h2>Bisherige Eintraege</h2>
    <ul>
        <?php
            foreach ($_SESSION['eintraege'] as $eintrag) {
                echo "<li>" . htmlspecialchars($eintrag) . "</li>";
            }
        ?>
    </ul>

</body>
</html>
