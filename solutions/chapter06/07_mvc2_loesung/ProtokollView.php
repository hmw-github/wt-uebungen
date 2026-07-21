<?php
/*
    LOESUNGSVORSCHLAG - ProtokollView (View)
*/

class ProtokollView
{
    private $protokoll;

    public function __construct($protokoll)
    {
        $this->protokoll = $protokoll;
    }

    public function render()
    {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Notiz-Protokoll (MVC2)</title>
            <meta charset="UTF-8">
        </head>
        <body>

            <h1>Notiz-Protokoll (MVC2)</h1>

            <form method="post" action="">
                <label for="nachrichtFeld">Nachricht:</label>
                <input type="text" id="nachrichtFeld" name="nachricht">
                <input type="submit" value="Eintragen">
            </form>

            <h2>Bisherige Eintraege</h2>
            <ul>
                <?php foreach ($this->protokoll->alleEintraege() as $eintrag): ?>
                    <li><?= htmlspecialchars($eintrag) ?></li>
                <?php endforeach; ?>
            </ul>

        </body>
        </html>
        <?php
    }
}
