<!--
    ÜBUNG 1: GRID UND KOMPONENTEN (Kapitel 7.2–7.7) - Seite "Startseite"

    Aufgabenstellung:
    Ab jetzt ist Bootstrap 5 site-weit eingebunden (CDN, bereits fertig in
    allen Seiten ergänzt - kein TODO). Ergänzen Sie an den TODO-Stellen
    den fehlenden Code:

    TODO 1: Der Abschnitt "Meine Stärken" (Überschrift und Stärken-Boxen) ist
            zentriert, hat links und rechts etwas Abstand zum Fensterrand und
            wird auf sehr breiten Bildschirmen nicht beliebig breit.
    TODO 2: Die drei Stärken (Sauberer Code, Moderne Technologien,
            Zuverlässig, je mit Überschrift und kurzem Text) stehen ab einer
            Fensterbreite von 576px als drei gleich breite Spalten
            nebeneinander, auf schmaleren Bildschirmen untereinander.

    TODO 3: "Projekte ansehen" erscheint als großer, auffälliger Haupt-Button
            im Bootstrap-Stil (Primärfarbe) statt im eigenen Button-Stil aus
            Kapitel 4.

    Weitere TODOs dieser Übung finden Sie in technik-spielwiese.php
    (container vs. container-fluid), projekte.html (Buttons, Cards),
    kontakt.php (Buttons) und ueber-mich.html (Tabs), siehe _todos.md.
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

        <button id="burgerButton" class="burger-button" type="button">
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
        <!-- TODO 3: großer Haupt-Button im Bootstrap-Stil -->
        <a href="projekte.html" class="btn">Projekte ansehen</a>
    </p>

    <div>
        <p>Am liebsten arbeite ich mit <strong>HTML, CSS und JavaScript</strong>,
            beschäftige mich aber genauso gerne mit <em>serverseitigen</em>
            Themen wie PHP und REST-Schnittstellen.</p>
    </div>

    <p>Mein aktuelles Lieblingsthema ist gerade
        <span style="color: darkblue;">REST-APIs</span>.</p>

    <!-- TODO 1: "Meine Stärken" zentriert mit begrenzter Breite -->

        <h3>Meine Stärken</h3>

        <!-- TODO 2: drei Stärken nebeneinander (ab 576px), sonst untereinander -->

    <!-- Ende des Bereichs aus TODO 1 -->

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
