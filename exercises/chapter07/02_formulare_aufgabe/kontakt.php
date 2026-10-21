<!--
    ÜBUNG 2: FORMULARE (Kapitel 7.8 - Formulare)

    Aufgabenstellung:
    Gestalten Sie das Kontaktformular mit Bootstrap-Formularklassen und
    einer einfachen clientseitigen Prüfung des E-Mail-Feldes. Ergänzen
    Sie an den TODO-Stellen den fehlenden Code:

    TODO 1: Das Textfeld für den Namen erscheint im Bootstrap-Stil (volle
            Breite, abgerundeter Rahmen, Fokus-Leuchten).
    TODO 2: Das E-Mail-Feld erscheint ebenso im Bootstrap-Stil.
    TODO 3: Die beiden Radiobuttons "Bevorzugte Rückmeldung" erscheinen im
            Bootstrap-Stil und stehen samt Beschriftung nebeneinander in einer
            Zeile. Ein Klick auf die Beschriftung wählt den Radiobutton aus.
    TODO 4: Die Auswahlliste "Betreff" erscheint im Bootstrap-Stil (volle
            Breite, Bootstrap-Pfeil).
    TODO 5: Das Nachrichtenfeld erscheint im Bootstrap-Stil.
    TODO 6: Die Newsletter-Checkbox erscheint im Bootstrap-Stil, mit sauber
            ausgerichteter Beschriftung daneben.
    TODO 7: Für die Felder Name, E-Mail, "Bevorzugte Rückmeldung" und
            Nachricht gibt es je einen passenden Hinweistext (z.B. "Bitte
            geben Sie eine gültige E-Mail-Adresse ein."). Er ist zunächst
            unsichtbar und erscheint in Rot unter dem Feld, sobald das Feld
            als ungültig markiert ist. Die beiden Radiobuttons teilen sich
            einen Hinweis mit der id "rueckmeldungFeedback".
    TODO 8: Verlässt man das E-Mail-Feld, wird es sofort bewertet: Enthält es
            ein "@", erscheint es grün mit Häkchen; sonst rot mit dem
            Hinweistext aus TODO 7. Beim erneuten Verlassen wird neu bewertet,
            es bleibt also nie gleichzeitig grün und rot. (Bewusst eine
            einfache Demo-Prüfung, keine vollständige E-Mail-Validierung.)
    TODO 9: Gleiches Verhalten für das Namensfeld: gültig (grün) ab mindestens
            5 Zeichen, wobei Leerzeichen am Anfang und Ende nicht mitzählen;
            sonst ungültig (rot, mit Hinweis).
    TODO 10: Verlässt man einen der beiden Rückmeldung-Radiobuttons, werden
            beide bewertet: grün, sobald einer ausgewählt ist, sonst rot.
            Zusätzlich ist der gemeinsame Hinweis "rueckmeldungFeedback" genau
            dann sichtbar, wenn keiner ausgewählt ist. (Bootstrap blendet ihn
            hier nicht automatisch ein, da er zu keinem einzelnen Eingabefeld
            gehört.)
    TODO 11: Gleiches Verhalten für das Nachrichtenfeld: gültig, wenn es mehr
            als nur Leerzeichen enthält, sonst ungültig.
-->
<!DOCTYPE html>
<html>
<head>
    <title>Alex Berger - Portfolio - Kontakt</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/druck.css" media="print">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <header>
        <a href="index.php">
            <img src="images/logo.png" alt="Logo Alex Berger" height="50">
        </a>

        <button id="burgerButton" class="burger-button" type="button">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav id="hauptnav">
            <a href="index.php">Startseite</a>
            <a href="ueber-mich.html">Über mich</a>
            <a href="projekte.html">Projekte</a>
            <a href="technik-spielwiese.php">Technik-Spielwiese</a>
        </nav>
    </header>

    <main>
    <div class="container mt-4">

        <h1>Kontakt</h1>

        <p>Ich freue mich über Nachrichten - schreiben Sie mir gerne!</p>

        <form action="kontakt-verarbeiten.php" method="post">

            <div class="mb-3">
                <label for="nameFeld" class="form-label">Name:</label>
                <!-- TODO 1: Bootstrap-Stil für das Namensfeld -->
                <input type="text" id="nameFeld" name="name" required>
                <!-- TODO 7: Hinweistext bei ungültigem Namen -->
            </div>

            <div class="mb-3">
                <label for="emailFeld" class="form-label">E-Mail:</label>
                <!-- TODO 2: Bootstrap-Stil für das E-Mail-Feld -->
                <input type="email" id="emailFeld" name="email" required>
                <!-- TODO 7: Hinweistext bei ungültiger E-Mail -->
            </div>

            <div class="mb-3">
                <p>Bevorzugte Rückmeldung:</p>
                <!-- TODO 3: Radiobuttons im Bootstrap-Stil nebeneinander -->
                <input type="radio" id="rueckmeldungEmail" name="rueckmeldung" value="email">
                <label for="rueckmeldungEmail">E-Mail</label>

                <input type="radio" id="rueckmeldungTelefon" name="rueckmeldung" value="telefon">
                <label for="rueckmeldungTelefon">Telefon</label>
                <!-- TODO 7: gemeinsamer Hinweistext (id="rueckmeldungFeedback") -->
            </div>

            <div class="mb-3">
                <label for="betreffFeld" class="form-label">Betreff:</label>
                <!-- TODO 4: Bootstrap-Stil für die Auswahlliste -->
                <select id="betreffFeld" name="betreff">
                    <option value="anfrage" selected>Anfrage</option>
                    <option value="feedback">Feedback</option>
                    <option value="sonstiges">Sonstiges</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="nachrichtFeld" class="form-label">Nachricht:</label>
                <!-- TODO 5: Bootstrap-Stil für das Nachrichtenfeld -->
                <textarea id="nachrichtFeld" name="nachricht" rows="4" required></textarea>
                <!-- TODO 7: Hinweistext bei leerer Nachricht -->
            </div>

            <!-- TODO 6: Checkbox im Bootstrap-Stil -->
            <div class="mb-3">
                <input type="checkbox" id="newsletterFeld" name="newsletter" value="ja">
                <label for="newsletterFeld">Ich möchte den Newsletter erhalten</label>
            </div>

            <input type="submit" value="Absenden" class="btn btn-primary">

        </form>

        <h2>Gästebuch</h2>

        <p><a href="gaestebuch/index.php" class="btn btn-secondary">Zum Gästebuch</a></p>

    </div>

    </main>

    <footer>
        <p>
            <a href="https://github.com/alexberger" target="_blank">GitHub</a>
            &middot;
            <a href="rechtliches/impressum.html">Impressum</a>
        </p>
    </footer>

    <!-- Autor: Alex Berger -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var emailFeld = document.getElementById('emailFeld');

        // TODO 8: E-Mail-Feld beim Verlassen grün/rot markieren ("@"
        //         enthalten?)

        // TODO 9: Namensfeld beim Verlassen grün/rot markieren (mind. 5
        //         Zeichen?)

        // TODO 10: Radiobuttons beim Verlassen grün/rot markieren (einer
        //         gewählt?), gemeinsamen Hinweis nur bei Ungültigkeit zeigen

        // TODO 11: Nachrichtenfeld beim Verlassen grün/rot markieren (nicht
        //         leer?)

    </script>
    <script src="js/main.js" defer></script>
</body>
</html>
