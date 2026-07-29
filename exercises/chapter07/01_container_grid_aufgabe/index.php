<!--
    ÜBUNG 1: CONTAINER UND GRID (Kapitel 7.2 - Container / 7.3 - Grid)

    Aufgabenstellung:
    Ab jetzt ist Bootstrap 5 site-weit eingebunden (CDN, bereits fertig in
    allen Seiten ergänzt - kein TODO). Ergänzen Sie an den TODO-Stellen
    den fehlenden Code:

    TODO 1: Umschließen Sie den Abschnitt "Meine Stärken" (Überschrift
            und die drei Vorteils-Boxen) mit einem div der Klasse
            "container", damit der Inhalt zentriert und responsive
            dargestellt wird.
    TODO 2: Erstellen Sie innerhalb dieses Containers eine Bootstrap-Grid-
            Zeile (div class="row") mit drei Spalten (je div
            class="col-sm-4"), die je eine der drei vorgegebenen Stärken
            (Sauberer Code, Moderne Technologien, Zuverlässig) mit
            Überschrift und kurzem Text enthalten. Die drei Spalten
            müssen sich zu 12 aufsummieren.
    TODO 3: Erstellen Sie im Abschnitt "Container-Vergleich" (bewusst
            AUSSERHALB des Containers aus TODO 1, damit der Unterschied
            sichtbar bleibt) ein div der Klasse "container" mit sichtbarer
            Hintergrundfarbe (Klasse "beispiel-container"), das den Text
            "Ich bin ein 'container' - zentriert mit fester maximaler Breite"
            enthält.
    TODO 4: Erstellen Sie direkt darunter ein div der Klasse "container-fluid"
            mit sichtbarer Hintergrundfarbe (Klasse "beispiel-fluid"), das den
            Text "Ich bin ein 'container-fluid' - immer 100% Bildschirmbreite"
            enthält, damit der Unterschied zu TODO 3 optisch erkennbar ist.
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
        <a href="projekte.html" class="btn">Projekte ansehen</a>
    </p>

    <div>
        <p>Am liebsten arbeite ich mit <strong>HTML, CSS und JavaScript</strong>,
            beschäftige mich aber genauso gerne mit <em>serverseitigen</em>
            Themen wie PHP und REST-Schnittstellen.</p>
    </div>

    <p>Mein aktuelles Lieblingsthema ist gerade
        <span style="color: darkblue;">REST-APIs</span>.</p>

    <!-- TODO 1: div class="container" öffnen -->

        <h3>Meine Stärken</h3>

        <!-- TODO 2: Grid-Zeile mit drei col-sm-4 Spalten (Sauberer Code, Moderne Technologien, Zuverlässig) -->

    <!-- Ende container (TODO 1) -->

    <h2 class="mt-4">Container-Vergleich</h2>

    <!-- TODO 3: div class="container" mit Klasse "beispiel-container" -->

    <!-- TODO 4: div class="container-fluid" mit Klasse "beispiel-fluid" -->

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
