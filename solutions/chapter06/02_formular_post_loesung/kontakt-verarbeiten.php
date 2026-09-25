<!--
    LÖSUNGSVORSCHLAG - ÜBUNG 2: FORMULARVERARBEITUNG MIT POST
-->
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
    <h1>Kontaktanfrage</h1>

    <?php
        if (isset($_POST['name']) && isset($_POST['email']) && $_POST['name'] !== '' && $_POST['email'] !== '') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $nachricht = $_POST['nachricht'];
            $betreff = $_POST['betreff'] ?? 'anfrage';
            $rueckmeldung = $_POST['rueckmeldung'] ?? 'email';
            $newsletter = isset($_POST['newsletter']);

            echo "<p>Vielen Dank, " . htmlspecialchars($name) . "! Ihre Nachricht wurde empfangen.</p>";
            echo "<ul>";
            echo "<li>E-Mail: " . htmlspecialchars($email) . "</li>";
            echo "<li>Betreff: " . htmlspecialchars($betreff) . "</li>";
            echo "<li>Bevorzugte Rückmeldung: " . htmlspecialchars($rueckmeldung) . "</li>";
            echo "<li>Nachricht: " . htmlspecialchars($nachricht) . "</li>";
            echo "<li>Newsletter gewünscht: " . ($newsletter ? "ja" : "nein") . "</li>";
            echo "</ul>";
        } else {
            echo "<p>Name und E-Mail-Adresse sind Pflichtfelder. Bitte füllen Sie beide Felder aus.</p>";
        }
    ?>

    <p><a href="kontakt.html">Zurück zum Kontaktformular</a></p>

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
