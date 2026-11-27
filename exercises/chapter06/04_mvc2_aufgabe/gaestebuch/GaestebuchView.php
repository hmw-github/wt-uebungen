<?php
/*
    View: erzeugt die HTML-Ausgabe der Seite (Formular + Liste der
    bisherigen Einträge).

    TODO 1: Eine View wird mit dem Model erzeugt, das sie später darstellen
            soll. Sie merkt es sich in der Eigenschaft $gaestebuch.
    TODO 2: render() gibt eine vollständige Seite im Look der übrigen
            Portfolio-Seiten aus (Stylesheet, Header mit Logo, Burger-Button
            und Navigation, Footer, siehe ../kontakt.php). Alle Links, Bilder
            und Stylesheets funktionieren auch aus dem Unterordner gaestebuch/
            heraus. Inhalt: Überschrift "Gästebuch", ein Formular mit Textfeld
            "gbnachricht" und Button "Eintragen", das per POST an diese Seite
            sendet, darunter alle Einträge des Models als Aufzählungsliste
            sowie ein Link zurück zur Kontaktseite.
*/

class GaestebuchView
{
    private $gaestebuch;

    public function __construct($gaestebuch)
    {
        // TODO 1: Model für die spätere Darstellung merken
    }

    public function render()
    {
        // Das Seitengerüst (Kopf, Header, Navigation, Footer) ist bereits
        // vorgegeben - die Pfade beginnen mit "../", weil diese Seite im
        // Unterordner gaestebuch/ liegt.
        // TODO 2: Formular, Einträge und Rück-Link im <main> ergänzen
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

        <button id="burgerButton" class="burger-button" type="button">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav id="hauptnav">
            <a href="../index.php">Startseite</a>
            <a href="../ueber-mich.html">Über mich</a>
            <a href="../projekte.html">Projekte</a>
        </nav>
    </header>

    <main>
    <h1>Gästebuch</h1>

    <form action="" method="post">
        <label for="gbNachrichtFeld">Ihre Nachricht:</label><br>
        <!-- TODO 2: Textfeld "gbnachricht" und Button "Eintragen" ergänzen -->
    </form>

    <ul>
        <?php
        // TODO 2: alle Einträge des Models ($this->gaestebuch) als <li> ausgeben
        ?>
    </ul>

    <!-- TODO 2: Link zurück zur Kontaktseite ergänzen -->

    </main>

    <footer>
        <p>
            <a href="https://github.com/alexberger" target="_blank">GitHub</a>
            &middot;
            <a href="../rechtliches/impressum.html">Impressum</a>
        </p>
    </footer>

    <script src="../js/main.js" defer></script>
</body>
</html>
        <?php
    }
}
