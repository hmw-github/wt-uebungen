<!--
    UEBUNG 3: FUNKTIONEN UND KLASSEN (Kapitel 6.2 - PHP-Sprachkonzepte: Funktionen, Klassen, Vererbung)

    Aufgabenstellung:
    Ergaenzen Sie an den mit TODO markierten Stellen den fehlenden PHP-Code:

    TODO 1: Schreiben Sie eine Funktion pruefeVorzeichen($zahl, &$ergebnis), die
            per Wert die Zahl $zahl entgegennimmt und per Referenz in $ergebnis
            den String "positiv", "negativ" oder "null" ablegt, je nachdem ob
            $zahl > 0, < 0 oder == 0 ist. Die Funktion selbst gibt nichts zurueck.
    TODO 2: Rufen Sie pruefeVorzeichen() fuer eine Beispielzahl auf und geben Sie
            den ueber die Referenzvariable ermittelten Wert von $ergebnis aus.
    TODO 3: Erstellen Sie eine Klasse Buch mit den privaten Eigenschaften
            $titel und $autor, einem Konstruktor __construct($titel, $autor)
            und einer Methode __toString(), die einen String wie
            "'Titel' von Autor" zurueckgibt.
    TODO 4: Erstellen Sie eine Klasse EBook, die von Buch erbt (extends Buch)
            und zusaetzlich die private Eigenschaft $dateigroesse (in MB) sowie
            einen eigenen Konstruktor besitzt, der den Konstruktor der Basis-
            klasse ueber parent::__construct(...) aufruft. Ueberschreiben Sie
            __toString(), sodass zusaetzlich die Dateigroesse ausgegeben wird,
            wobei die Basisklassen-Darstellung ueber parent::__toString()
            wiederverwendet wird.
    TODO 5: Instanziieren Sie ein Buch und ein EBook und geben Sie beide
            (z.B. mit echo) aus.
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

    <h2>Vorzeichenpruefung</h2>
    <p>
        <?php
            // TODO 2: Funktion aufrufen und Ergebnis ausgeben
        ?>
    </p>

    <?php
        // TODO 3: Klasse Buch definieren

        // TODO 4: Klasse EBook definieren (extends Buch)
    ?>

    <h2>Buecher</h2>
    <p>
        <?php
            // TODO 5: Buch und EBook instanziieren und ausgeben
        ?>
    </p>

</body>
</html>
