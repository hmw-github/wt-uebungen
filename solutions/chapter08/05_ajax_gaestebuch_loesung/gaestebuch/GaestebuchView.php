<?php
/*
    LÖSUNGSVORSCHLAG - ÜBUNG 5: Gästebuch MIT AJAX - View GaestebuchView
*/

class GaestebuchView
{
    private $gaestebuch;

    public function __construct($gaestebuch)
    {
        $this->gaestebuch = $gaestebuch;
    }

    public function render()
    {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Alex Berger - Portfolio - Gästebuch</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link rel="stylesheet" href="../css/style.css">
            <link rel="stylesheet" href="../css/druck.css" media="print">

        </head>
        <body>

            <header>
                <a href="../index.php">
                    <img src="../images/logo.png" alt="Logo Alex Berger" height="50">
                </a>

                <button id="burgerButton" class="burger-button" type="button">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <nav id="hauptnav">
                    <a href="../index.php">Startseite</a>
                    <a href="../ueber-mich.html">Über mich</a>
                    <a href="../projekte.html">Projekte</a>
                    <a href="../kontakt.php">Kontakt</a>
                </nav>
            </header>

            <main>
            <h1>Gästebuch</h1>

            <label for="gbNachrichtFeld">Kurze Nachricht:</label><br>
            <input type="text" id="gbNachrichtFeld">
            <button onclick="addGaestebuchEintrag()">Eintragen</button>

            <h2>Bisherige Einträge</h2>
            <ul id="liste"></ul>

            <p><a href="../kontakt.php">Zurück zur Kontaktseite</a></p>

            </main>

            <footer>
                <p>
                    <a href="https://github.com/alexberger" target="_blank">GitHub</a>
                    &middot;
                    <a href="../rechtliches/impressum.html">Impressum</a>
                </p>
            </footer>

            <!-- Autor: Alex Berger -->

            <script src="../js/main.js" defer></script>

            <script>
                function createListElement(text) {
                    var li = document.createElement("li");
                    li.textContent = text;
                    return li;
                }

                function clearList() {
                    document.getElementById("liste").innerHTML = "";
                }

                function fillList(entries) {
                    clearList();
                    var liste = document.getElementById("liste");
                    for (var i = 0; i < entries.length; i++) {
                        liste.appendChild(createListElement(entries[i]));
                    }
                }

                function onLoad() {
                    fetch("api.php", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json"
                        },
                        body: JSON.stringify({ action: "list" })
                    })
                        .then(function(response) {
                            return response.json();
                        })
                        .then(function(antwort) {
                            fillList(antwort.entries);
                        });
                }

                function addGaestebuchEintrag() {
                    var nachrichtFeld = document.getElementById("gbNachrichtFeld");
                    var nachricht = nachrichtFeld.value;

                    if (nachricht === "") {
                        alert("Bitte geben Sie eine Nachricht ein.");
                        return;
                    }

                    fetch("api.php", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json"
                        },
                        body: JSON.stringify({ action: "save", message: nachricht })
                    })
                        .then(function(response) {
                            return response.json();
                        })
                        .then(function(antwort) {
                            fillList(antwort.entries);
                            nachrichtFeld.value = "";
                        });
                }

                window.addEventListener("load", onLoad);
            </script>

        </body>
        </html>
        <?php
    }
}
