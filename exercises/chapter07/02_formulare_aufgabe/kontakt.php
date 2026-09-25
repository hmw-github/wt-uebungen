<!--
    ÜBUNG 2: FORMULARE (Kapitel 7.8 - Formulare)

    Aufgabenstellung:
    Gestalten Sie das Kontaktformular mit Bootstrap-Formularklassen und
    einer einfachen clientseitigen Prüfung des E-Mail-Feldes. Ergänzen
    Sie an den TODO-Stellen den fehlenden Code:

    TODO 1: Fügen Sie dem Textfeld für den Namen die Klasse
            "form-control" hinzu.
    TODO 2: Fügen Sie dem E-Mail-Feld (id="emailFeld") die Klasse
            "form-control" hinzu.
    TODO 3: Gestalten Sie die beiden Radiobuttons "Bevorzugte
            Rückmeldung" mit Bootstrap: je ein umschließendes
            div class="form-check form-check-inline", die Klasse
            "form-check-input" auf dem input type="radio" sowie die
            Klasse "form-check-label" auf dem zugehörigen label.
    TODO 4: Fügen Sie der Auswahlliste "Betreff" die Klasse "form-select"
            hinzu.
    TODO 5: Fügen Sie dem textarea für die Nachricht die Klasse
            "form-control" hinzu.
    TODO 6: Gestalten Sie die Newsletter-Checkbox mit Bootstrap: ein
            umschließendes div class="form-check", die Klasse
            "form-check-input" auf dem input type="checkbox" sowie die
            Klasse "form-check-label" auf dem zugehörigen label.
    TODO 7: Ergänzen Sie bei den vier Feldern Name, E-Mail, "Bevorzugte
            Rückmeldung" und Nachricht jeweils ein div
            class="invalid-feedback" mit einem passenden Hinweistext
            direkt nach dem jeweiligen Eingabeelement (bei der
            Rückmeldung: nach den beiden Radiobutton-divs, mit
            id="rueckmeldungFeedback", da hier zwei Eingabeelemente sich
            ein gemeinsames Feedback-Element teilen).
    TODO 8: Ergänzen Sie ein JavaScript-Snippet (im vorgegebenen
            script-Block), das beim Verlassen des E-Mail-Feldes
            (Event "blur") prüft, ob der eingegebene Wert ein
            "@"-Zeichen enthält:
              - Wenn ja: Klasse "is-invalid" entfernen und Klasse
                "is-valid" setzen.
              - Wenn nein: Klasse "is-valid" entfernen und Klasse
                "is-invalid" setzen.
            (Es handelt sich hier bewusst um eine einfache clientseitige
            Demo-Prüfung, keine vollständige E-Mail-Validierung.)
    TODO 9: Ergänzen Sie analog ein JavaScript-Snippet für das Namensfeld
            (Event "blur"), das prüft, ob der (getrimmte) Wert mindestens
            5 Zeichen lang ist, und je nach Ergebnis "is-valid"/
            "is-invalid" setzt (siehe TODO 8 als Vorlage für das
            Grundmuster).
    TODO 10: Ergänzen Sie ein JavaScript-Snippet für die beiden
            Rückmeldung-Radiobuttons (document.querySelectorAll('input[name="rueckmeldung"]')):
            Bei "blur" eines der beiden Radiobuttons prüfen, ob mindestens
            einer der beiden checked ist, dann bei beiden Radiobuttons
            "is-valid"/"is-invalid" setzen (analog TODO 8/9) sowie
            zusätzlich die Klasse "d-block" auf dem Element mit
            id="rueckmeldungFeedback" setzen bzw. entfernen (nur bei
            Ungültigkeit gesetzt), da das Feedback-Element hier kein
            direktes Geschwisterelement eines einzelnen Eingabefelds ist
            und Bootstrap es daher nicht automatisch einblendet.
    TODO 11: Ergänzen Sie analog ein JavaScript-Snippet für das
            Nachrichtenfeld (Event "blur"), das prüft, ob der (getrimmte)
            Wert nicht leer ist, und je nach Ergebnis "is-valid"/
            "is-invalid" setzt.
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

        <button id="burgerButton" class="burger-button" type="button" aria-label="Menü öffnen" aria-expanded="false" aria-controls="hauptnav">
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
                <!-- TODO 1: form-control ergänzen -->
                <input type="text" id="nameFeld" name="name" required>
                <!-- TODO 7: invalid-feedback für den Namen ergänzen -->
            </div>

            <div class="mb-3">
                <label for="emailFeld" class="form-label">E-Mail:</label>
                <!-- TODO 2: form-control ergänzen -->
                <input type="email" id="emailFeld" name="email" required>
                <!-- TODO 7: invalid-feedback für die E-Mail ergänzen -->
            </div>

            <div class="mb-3">
                <p>Bevorzugte Rückmeldung:</p>
                <!-- TODO 3: form-check-Klassen für beide Radiobuttons ergänzen -->
                <input type="radio" id="rueckmeldungEmail" name="rueckmeldung" value="email">
                <label for="rueckmeldungEmail">E-Mail</label>

                <input type="radio" id="rueckmeldungTelefon" name="rueckmeldung" value="telefon">
                <label for="rueckmeldungTelefon">Telefon</label>
                <!-- TODO 7: invalid-feedback (id="rueckmeldungFeedback") ergänzen -->
            </div>

            <div class="mb-3">
                <label for="betreffFeld" class="form-label">Betreff:</label>
                <!-- TODO 4: form-select ergänzen -->
                <select id="betreffFeld" name="betreff">
                    <option value="anfrage" selected>Anfrage</option>
                    <option value="feedback">Feedback</option>
                    <option value="sonstiges">Sonstiges</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="nachrichtFeld" class="form-label">Nachricht:</label>
                <!-- TODO 5: form-control ergänzen -->
                <textarea id="nachrichtFeld" name="nachricht" rows="4" required></textarea>
                <!-- TODO 7: invalid-feedback für die Nachricht ergänzen -->
            </div>

            <!-- TODO 6: form-check-Klassen für die Newsletter-Checkbox ergänzen -->
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

        // TODO 8: blur-Event auf emailFeld: is-valid/is-invalid je nach "@" setzen

        // TODO 9: blur-Event auf nameFeld: is-valid/is-invalid je nach Länge (mind. 5 Zeichen) setzen

        // TODO 10: blur-Event auf beiden rueckmeldung-Radiobuttons: is-valid/is-invalid
        //          setzen, je nachdem ob einer der beiden checked ist, sowie
        //          "d-block" auf rueckmeldungFeedback bei Ungültigkeit setzen/entfernen

        // TODO 11: blur-Event auf nachrichtFeld: is-valid/is-invalid je nach Inhalt setzen

    </script>
    <script src="js/main.js" defer></script>
</body>
</html>
