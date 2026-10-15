/*
    Steuert das Burger-Menü: Ein Klick auf den Button blendet die
    Navigation (#hauptnav) auf schmalen Bildschirmen ein bzw. aus. Die
    Navigationslinks selbst bleiben unverändert und navigieren wie bisher.
*/

document.addEventListener("DOMContentLoaded", () => {
    const burgerButton = document.getElementById("burgerButton");
    const hauptnav = document.getElementById("hauptnav");

    if (!burgerButton || !hauptnav) {
        return;
    }

    burgerButton.addEventListener("click", () => {
        const istOffen = hauptnav.classList.toggle("offen");
        burgerButton.classList.toggle("offen", istOffen);
    });
});

/*
    ÜBUNG 2 - DOM-WERTE LESEN (Kapitel 5.5 - Document Object Model)

    Teil A (auf kontakt.html): Beim Absenden des Kontaktformulars
    (id="kontaktFormular") sollen die eingegebenen Werte per DOM-Zugriff
    ausgelesen, zu einem JSON-Objekt zusammengefasst und im localStorage
    gespeichert werden. Anschließend wird zu
    kontaktanfrage-bestaetigung.html weitergeleitet.
*/
document.addEventListener("DOMContentLoaded", () => {
    const kontaktFormular = document.getElementById("kontaktFormular");
    if (!kontaktFormular) {
        return;
    }

    kontaktFormular.addEventListener("submit", (event) => {
        event.preventDefault();

        // TODO 1: Werte der Formularfelder auslesen (nameFeld.value,
        //         emailFeld.value, betreffFeld.value, nachrichtFeld.value,
        //         das ausgewählte Radio-Button-Element per
        //         document.querySelector('input[name="rueckmeldung"]:checked')
        //         sowie newsletterFeld.checked) und daraus ein Objekt mit
        //         den Eigenschaften name, email, betreff, rueckmeldung,
        //         nachricht und newsletter erstellen.


        // TODO 2: Objekt mit JSON.stringify in einen JSON-String umwandeln
        //         und mit localStorage.setItem unter dem Schlüssel
        //         "kontaktanfrage" speichern.


        // TODO 3: Mit location.href zu "kontaktanfrage-bestaetigung.html"
        //         weiterleiten.

    });
});

/*
    Teil B (auf kontaktanfrage-bestaetigung.html): Die zuvor gespeicherten
    Daten wieder aus dem localStorage lesen und in den vorgegebenen
    Platzhalter-Elementen anzeigen.
*/
document.addEventListener("DOMContentLoaded", () => {
    const begruessung = document.getElementById("begruessung");
    if (!begruessung) {
        return;
    }

    // TODO 4: Den JSON-String unter dem Schlüssel "kontaktanfrage" per
    //         localStorage.getItem lesen. Falls kein Wert vorhanden ist,
    //         den Text "Es wurde keine Kontaktanfrage gefunden. Bitte
    //         füllen Sie zuerst das Kontaktformular aus." in #begruessung
    //         anzeigen und die Funktion beenden (return). Andernfalls den
    //         String mit JSON.parse in ein Objekt zurückverwandeln und
    //         damit folgende Elemente per textContent befüllen:
    //         - #begruessung: "Vielen Dank, " + name + "! Ihre Nachricht
    //           wurde empfangen."
    //         - #detailEmail, #detailBetreff, #detailNachricht: die
    //           jeweiligen Werte aus dem Objekt
    //         - #detailRueckmeldung: den Wert von rueckmeldung, oder
    //           "keine Angabe", falls kein Wert vorhanden ist
    //         - #detailNewsletter: "ja" oder "nein", je nach dem
    //           booleschen Wert von newsletter

});

/*
    ÜBUNG 2 - DOM-MANIPULATION (Kapitel 5.5 - Document Object Model)

    Diese Funktion ist bereits vorgegeben: Sie lädt die Projektliste per
    fetch() aus projekte.json und übergibt die Daten zur Anzeige an
    fillProjectTable(projekte). Diese Funktion müssen Sie unten selbst
    implementieren (TODO 5).
*/
async function loadProjects() {
    try {
        const antwort = await fetch("projekte.json");
        const projekte = await antwort.json();
        fillProjectTable(projekte);
    } catch (fehler) {
        console.error("Fehler beim Laden der Projekte:", fehler);
    }
}

// TODO 5: fillProjectTable(projekte) implementieren. Ermitteln Sie per
//         getElementById Referenzen auf den tbody-Bereich
//         (id="projekteKoerper") sowie auf die Zusammenfassungszelle im
//         tfoot (id="projekteAnzahl"). Iterieren Sie anschließend das
//         übergebene Array "projekte" mit einer for...of-Schleife und
//         erzeugen Sie pro Projekt per document.createElement("tr") eine
//         neue Tabellenzeile mit 4 Zellen (createElement("td")): Titel,
//         Technologie, Jahr sowie ein Link-Element (createElement("a"))
//         mit href auf projekt.link, target="_blank" und dem Text
//         "Repository". Hängen Sie die Zellen an die Zeile und die Zeile
//         an den tbody an. Setzen Sie abschließend den Text der
//         Zusammenfassungszelle auf "Anzahl Projekte: " + projekte.length.


document.addEventListener("DOMContentLoaded", () => {
    const projekteKoerper = document.getElementById("projekteKoerper");
    if (!projekteKoerper) {
        return;
    }

    loadProjects();

    // TODO 6: Ermitteln Sie den Button mit id="filterButton" und
    //         registrieren Sie per addEventListener("click", ...) einen
    //         Handler. Der Handler soll ALLE Zeilen des tbody
    //         (projekteKoerper.querySelectorAll("tr")) durchlaufen und bei
    //         jeder Zeile, deren dritte Zelle (Jahr) den Text "2026"
    //         enthält, die CSS-Klasse "hervorgehoben" per classList.toggle
    //         umschalten.
});
