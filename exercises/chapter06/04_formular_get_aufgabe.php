<!--
    UEBUNG 4: FORMULARVERARBEITUNG MIT GET (Kapitel 6.3 - Formularverarbeitung)

    Aufgabenstellung:
    Diese Seite enthaelt ein Suchformular (Stadt, Land), das per GET an sich
    selbst gesendet wird. Ergaenzen Sie an den mit TODO markierten Stellen den
    fehlenden PHP-Code:

    TODO 1: Pruefen Sie mittels isset() (oder dem Null-Coalescing-Operator ??),
            ob das Formular bereits abgeschickt wurde (d.h. ob $_GET['stadt']
            und $_GET['land'] gesetzt sind).
    TODO 2: Falls das Formular abgeschickt wurde: Lesen Sie die Werte aus
            $_GET['stadt'] und $_GET['land'] und geben Sie einen Ergebnissatz
            aus (z.B. "Sie suchen nach Unterkuenften in <Stadt>, <Land>.").
    TODO 3: Befuellen Sie das value-Attribut des Textfelds "stadt" erneut mit
            dem zuletzt gesuchten Wert aus $_GET, damit das Formular nach dem
            Absenden nicht leer erscheint (leerer String, falls noch nichts
            gesucht wurde).
    TODO 4: Befuellen Sie das value-Attribut des Textfelds "land" analog zu
            TODO 3 erneut mit dem zuletzt gesuchten Wert aus $_GET.
-->
<!DOCTYPE html>
<html>
<head>
    <title>Unterkunftssuche</title>
    <meta charset="UTF-8">
</head>
<body>

    <h1>Unterkunftssuche</h1>

    <form method="get" action="">
        <label for="stadtFeld">Stadt:</label>
        <input type="text" id="stadtFeld" name="stadt" value="<?php // TODO 3: Wert aus $_GET wieder einsetzen ?>">
        <br><br>

        <label for="landFeld">Land:</label>
        <input type="text" id="landFeld" name="land" value="<?php // TODO 4: Wert aus $_GET wieder einsetzen ?>">
        <br><br>

        <input type="submit" value="Suchen">
    </form>

    <h2>Ergebnis</h2>
    <p>
        <?php
            // TODO 1: pruefen, ob das Formular abgeschickt wurde (isset()/??)

                // TODO 2: Werte aus $_GET lesen und Ergebnissatz ausgeben

        ?>
    </p>

</body>
</html>
