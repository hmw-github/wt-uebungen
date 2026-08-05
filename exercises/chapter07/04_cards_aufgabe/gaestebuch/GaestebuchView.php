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
            <link rel="stylesheet" href="../css/druck.css" media="print">

        </head>
        <body>

            <header>
                <a href="../index.php">
                    <img src="../images/logo.png" alt="Logo Alex Berger" height="50">
                </a>

                <button id="burgerButton" class="burger-button" type="button" aria-label="Menü öffnen" aria-expanded="false" aria-controls="hauptnav">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <nav id="hauptnav">
                    <a href="../index.php">Startseite</a>
                    <a href="../ueber-mich.html">Über mich</a>
                    <a href="../projekte.html">Projekte</a>
                    <a href="../kontakt.php">Kontakt</a>
                </nav>
            </header>

            <main>
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

            </main>

            <footer>
                <p>
                    <a href="https://github.com/alexberger" target="_blank">GitHub</a>
                    &middot;
                    <a href="../rechtliches/impressum.html">Impressum</a>
                </p>
            </footer>

            <!-- Autor: Alex Berger -->

            <script src="../js/main.js" defer></script>
        </body>
        </html>
        <?php
    }
}
