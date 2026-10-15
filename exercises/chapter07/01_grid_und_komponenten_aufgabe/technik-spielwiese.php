<!--
    Technik-Spielwiese: Sammlung kleiner Code-Demos (PHP-Grundlagen,
    JavaScript-Einbindung), die von der Startseite hierher verschoben
    wurden, um die Startseite aufgeräumt zu halten.

    ÜBUNG 1: GRID UND KOMPONENTEN (Kapitel 7.2–7.7) - Technik-Spielwiese

    Aufgabenstellung:
    TODO 1: Erstellen Sie im Abschnitt "Container-Vergleich" ein div der
            Klasse "container" mit sichtbarer Hintergrundfarbe (Klasse
            "beispiel-container"), das den Text "Ich bin ein 'container' -
            zentriert mit fester maximaler Breite" enthält.
    TODO 2: Erstellen Sie direkt darunter ein div der Klasse
            "container-fluid" mit sichtbarer Hintergrundfarbe (Klasse
            "beispiel-fluid"), das den Text "Ich bin ein 'container-fluid'
            - immer 100% Bildschirmbreite" enthält, damit der Unterschied
            zu TODO 1 optisch erkennbar ist. Platzieren Sie beide bewusst
            AUSSERHALB des "container mt-4"-Wrappers oben auf dieser
            Seite, damit der Unterschied sichtbar bleibt.
-->
<!DOCTYPE html>
<html>
<head>
    <title>Alex Berger - Portfolio - Technik-Spielwiese</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/druck.css" media="print">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
            <a href="kontakt.php">Kontakt</a>
        </nav>
    </header>

    <main>

        <div class="container mt-4">

            <h1>Technik-Spielwiese</h1>

            <p>Hier sammle ich kleine Code-Demos, die mir beim Lernen geholfen haben.</p>

            <?php
                $name = "Alex Berger";
                $studiengang = "Angewandte Informatik";
                $eingeschrieben = true;
            ?>

            <div class="technik-tests">
                <h6>PHP gettype() Tests:</h6>
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

                <?php
                    echo "Stand: " . date("H:i:s d.m.Y");
                ?>
            </div>

            <div class="technik-tests">
                <h5>Code anzeigen:</h5>
                <pre>
    function gruss(name) {
        return "Hallo, " + name + "!";
    }
                </pre>
            </div>

            <div class="technik-tests">
                <h5>2 x alert (Link + Button):</h5>
                <a href="javascript:alert('Diese Seite wurde mit HTML, CSS und JavaScript gebaut.')">Kleinen Fakt anzeigen</a>

                <p>
                    <button class="btn btn-success" onclick="zeigeAlert()">Info anzeigen</button>
                </p>
            </div>

        </div>
    </main>

    <div>
        <h2 class="mt-4">Container-Vergleich</h2>

        <!-- TODO 1: div class="container" mit Klasse "beispiel-container" -->

        <!-- TODO 2: div class="container-fluid" mit Klasse "beispiel-fluid" -->
    </div>

    <footer>
        <p>
            <a href="https://github.com/alexberger" target="_blank">GitHub</a>
            &middot;
            <a href="rechtliches/impressum.html">Impressum</a>
        </p>
    </footer>

    <!-- Autor: Alex Berger -->

    <script src="js/begruessung.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js" defer></script>
</body>
</html>
