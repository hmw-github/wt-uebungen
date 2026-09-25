<!--
    Startseite (bereits vollständig vorgegeben, kein Teil dieser Übung -
    die PHP-Sprachgrundlagen werden eigenständig in
    01_php_basics_aufgabe.php bzw. 01_php_basics_loesung.php erarbeitet)
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
            <a href="kontakt.php">Kontakt</a>
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
        $name = "Alex Berger";
        $studiengang = "Angewandte Informatik";
        $eingeschrieben = true;
    ?>

    <ul>
        <?php
            echo "<li>\$name ist vom Typ: " . gettype($name) . "</li>";
            echo "<li>\$studiengang ist vom Typ: " . gettype($studiengang) . "</li>";
            echo "<li>\$eingeschrieben ist vom Typ: " . gettype($eingeschrieben) . "</li>";
        ?>
    </ul>

    <p>
        <?php
            echo "Hallo, ich heiße " . $name . " und studiere " . $studiengang . ".";
        ?>
    </p>

    <p>
        <?php
            echo "Stand: " . date("H:i:s d.m.Y");
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
