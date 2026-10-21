<!--
    ÜBUNG 1: PHP-GRUNDLAGEN (Kapitel 6.1/6.2 - PHP-Sprachkonzepte: Ausgabe,
    Kontrollstrukturen, Arrays, Funktionen, Klassen)

    Aufgabenstellung:
    Diese Seite ist bewusst eine eigenständige Datei ohne Bezug zur
    Portfolio-Website und übt anhand der immer gleichen Projektdaten von
    Alex Berger (Titel, Technologie, Jahr) grundlegende
    PHP-Sprachkonzepte ein. Ergänzen Sie an den TODO-Stellen den fehlenden
    PHP-Code:
-->
<!DOCTYPE html>
<html>
<head>
    <title>PHP-Grundlagen</title>
    <meta charset="UTF-8">
</head>
<body>

    <h1>PHP-Grundlagen</h1>

    <h2>Steckbrief</h2>

    <?php
        // TODO 1: Steckbriefdaten (Name, Studiengang, eingeschrieben ja/nein)
        //         bereitstellen
    ?>

    <ul>
        <?php
            // TODO 2: Datentyp jeder Steckbriefangabe als Listeneintrag
            //         anzeigen
        ?>
    </ul>

    <p>
        <?php
            // TODO 3: Begrüßungssatz mit Name und Studiengang anzeigen
        ?>
    </p>

    <p>
        <?php
            // TODO 4: Aktuellen Zeitpunkt als "Stand: ..." anzeigen
        ?>
    </p>

    <h2>Kontrollstrukturen und Arrays</h2>

    <h3>Summe eines Arrays</h3>
    <p>
        <?php
            // TODO 5: Summe der Projektjahre 2022 bis 2026 anzeigen
        ?>
    </p>

    <h3>Technologien (assoziatives Array)</h3>
    <table border="1">
        <tr><th>Technologie</th><th>Erfahrung (Jahre)</th></tr>
        <?php
            // TODO 6: Technologien mit Erfahrung in Jahren als Tabellenzeilen
            //         anzeigen
        ?>
    </table>

    <h3>Notentext</h3>
    <p>
        <?php
            // TODO 7: Eine Note (1-6) als Notentext anzeigen
        ?>
    </p>

    <h3>Kleines Einmaleins</h3>
    <ul>
        <?php
            // TODO 8: Einmaleins einer Zahl als Liste anzeigen
        ?>
    </ul>

    <h2>Funktionen und Klassen</h2>

    <?php
        // TODO 9: Funktion pruefeVorzeichen: liefert
        //         "positiv"/"negativ"/"null" über ihren zweiten Parameter
    ?>

    <h3>Vorzeichenprüfung</h3>
    <p>
        <?php
            // TODO 10: Vorzeichen einer Beispielzahl ermitteln und anzeigen
        ?>
    </p>

    <?php
        // TODO 11: Klasse Projekt (Titel, Technologie, Textdarstellung)

        // TODO 12: Klasse Webprojekt: Projekt mit zusätzlichem Jahr
    ?>

    <h3>Projekte</h3>
    <p>
        <?php
            // TODO 13: Ein Projekt und ein Webprojekt anzeigen
        ?>
    </p>

</body>
</html>
