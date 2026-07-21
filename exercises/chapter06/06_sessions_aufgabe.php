<?php
/*
    UEBUNG 6: SESSION-HANDLING (Kapitel 6.4 - Session-Handling)

    Aufgabenstellung:
    Diese Seite implementiert ein einfaches "Notiz-Protokoll": Ueber ein
    Textfeld koennen Nachrichten abgeschickt werden, die mit Uhrzeit/Datum
    versehen dauerhaft (fuer die Dauer der Session) in einer Liste unterhalb
    des Formulars gesammelt werden.
    Ergaenzen Sie an den mit TODO markierten Stellen den fehlenden PHP-Code:

    TODO 1: Starten Sie die PHP-Session mit session_start(). Dies muss vor
            jeder Ausgabe geschehen und steht daher ganz am Dateianfang -
            noch vor dem schliessenden ?> dieses ersten PHP-Blocks.
    TODO 2: Pruefen Sie mit isset(), ob $_SESSION['eintraege'] bereits
            existiert. Falls nicht, initialisieren Sie es als leeres Array.
    TODO 3: Falls das Formular abgeschickt wurde (Textfeld "nachricht" gesetzt
            und nicht leer): Haengen Sie einen neuen Eintrag der Form
            date("H:i:s d.m.Y") . " - " . <Nachricht> an $_SESSION['eintraege']
            an.
    TODO 4: Geben Sie alle bisher gesammelten Eintraege aus $_SESSION['eintraege']
            in einer Schleife als HTML-Liste (<li>) aus.
*/

    // TODO 1: Session starten (session_start())

    // TODO 2: $_SESSION['eintraege'] initialisieren, falls noch nicht vorhanden

    // TODO 3: neuen Eintrag anhaengen, falls Formular mit nicht-leerer Nachricht abgeschickt wurde
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
            // TODO 4: alle Eintraege aus $_SESSION['eintraege'] als <li> ausgeben
        ?>
    </ul>

</body>
</html>
