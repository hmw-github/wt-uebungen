<?php
    // Lege Session an oder lade sie in $_SESSION-Array
    // wird erkannt an Session-Cookie
    session_start(); 

    if (isset($_SESSION['counter'])) {
        // Session vorhanden, Counter inkrementieren
        $counter = $_SESSION['counter'] + 1;
        $_SESSION['counter'] = $counter;
    } else {
        // Session initialisieren
        $counter = 1;
        $_SESSION['counter'] = $counter;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <form action="" method="post">
        <p>
            Counter: <?=$counter?>
        </p>
        <button>refresh</button>
    </form>
</body>
</html>