<!--
    ÜBUNG 2: FORMULARVERARBEITUNG MIT POST (Kapitel 6.3 - Formularverarbeitung)

    Aufgabenstellung:
    Diese Datei wertet endlich das Kontaktformular aus kontakt.html aus
    (action="kontakt-verarbeiten.php", method="post" - siehe dort). Ergänzen
    Sie an den TODO-Stellen den fehlenden PHP-Code:

    TODO 1: Prüfen Sie mittels isset() und einer Leer-Prüfung, ob die
            PFLICHTFELDER $_POST['name'] und $_POST['email'] gesetzt UND
            nicht leer sind. Nur wenn das der Fall ist, wird der Block aus
            TODO 2 und TODO 3 ausgeführt (siehe die if/else-Struktur
            unten).
    TODO 2: Lesen Sie im if-Zweig alle Formularwerte in Variablen ein:
            $name, $email, $nachricht (direkt aus $_POST), $betreff und
            $rueckmeldung (mit dem Null-Coalescing-Operator ?? und
            sinnvollen Standardwerten, z.B. "anfrage" bzw. "email", falls
            nicht gesetzt) sowie $newsletter (Boolean: true, falls die
            Checkbox "newsletter" in $_POST vorkommt, sonst false -
            Checkboxen werden nur bei Auswahl mitgesendet, daher isset()
            statt eines Standardwerts verwenden).
    TODO 3: Geben Sie im if-Zweig eine Bestätigung aus, die $name, $email,
            $betreff, $rueckmeldung, $nachricht sowie den Newsletter-Status
            zusammenfasst. WICHTIG: Verpacken Sie dabei jeden Wert, der
            direkt vom Benutzer stammt, in htmlspecialchars(...), damit
            kein Cross-Site-Scripting (XSS) über das Formular möglich
            ist.
    TODO 4: Geben Sie im else-Zweig eine Fehlermeldung aus, dass Name und
            E-Mail-Adresse Pflichtfelder sind.
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

        <button id="burgerButton" class="burger-button" type="button">
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
        // TODO 1: prüfen, ob $_POST['name'] und $_POST['email'] gesetzt UND nicht leer sind (if/else selbst schreiben)

            // TODO 2: im if-Zweig Formularwerte in Variablen einlesen ($name, $email, $nachricht, $betreff, $rueckmeldung, $newsletter)

            // TODO 3: im if-Zweig Bestätigung mit htmlspecialchars(...) ausgeben

            // TODO 4: im else-Zweig Fehlermeldung ausgeben (Name und E-Mail sind Pflichtfelder)
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
