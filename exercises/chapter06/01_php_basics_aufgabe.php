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

    <h2>Kontrollstrukturen und Arrays</h2>

    <h3>Summe eines Arrays</h3>
    <p>
        <?php
            // TODO 5: Array $jahre anlegen, mit foreach summieren, Summe ausgeben
        ?>
    </p>

    <h3>Technologien (assoziatives Array)</h3>
    <table border="1">
        <tr><th>Technologie</th><th>Erfahrung (Jahre)</th></tr>
        <?php
            // TODO 6: assoziatives Array $technologien anlegen und als Tabellenzeilen ausgeben
        ?>
    </table>

    <h3>Notentext</h3>
    <p>
        <?php
            // TODO 7: $note anlegen und mit switch/match den Notentext ausgeben
        ?>
    </p>

    <h3>Kleines Einmaleins</h3>
    <ul>
        <?php
            // TODO 8: $basiszahl anlegen und mit for-Schleife das Einmaleins ausgeben
        ?>
    </ul>

    <h2>Funktionen und Klassen</h2>

    <?php
        // TODO 9: Funktion pruefeVorzeichen($zahl, &$ergebnis) definieren
    ?>

    <h3>Vorzeichenprüfung</h3>
    <p>
        <?php
            // TODO 10: Funktion aufrufen und Ergebnis ausgeben
        ?>
    </p>

    <?php
        // TODO 11: Klasse Projekt definieren

        // TODO 12: Klasse Webprojekt definieren (extends Projekt)
    ?>

    <h3>Projekte</h3>
    <p>
        <?php
            // TODO 13: Projekt und Webprojekt instanziieren und ausgeben
        ?>
    </p>

</body>
</html>
