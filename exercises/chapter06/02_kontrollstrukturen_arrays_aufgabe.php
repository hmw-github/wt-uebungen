<!--
    ÜBUNG 2: KONTROLLSTRUKTUREN UND ARRAYS (Kapitel 6.2 - PHP-Sprachkonzepte: Arrays, Kontrollstrukturen)

    Aufgabenstellung:
    Diese und die nächsten beiden Übungen (2-4) sind bewusst eigenständige
    Dateien, thematisch weiterhin an die Portfolio-Website angelehnt. Erst
    Übung 5 (Formularverarbeitung mit POST) greift wieder direkt in die
    Website ein (das Kontaktformular aus Kapitel 3 wird dort tatsächlich
    ausgewertet). Ergänzen Sie an den TODO-Stellen den fehlenden PHP-Code:

    TODO 1: Legen Sie ein indiziertes Array $jahre mit den Werten 2022, 2023,
            2024, 2025 und 2026 an, summieren Sie alle Werte mittels foreach
            in einer Variablen $summe und geben Sie die Summe aus.
    TODO 2: Legen Sie ein assoziatives Array $technologien an
            (Technologie => Erfahrung in Jahren, mindestens 3 Einträge,
            z.B. "HTML" => 4, "CSS" => 4, "JavaScript" => 3). Iterieren Sie
            mit foreach ($technologien as $technologie => $jahre) und geben
            Sie für jeden Eintrag eine Tabellenzeile
            (<tr><td>...</td><td>...</td></tr>) aus.
    TODO 3: Legen Sie eine Variable $note (Ganzzahl 1-6) an und geben Sie
            mittels switch (oder match) den passenden deutschen Notentext
            aus (1=sehr gut, 2=gut, 3=befriedigend, 4=ausreichend,
            5=mangelhaft, 6=ungenügend).
    TODO 4: Legen Sie eine Variable $basiszahl an und geben Sie mittels
            for-Schleife das kleine Einmaleins dieser Zahl aus (z.B.
            $basiszahl * 1 bis $basiszahl * 10), jede Zeile als eigenen
            Listeneintrag.
-->
<!DOCTYPE html>
<html>
<head>
    <title>Kontrollstrukturen und Arrays</title>
    <meta charset="UTF-8">
</head>
<body>

    <h1>Kontrollstrukturen und Arrays</h1>

    <h2>Summe eines Arrays</h2>
    <p>
        <?php
            // TODO 1: Array $jahre anlegen, mit foreach summieren, Summe ausgeben
        ?>
    </p>

    <h2>Technologien (assoziatives Array)</h2>
    <table border="1">
        <tr><th>Technologie</th><th>Erfahrung (Jahre)</th></tr>
        <?php
            // TODO 2: assoziatives Array $technologien anlegen und als Tabellenzeilen ausgeben
        ?>
    </table>

    <h2>Notentext</h2>
    <p>
        <?php
            // TODO 3: $note anlegen und mit switch/match den Notentext ausgeben
        ?>
    </p>

    <h2>Kleines Einmaleins</h2>
    <ul>
        <?php
            // TODO 4: $basiszahl anlegen und mit for-Schleife das Einmaleins ausgeben
        ?>
    </ul>

</body>
</html>
