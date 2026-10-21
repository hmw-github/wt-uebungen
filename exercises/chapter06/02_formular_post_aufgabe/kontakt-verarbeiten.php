<!--
    ÜBUNG 2: FORMULARVERARBEITUNG MIT POST (Kapitel 6.3 - Formularverarbeitung)

    Aufgabenstellung:
    Diese Datei wertet endlich das Kontaktformular aus kontakt.html aus
    (action="kontakt-verarbeiten.php", method="post" - siehe dort). Ergänzen
    Sie an den TODO-Stellen den fehlenden PHP-Code:

    TODO 1: Die Bestätigung (TODO 2 und 3) erscheint nur, wenn Name UND
            E-Mail-Adresse übermittelt wurden und nicht leer sind. Andernfalls
            erscheint die Fehlermeldung aus TODO 4. Das gilt auch, wenn die
            Seite direkt (ohne Formular) aufgerufen wird.
    TODO 2: Alle Formularwerte stehen in Variablen bereit: $name, $email,
            $nachricht, $betreff, $rueckmeldung und $newsletter (true/false).
            Fehlt ein optionales Feld in der Anfrage, gibt es keine Warnung,
            sondern einen sinnvollen Standardwert (z.B. "anfrage" bzw.
            "email"). $newsletter ist nur true, wenn die Checkbox angekreuzt
            wurde.
    TODO 3: Eine Bestätigung fasst Name, E-Mail, Betreff, Rückmeldungsart,
            Nachricht und Newsletter-Status zusammen. WICHTIG: Eingaben werden
            immer wörtlich angezeigt und nie als HTML ausgeführt. Gibt man
            z.B. als Namen <b>Test</b> oder <script>alert(1)</script> ein,
            erscheint genau dieser Text auf der Seite (Schutz vor
            Cross-Site-Scripting, XSS).
    TODO 4: Fehlen Name oder E-Mail-Adresse, erscheint eine Fehlermeldung,
            dass beide Pflichtfelder sind.
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
        // TODO 1: Bestätigung nur, wenn Name und E-Mail vorhanden und nicht
        //         leer sind, sonst Fehlermeldung

            // TODO 2: Alle Formularwerte in Variablen bereitstellen ($name,
            //         $email, $nachricht, $betreff, $rueckmeldung,
            //         $newsletter)

            // TODO 3: Bestätigung mit allen Werten anzeigen, Eingaben dabei
            //         nie als HTML ausführen

            // TODO 4: Fehlermeldung (Name und E-Mail sind Pflichtfelder)
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
