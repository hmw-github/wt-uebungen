<!--
    UEBUNG 2: KONTROLLSTRUKTUREN UND ARRAYS (Kapitel 6.2 - PHP-Sprachkonzepte: Arrays, Kontrollstrukturen)

    Aufgabenstellung:
    Ergaenzen Sie an den mit TODO markierten Stellen den fehlenden PHP-Code:

    TODO 1: Legen Sie ein indiziertes Array $zahlen mit mindestens 5 Zahlen an,
            summieren Sie alle Werte mittels foreach in einer Variablen $summe
            und geben Sie die Summe aus.
    TODO 2: Legen Sie ein assoziatives Array $produkte an (Produktname => Preis,
            mindestens 3 Eintraege). Iterieren Sie mit
            foreach ($produkte as $name => $preis) und geben Sie fuer jeden
            Eintrag eine Tabellenzeile (<tr><td>...</td><td>...</td></tr>) aus.
    TODO 3: Legen Sie eine Variable $note (Ganzzahl 1-6) an und geben Sie mittels
            switch (oder match) den passenden deutschen Notentext aus
            (1=sehr gut, 2=gut, 3=befriedigend, 4=ausreichend, 5=mangelhaft,
            6=ungenuegend).
    TODO 4: Legen Sie eine Variable $basiszahl an und geben Sie mittels for-Schleife
            das kleine Einmaleins dieser Zahl aus (z.B. $basiszahl * 1 bis
            $basiszahl * 10), jede Zeile als eigenen Absatz oder Listeneintrag.
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
            // TODO 1: Array $zahlen anlegen, mit foreach summieren, Summe ausgeben
        ?>
    </p>

    <h2>Produktliste (assoziatives Array)</h2>
    <table border="1">
        <tr><th>Produkt</th><th>Preis</th></tr>
        <?php
            // TODO 2: assoziatives Array $produkte anlegen und als Tabellenzeilen ausgeben
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
