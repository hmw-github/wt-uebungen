<!--
    ÜBUNG 4: FORMULARVERARBEITUNG MIT GET (Kapitel 6.3 - Formularverarbeitung)

    Aufgabenstellung:
    Diese Seite enthält ein Suchformular, mit dem sich die (hier fest im
    Code hinterlegten) Projekte nach Technologie filtern lassen. Das
    Formular wird per GET an sich selbst gesendet - dadurch landet der
    Suchbegriff sichtbar in der URL und die Ergebnisseite ist direkt als
    Link teilbar. Ergänzen Sie an den TODO-Stellen den fehlenden PHP-Code:

    TODO 1: Prüfen Sie mittels isset() (oder dem Null-Coalescing-Operator ??),
            ob das Formular bereits abgeschickt wurde (d.h. ob
            $_GET['technologie'] gesetzt ist).
    TODO 2: Falls das Formular abgeschickt wurde: Iterieren Sie das Array
            $projekte (bereits vorgegeben) mit foreach und geben Sie für
            jedes Projekt, dessen technologie-Eintrag den Suchbegriff aus
            $_GET['technologie'] enthält (str_contains(), Groß-/
            Kleinschreibung ignorieren Sie der Einfachheit halber), eine
            <li>-Zeile mit Titel und Technologie aus.
    TODO 3: Befüllen Sie das value-Attribut des Textfelds "technologie"
            erneut mit dem zuletzt gesuchten Wert aus $_GET, damit das
            Formular nach dem Absenden nicht leer erscheint (leerer String,
            falls noch nichts gesucht wurde).
-->
<!DOCTYPE html>
<html>
<head>
    <title>Projekte filtern</title>
    <meta charset="UTF-8">
</head>
<body>

    <h1>Projekte filtern</h1>

    <?php
        $projekte = [
            ["titel" => "Wetter-App", "technologie" => "JavaScript, Fetch API"],
            ["titel" => "Rezeptsammlung", "technologie" => "PHP, MySQL"],
            ["titel" => "Portfolio-Website", "technologie" => "HTML, CSS, JavaScript, PHP, REST"]
        ];
    ?>

    <form method="get" action="">
        <label for="technologieFeld">Technologie:</label>
        <input type="text" id="technologieFeld" name="technologie" value="<?php // TODO 3: Wert aus $_GET wieder einsetzen ?>">
        <br><br>

        <input type="submit" value="Filtern">
    </form>

    <h2>Ergebnis</h2>
    <ul>
        <?php
            // TODO 1: prüfen, ob das Formular abgeschickt wurde (isset()/??)

                // TODO 2: $projekte durchsuchen und passende Treffer als <li> ausgeben
        ?>
    </ul>

</body>
</html>
