<!--
    HILFSDATEI ZU ÜBUNG 2: KONTAKTFORMULAR (Kapitel 3.8)

    Diese Datei ist NICHT Teil der Aufgabe. Sie zeigt lediglich alle Werte
    an, die das Formular aus kontakt.html per POST übermittelt hat - so
    können Sie prüfen, ob Ihre name-Attribute stimmen (Felder ohne
    name-Attribut tauchen hier gar nicht auf, nicht angehakte Checkboxen
    und nicht gewählte Radiobuttons ebenfalls nicht).

    Da PHP einen Webserver benötigt, funktioniert diese Seite nicht per
    Doppelklick, sondern nur über die Docker-Umgebung in ../ (siehe
    README.md), z.B. http://localhost:8003/02_kontaktformular_aufgabe/kontakt.html

    In Kapitel 6 (PHP) schreiben Sie diese Datei selbst.
-->
<!DOCTYPE html>
<html>
<head>
    <title>Alex Berger - Portfolio - Kontaktanfrage</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <header>
        <a href="index.html">
            <img src="images/logo.svg" alt="Logo Alex Berger" width="100" height="50">
        </a>

        <nav>
            <a href="index.html">Startseite</a>
            <a href="ueber-mich.html">Über mich</a>
            <a href="projekte.html">Projekte</a>
        </nav>
    </header>

    <h1>Kontaktanfrage</h1>

    <?php
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            echo "<p>Es wurden keine Formulardaten per POST übermittelt. "
                . "Prüfen Sie action und method Ihres form-Tags.</p>";
        } elseif (count($_POST) === 0) {
            echo "<p>Das Formular wurde abgeschickt, enthielt aber keine Felder. "
                . "Haben Ihre Eingabefelder name-Attribute?</p>";
        } else {
            echo "<p>Folgende Daten wurden übermittelt:</p>";
            echo "<table border=\"1\">";
            echo "<tr><th>name-Attribut</th><th>Wert</th></tr>";
            foreach ($_POST as $feld => $wert) {
                if (is_array($wert)) {
                    $wert = implode(', ', $wert);
                }
                echo "<tr><td>" . htmlspecialchars($feld) . "</td>"
                    . "<td>" . nl2br(htmlspecialchars($wert)) . "</td></tr>";
            }
            echo "</table>";
        }
    ?>

    <p>
        <a href="kontakt.html">Zurück zum Kontaktformular</a>
        &middot;
        <a href="javascript:history.back()">Zurück (Eingaben behalten)</a>
    </p>

    <footer>
        <p>
            <a href="https://github.com/alexberger" target="_blank">GitHub</a>
            &middot;
            <a href="rechtliches/impressum.html">Impressum</a>
        </p>
    </footer>

    <!-- Autor: Alex Berger -->

</body>
</html>
