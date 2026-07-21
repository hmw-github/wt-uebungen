<!--
    UEBUNG 5: FORMULARVERARBEITUNG MIT POST (Kapitel 6.3 - Formularverarbeitung)

    Aufgabenstellung:
    Diese Seite enthaelt ein Registrierungsformular (Vorname, Geschlecht,
    AGB-Zustimmung, Land), das per POST an sich selbst gesendet wird.
    Ergaenzen Sie an den mit TODO markierten Stellen den fehlenden PHP-Code:

    TODO 1: Pruefen Sie mittels isset(), ob das Formular abgeschickt wurde
            (z.B. ob $_POST['vorname'] gesetzt ist), und lesen Sie in diesem
            Fall alle Formularwerte ($_POST['vorname'], $_POST['geschlecht'],
            $_POST['agb'], $_POST['land']) in Variablen ein. Beachten Sie,
            dass die Checkbox "agb" nur bei Auswahl in $_POST vorkommt, also
            mit isset() geprueft werden muss.
    TODO 2: Geben Sie unterhalb des Formulars eine Zusammenfassung der
            eingegebenen Daten aus (Vorname, Geschlecht, ob die AGB akzeptiert
            wurden, Land) - aber nur, wenn das Formular abgeschickt wurde.
    TODO 3: Befuellen Sie das value-Attribut des Textfelds "vorname" erneut
            mit dem zuletzt gesendeten Wert aus $_POST.
    TODO 4: Markieren Sie den zuletzt ausgewaehlten Radiobutton (Geschlecht)
            erneut mit dem Attribut checked, indem Sie den jeweiligen Wert
            mit dem gesendeten $_POST-Wert vergleichen.
    TODO 5: Markieren Sie die Checkbox "agb" erneut mit checked, falls sie
            beim letzten Absenden aktiviert war.
    TODO 6: Markieren Sie die zuletzt ausgewaehlte <option> im Land-Auswahlfeld
            erneut mit selected, indem Sie den jeweiligen Wert mit dem
            gesendeten $_POST-Wert vergleichen.
-->
<!DOCTYPE html>
<html>
<head>
    <title>Registrierung</title>
    <meta charset="UTF-8">
</head>
<body>

    <h1>Registrierung</h1>

    <?php
        // TODO 1: pruefen, ob das Formular abgeschickt wurde, und $_POST-Werte einlesen
    ?>

    <form method="post" action="">

        <label for="vornameFeld">Vorname:</label>
        <input type="text" id="vornameFeld" name="vorname" value="<?php // TODO 3: Wert aus $_POST wieder einsetzen ?>">
        <br><br>

        <p>Geschlecht:</p>
        <input type="radio" id="geschlechtM" name="geschlecht" value="maennlich" <?php // TODO 4a: checked fuer "maennlich" ?>>
        <label for="geschlechtM">maennlich</label><br>
        <input type="radio" id="geschlechtW" name="geschlecht" value="weiblich" <?php // TODO 4b: checked fuer "weiblich" ?>>
        <label for="geschlechtW">weiblich</label><br>
        <input type="radio" id="geschlechtD" name="geschlecht" value="divers" <?php // TODO 4c: checked fuer "divers" ?>>
        <label for="geschlechtD">divers</label><br><br>

        <input type="checkbox" id="agbFeld" name="agb" value="akzeptiert" <?php // TODO 5: checked, falls agb akzeptiert wurde ?>>
        <label for="agbFeld">Ich akzeptiere die AGB</label><br><br>

        <label for="landFeld">Land:</label>
        <select id="landFeld" name="land">
            <option value="de" <?php // TODO 6a: selected fuer "de" ?>>Deutschland</option>
            <option value="at" <?php // TODO 6b: selected fuer "at" ?>>Oesterreich</option>
            <option value="ch" <?php // TODO 6c: selected fuer "ch" ?>>Schweiz</option>
        </select><br><br>

        <input type="submit" value="Registrieren">

    </form>

    <h2>Zusammenfassung</h2>
    <p>
        <?php
            // TODO 2: Zusammenfassung der eingegebenen Daten ausgeben (nur falls abgeschickt)
        ?>
    </p>

</body>
</html>
