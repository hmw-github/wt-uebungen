<!--
    LÖSUNGSVORSCHLAG - ÜBUNG 6: FORMULARE - Seite "Kontakt"
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
                <input type="text" id="nameFeld" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="emailFeld" class="form-label">E-Mail:</label>
                <input type="email" id="emailFeld" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <p>Bevorzugte Rückmeldung:</p>
                <div class="form-check form-check-inline">
                    <input type="radio" id="rueckmeldungEmail" name="rueckmeldung" value="email" class="form-check-input">
                    <label for="rueckmeldungEmail" class="form-check-label">E-Mail</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" id="rueckmeldungTelefon" name="rueckmeldung" value="telefon" class="form-check-input">
                    <label for="rueckmeldungTelefon" class="form-check-label">Telefon</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="betreffFeld" class="form-label">Betreff:</label>
                <select id="betreffFeld" name="betreff" class="form-select">
                    <option value="anfrage" selected>Anfrage</option>
                    <option value="feedback">Feedback</option>
                    <option value="sonstiges">Sonstiges</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="nachrichtFeld" class="form-label">Nachricht:</label>
                <textarea id="nachrichtFeld" name="nachricht" rows="4" class="form-control" required></textarea>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" id="newsletterFeld" name="newsletter" value="ja" class="form-check-input">
                <label for="newsletterFeld" class="form-check-label">Ich möchte den Newsletter erhalten</label>
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

        emailFeld.addEventListener('blur', function() {
            if (emailFeld.value.includes('@')) {
                emailFeld.classList.remove('is-invalid');
                emailFeld.classList.add('is-valid');
            } else {
                emailFeld.classList.remove('is-valid');
                emailFeld.classList.add('is-invalid');
            }
        });
    </script>
    <script src="js/main.js" defer></script>
</body>
</html>
