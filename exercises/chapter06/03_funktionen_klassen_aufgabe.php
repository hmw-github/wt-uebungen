<!--
    ÜBUNG 3: FUNKTIONEN UND KLASSEN (Kapitel 6.2 - PHP-Sprachkonzepte: Funktionen, Klassen, Vererbung)

    Aufgabenstellung:
    Die Klassen Projekt/Webprojekt kennen Sie bereits in JavaScript aus
    Kapitel 5 (Übung 5) - hier entwerfen Sie dasselbe Konzept in PHP.
    Ergänzen Sie an den TODO-Stellen den fehlenden PHP-Code:

    TODO 1: Schreiben Sie eine Funktion pruefeVorzeichen($zahl, &$ergebnis), die
            per Wert die Zahl $zahl entgegennimmt und per Referenz in $ergebnis
            den String "positiv", "negativ" oder "null" ablegt, je nachdem ob
            $zahl > 0, < 0 oder == 0 ist. Die Funktion selbst gibt nichts zurück.
    TODO 2: Rufen Sie pruefeVorzeichen() für eine Beispielzahl auf und geben Sie
            den über die Referenzvariable ermittelten Wert von $ergebnis aus.
    TODO 3: Erstellen Sie eine Klasse Projekt mit den privaten Eigenschaften
            $titel und $technologie, einem Konstruktor
            __construct($titel, $technologie) und einer Methode
            __toString(), die einen String wie "'Titel' - Technologie"
            zurückgibt.
    TODO 4: Erstellen Sie eine Klasse Webprojekt, die von Projekt erbt
            (extends Projekt) und zusätzlich die private Eigenschaft $jahr
            sowie einen eigenen Konstruktor besitzt, der den Konstruktor der
            Basisklasse über parent::__construct(...) aufruft. Überschreiben
            Sie __toString(), sodass zusätzlich das Jahr ausgegeben wird,
            wobei die Basisklassen-Darstellung über parent::__toString()
            wiederverwendet wird.
    TODO 5: Instanziieren Sie ein Projekt und ein Webprojekt und geben Sie
            beide (z.B. mit echo) aus.
-->
<!DOCTYPE html>
<html>
<head>
    <title>Funktionen und Klassen</title>
    <meta charset="UTF-8">
</head>
<body>

    <h1>Funktionen und Klassen</h1>

    <?php
        // TODO 1: Funktion pruefeVorzeichen($zahl, &$ergebnis) definieren
    ?>

    <h2>Vorzeichenprüfung</h2>
    <p>
        <?php
            // TODO 2: Funktion aufrufen und Ergebnis ausgeben
        ?>
    </p>

    <?php
        // TODO 3: Klasse Projekt definieren

        // TODO 4: Klasse Webprojekt definieren (extends Projekt)
    ?>

    <h2>Projekte</h2>
    <p>
        <?php
            // TODO 5: Projekt und Webprojekt instanziieren und ausgeben
        ?>
    </p>

</body>
</html>
