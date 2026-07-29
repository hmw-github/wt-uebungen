<!--
    ÜBUNG 6: SESSION-HANDLING (Kapitel 6.4 - Session-Handling)

    Aufgabenstellung:
    Die Kontaktseite bekommt zusätzlich ein kleines Gästebuch: Über ein
    Textfeld können Besucher/-innen eine kurze, öffentliche Nachricht
    hinterlassen, die mit Uhrzeit/Datum versehen dauerhaft (für die Dauer
    der Session) in einer Liste gesammelt wird. In Kapitel 6.5 (Übung 7)
    wird dieses Gästebuch in das MVC2-Muster überführt, in Kapitel 8
    (AJAX) wird es per Fetch statt per Seitenneuladen aktualisiert.
    Ergänzen Sie an den TODO-Stellen den fehlenden PHP-Code:

    TODO 1: Starten Sie die PHP-Session mit session_start(). Dies muss vor
            JEDER Ausgabe geschehen, deshalb steht der PHP-Block dafür
            bereits ganz am Dateianfang, noch vor dem "<!DOCTYPE html>".
    TODO 2: Prüfen Sie mit isset(), ob $_SESSION['gaestebucheintraege']
            bereits existiert. Falls nicht, initialisieren Sie es als
            leeres Array.
    TODO 3: Falls das Gästebuch-Formular abgeschickt wurde (Textfeld
            "gbnachricht" gesetzt und nicht leer): Hängen Sie einen neuen
            Eintrag der Form date("H:i:s d.m.Y") . " - " . <Nachricht> an
            $_SESSION['gaestebucheintraege'] an. Nutzen Sie htmlspecialchars()
            auf der Nachricht, bevor Sie sie anhängen, um XSS zu vermeiden.
    TODO 4: Geben Sie alle bisher gesammelten Einträge aus
            $_SESSION['gaestebucheintraege'] in einer Schleife als
            HTML-Liste (<li>) im Abschnitt "Gästebuch" aus.
-->
<?php
    // TODO 1: Session starten (session_start())

    // TODO 2: $_SESSION['gaestebucheintraege'] initialisieren, falls noch nicht vorhanden

    // TODO 3: neuen Eintrag anhängen, falls Gästebuch-Formular mit nicht-leerer Nachricht abgeschickt wurde
?>
<!DOCTYPE html>
<html>
<head>
    <title>Alex Berger - Portfolio - Kontakt</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/druck.css" media="print">

</head>
<body>

    <header>
        <a href="index.php">
            <img src="images/logo.png" alt="Logo Alex Berger" height="50">
        </a>

        <button id="burgerButton" class="burger-button" type="button" aria-label="Menü öffnen" aria-expanded="false" aria-controls="hauptnav">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav id="hauptnav">
            <a href="index.php">Startseite</a>
            <a href="ueber-mich.html">Über mich</a>
            <a href="projekte.html">Projekte</a>
        </nav>
    </header>

    <main>
    <h1>Kontakt</h1>

    <p>Ich freue mich über Nachrichten - schreiben Sie mir gerne!</p>

    <form action="kontakt-verarbeiten.php" method="post">

        <label for="nameFeld">Name:</label><br>
        <input type="text" id="nameFeld" name="name" required><br><br>

        <label for="emailFeld">E-Mail:</label><br>
        <input type="email" id="emailFeld" name="email" required><br><br>

        <p>Bevorzugte Rückmeldung:</p>
        <input type="radio" id="rueckmeldungEmail" name="rueckmeldung" value="email">
        <label for="rueckmeldungEmail">E-Mail</label><br>
        <input type="radio" id="rueckmeldungTelefon" name="rueckmeldung" value="telefon">
        <label for="rueckmeldungTelefon">Telefon</label><br><br>

        <label for="betreffFeld">Betreff:</label><br>
        <select id="betreffFeld" name="betreff">
            <option value="anfrage" selected>Anfrage</option>
            <option value="feedback">Feedback</option>
            <option value="sonstiges">Sonstiges</option>
        </select><br><br>

        <label for="nachrichtFeld">Nachricht:</label><br>
        <textarea id="nachrichtFeld" name="nachricht" rows="4" cols="30" required></textarea><br><br>

        <input type="checkbox" id="newsletterFeld" name="newsletter" value="ja">
        <label for="newsletterFeld">Ich möchte den Newsletter erhalten</label><br><br>

        <input type="submit" value="Absenden" class="btn">

    </form>

    <h2>Gästebuch</h2>

    <form action="" method="post">
        <label for="gbNachrichtFeld">Kurze Nachricht:</label><br>
        <input type="text" id="gbNachrichtFeld" name="gbnachricht">
        <input type="submit" value="Eintragen" class="btn">
    </form>

    <ul>
        <?php
            // TODO 4: alle Einträge aus $_SESSION['gaestebucheintraege'] als <li> ausgeben
        ?>
    </ul>

    </main>

    <footer>
        <p>
            <a href="https://github.com/alexberger" target="_blank">GitHub</a>
            &middot;
            <a href="rechtliches/impressum.html">Impressum</a>
        </p>
    </footer>

    <!-- Autor: Alex Berger -->

    <script src="js/main.js" defer></script>
</body>
</html>
