<!--
    UEBUNG 1: PHP-GRUNDLAGEN UND AUSGABE (Kapitel 6.1/6.2 - Serverseitige HTML-Generierung, PHP-Sprachkonzepte)

    Aufgabenstellung:
    Diese Seite soll eine persoenliche Begruessung sowie den aktuellen Typ
    einiger Variablen und das aktuelle Datum/Uhrzeit ausgeben.
    Ergaenzen Sie an den mit TODO markierten Stellen den fehlenden PHP-Code:

    TODO 1: Legen Sie drei Variablen an: $name (String, Ihr Name),
            $alter (Integer) und $istStudent (Boolean).
    TODO 2: Geben Sie mit gettype() den Datentyp jeder der drei Variablen aus
            $name, $alter und $istStudent aus (z.B. in einer Liste).
    TODO 3: Geben Sie mittels echo und String-Verkettung (Operator .) einen
            Satz aus, der $name und $alter zu einem zusammenhaengenden Text
            kombiniert (z.B. "Hallo, ich heisse ... und bin ... Jahre alt.").
    TODO 4: Ermitteln Sie mit date() das aktuelle Datum und die aktuelle
            Uhrzeit im Format "H:i:s d.m.Y" und geben Sie das Ergebnis aus.
-->
<!DOCTYPE html>
<html>
<head>
    <title>PHP Grundlagen und Ausgabe</title>
    <meta charset="UTF-8">
</head>
<body>

    <h1>PHP-Grundlagen und Ausgabe</h1>

    <?php
        // TODO 1: Variablen $name, $alter, $istStudent anlegen
    ?>

    <h2>Datentypen</h2>
    <ul>
        <?php
            // TODO 2: Datentypen mit gettype() ausgeben, z.B. als <li>-Eintraege
        ?>
    </ul>

    <h2>Begruessung</h2>
    <p>
        <?php
            // TODO 3: Begruessungssatz mit echo und . (Verkettung) ausgeben
        ?>
    </p>

    <h2>Aktuelles Datum und Uhrzeit</h2>
    <p>
        <?php
            // TODO 4: aktuelles Datum/Uhrzeit mit date() ausgeben
        ?>
    </p>

</body>
</html>
