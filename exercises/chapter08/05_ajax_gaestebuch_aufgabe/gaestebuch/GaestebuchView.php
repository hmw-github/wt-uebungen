<?php
/*
    ÜBUNG 5: Gästebuch MIT AJAX (Kapitel 8.2/8.4 - AJAX-Prinzip)

    Aufgabenstellung:
    Das Gästebuch soll nicht mehr bei jedem Eintrag die ganze Seite neu
    laden. Beim Laden der Seite sollen alle bisher gespeicherten Einträge
    per AJAX vom Server geladen und angezeigt werden. Über den
    "Speichern"-Button soll ein neuer Eintrag gespeichert und die Liste
    anschließend aktualisiert werden - beides über die neue Datei
    gaestebuch/api.php (siehe dort). Die Hilfsfunktionen fillList(),
    clearList() und createListElement() sind bereits fertig vorgegeben.

    TODO 1: onLoad(): Direkt nach dem Laden der Seite holt sich die Seite im
            Hintergrund die bisherigen Einträge von api.php (Anfrage
            {"action": "list"} als JSON per POST) und zeigt sie in der Liste
            an.
    TODO 2: addGaestebuchEintrag(): Ein Klick auf "Speichern" schickt den Text
            aus dem Eingabefeld (id="gbNachrichtFeld") als {"action": "save",
            "message": ...} an api.php. Danach zeigt die Liste den aktuellen
            Stand inklusive des neuen Eintrags, ohne dass die Seite neu
            geladen wird. Ist das Feld leer, erscheint stattdessen eine
            Meldung und es wird nichts gesendet.
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
                // Fertige Hilfsfunktionen zur Anzeige der Liste.
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

                // TODO 1: onLoad(): beim Laden der Seite bisherige Einträge
                //         holen und anzeigen
                function onLoad() {

                }

                // TODO 2: addGaestebuchEintrag(): neuen Eintrag speichern,
                //         Liste ohne Neuladen aktualisieren; bei leerem Feld
                //         nur eine Meldung
                function addGaestebuchEintrag() {

                }

                window.addEventListener("load", onLoad);
            </script>

        </body>
        </html>
        <?php
    }
}
