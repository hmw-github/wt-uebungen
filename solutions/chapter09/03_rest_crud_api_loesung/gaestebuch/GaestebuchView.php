<?php
/*
    LÖSUNGSVORSCHLAG - ÜBUNG 6: PROTOKOLL MIT AJAX - View GaestebuchView
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
        </head>
        <body>

            <h1>Gästebuch</h1>

            <label for="gbNachrichtFeld">Kurze Nachricht:</label><br>
            <input type="text" id="gbNachrichtFeld">
            <button onclick="addGaestebuchEintrag()">Eintragen</button>

            <h2>Bisherige Einträge</h2>
            <ul id="liste"></ul>

            <p><a href="./gaestebuch/index.php">Zurück zur Kontaktseite</a></p>

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
