<!--
    ÜBUNG 1: PHP-GRUNDLAGEN UND AUSGABE (Kapitel 6.1/6.2)

    Aufgabenstellung:
    Die Startseite wird von jetzt an serverseitig mit PHP erzeugt (daher die
    Endung .php statt .html - beachten Sie, dass auch die Links in den
    anderen Seiten bereits entsprechend angepasst wurden). Ergänzen Sie an
    den TODO-Stellen den fehlenden PHP-Code:

    TODO 1: Legen Sie drei Variablen an: $name (String, "Alex Berger"),
            $studiengang (String, "Angewandte Informatik") und
            $eingeschrieben (Boolean, true).
    TODO 2: Geben Sie mit gettype() den Datentyp jeder der drei Variablen
            als <li>-Eintrag aus.
    TODO 3: Geben Sie mittels echo und String-Verkettung (Operator .) einen
            Begrüßungssatz aus, der $name und $studiengang kombiniert
            (z.B. "Hallo, ich heiße ... und studiere ... .").
    TODO 4: Ermitteln Sie mit date() das aktuelle Datum und die aktuelle
            Uhrzeit im Format "H:i:s d.m.Y" und geben Sie es als
            "Stand: ..." aus.
-->
<!DOCTYPE html>
<html>
<head>
    <title>Alex Berger - Portfolio - Startseite</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/druck.css" media="print">

    <script>
        console.log("Startseite wird geladen...");
    </script>

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
            <a href="ueber-mich.html">Über mich</a>
            <a href="projekte.html">Projekte</a>
            <a href="kontakt.html">Kontakt</a>
        </nav>
    </header>

    <main>
    <h1>Alex Berger</h1>

    <p>Ich studiere Angewandte Informatik mit Schwerpunkt Web-Technologien.</p>

    <p>
        <a href="projekte.html" class="btn">Projekte ansehen</a>
    </p>

    <div>
        <p>Am liebsten arbeite ich mit <strong>HTML, CSS und JavaScript</strong>,
            beschäftige mich aber genauso gerne mit <em>serverseitigen</em>
            Themen wie PHP und REST-Schnittstellen.</p>
    </div>

    <p>Mein aktuelles Lieblingsthema ist gerade
        <span style="color: darkblue;">REST-APIs</span>.</p>

    <h2>Steckbrief</h2>

    <?php
        // TODO 1: Variablen $name, $studiengang, $eingeschrieben anlegen
    ?>

    <ul>
        <?php
            // TODO 2: Datentypen mit gettype() als <li>-Einträge ausgeben
        ?>
    </ul>

    <p>
        <?php
            // TODO 3: Begrüßungssatz mit echo und . (Verkettung) ausgeben
        ?>
    </p>

    <p>
        <?php
            // TODO 4: aktuelles Datum/Uhrzeit mit date() als "Stand: ..." ausgeben
        ?>
    </p>

    <pre>
    function gruss(name) {
        return "Hallo, " + name + "!";
    }
    </pre>

    <a href="javascript:alert('Diese Seite wurde mit HTML, CSS und JavaScript gebaut.')">Kleinen Fakt anzeigen</a>

    <p>
        <button onclick="zeigeAlert()">Info anzeigen</button>
    </p>

    <hr>

    </main>

    <footer>
        <p>
            <a href="https://github.com/alexberger" target="_blank">GitHub</a>
            &middot;
            <a href="rechtliches/impressum.html">Impressum</a>
        </p>
    </footer>

    <!-- Autor: Alex Berger -->

    <script src="js/begruessung.js"></script>

    <script src="js/main.js" defer></script>
</body>
</html>
