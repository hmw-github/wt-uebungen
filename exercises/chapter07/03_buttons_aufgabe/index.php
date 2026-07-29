<!--
    ÜBUNG 3: BUTTONS (Kapitel 7.5 - Buttons)

    Aufgabenstellung:
    Die Schaltflächen der Website nutzen bisher die eigene CSS-Klasse
    "btn" aus Kapitel 4. Ersetzen Sie sie durch die passenden
    Bootstrap-Button-Klassen (TODO 1 in dieser Datei, TODO 2 in
    projekte.html, TODO 3 und TODO 4 in kontakt.php):

    TODO 1: Ersetzen Sie bei "Projekte ansehen" die Klasse "btn" durch
            "btn btn-primary btn-lg" (großer, auffälliger Haupt-Button).
-->
<!--
    LÖSUNGSVORSCHLAG - ÜBUNG 1: CONTAINER UND GRID - Seite "Startseite"
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
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
            <a href="technik-spielwiese.php">Technik-Spielwiese</a>
        </nav>
    </header>

    <main>
    <h1>Alex Berger</h1>

    <p>Ich studiere Angewandte Informatik mit Schwerpunkt Web-Technologien.</p>

    <p>
        <!-- TODO 1: Klasse "btn" durch "btn btn-primary btn-lg" ersetzen -->
        <a href="projekte.html" class="btn">Projekte ansehen</a>
    </p>

    <div>
        <p>Am liebsten arbeite ich mit <strong>HTML, CSS und JavaScript</strong>,
            beschäftige mich aber genauso gerne mit <em>serverseitigen</em>
            Themen wie PHP und REST-Schnittstellen.</p>
    </div>

    <p>Mein aktuelles Lieblingsthema ist gerade
        <span style="color: darkblue;">REST-APIs</span>.</p>

    <div class="container">

        <h3>Meine Stärken</h3>

        <div class="row">
            <div class="col-sm-4">
                <div class="staerke-box">
                    <h5>Sauberer Code</h5>
                    <p>Gut lesbarer, gewartbarer Code steht bei mir an erster Stelle.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="staerke-box">
                    <h5>Moderne Technologien</h5>
                    <p>HTML, CSS, JavaScript, PHP und REST-APIs setze ich gezielt ein.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="staerke-box">
                    <h5>Zuverlässig</h5>
                    <p>Absprachen und Termine halte ich zuverlässig ein.</p>
                </div>
            </div>
        </div>

    </div>

    <h2 class="mt-4">Container-Vergleich</h2>

    <div class="container beispiel-container">
        Ich bin ein 'container' - zentriert mit fester maximaler Breite
    </div>

    <div class="container-fluid beispiel-fluid">
        Ich bin ein 'container-fluid' - immer 100% Bildschirmbreite
    </div>

    </main>

    <footer>
        <p>
            <a href="https://github.com/alexberger" target="_blank">GitHub</a>
            &middot;
            <a href="rechtliches/impressum.html">Impressum</a>
        </p>
    </footer>

    <!-- Autor: Alex Berger -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js" defer></script>
</body>
</html>
