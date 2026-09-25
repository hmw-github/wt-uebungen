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
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="../css/style.css">
        </head>
        <body>

            <div class="container mb-5 mt-3">
                <label for="gbNachrichtFeld">Kurze Nachricht:</label><br>
                <input type="text" id="gbNachrichtFeld">
                <button class="btn btn-warning" onclick="addGaestebuchEintrag()">Eintragen</button>
            </div>

            <div class="container">
                <h3>Bisherige Einträge</h3>
                <ul id="liste"></ul>
            </div>

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
                    let liste = document.getElementById("liste");

                    for (let i = 0; i < entries.length; i++) {
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
                        let liste = antwort.entries;
                        liste.sort((s1, s2) => s2.localeCompare(s1));
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
                        let liste = antwort.entries;
                        liste.sort((s1, s2) => s2.localeCompare(s1));
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
