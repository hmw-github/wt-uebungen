<?php
/*
    LÖSUNGSVORSCHLAG - View GaestebuchView
*/

class GaestebuchView
{
    private $gaestebuch;

    public function __construct($gaestebuch)
    {
        $this->gaestebuch = $gaestebuch;
    }

    public function render()
    {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Alex Berger - Portfolio - Gästebuch</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../css/style.css">
        </head>
        <body>

            <h1>Gästebuch</h1>

            <form action="" method="post">
                <label for="gbNachrichtFeld">Kurze Nachricht:</label><br>
                <input type="text" id="gbNachrichtFeld" name="gbnachricht">
                <input type="submit" value="Eintragen" class="btn">
            </form>

            <ul>
                <?php foreach ($this->gaestebuch->alleEintraege() as $eintrag): ?>
                    <li><?= $eintrag ?></li>
                <?php endforeach; ?>
            </ul>

            <p><a href="../kontakt.php">Zurück zur Kontaktseite</a></p>

        </body>
        </html>
        <?php
    }
}
