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

        // TODO 1: Alle Eingaben des Formulars (inkl. gewählter
        //         Rückmeldungsart, ggf. keine, und Newsletter ja/nein) als
        //         Objekt mit den Eigenschaften name, email, betreff,
        //         rueckmeldung, nachricht und newsletter erfassen.


        // TODO 2: Das Objekt als JSON-Text unter dem Schlüssel
        //         "kontaktanfrage" im Browser ablegen.


        // TODO 3: Weiter zur Seite "kontaktanfrage-bestaetigung.html".

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

    // TODO 4: Die gespeicherte Kontaktanfrage auf der Seite anzeigen:
    //         #begruessung zeigt "Vielen Dank, <name>! Ihre Nachricht wurde
    //         empfangen.", die #detail...-Elemente zeigen E-Mail, Betreff,
    //         Nachricht, Rückmeldungsart (oder "keine Angabe") und Newsletter
    //         ("ja"/"nein"). Liegt keine Anfrage vor, steht in #begruessung
    //         nur "Es wurde keine Kontaktanfrage gefunden. Bitte füllen Sie
    //         zuerst das Kontaktformular aus."

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

// TODO 5: fillProjectTable(projekte): Für jedes Projekt erscheint im
//         tbody#projekteKoerper eine Zeile mit Titel, Technologie, Jahr und
//         einem Link "Repository" (Ziel: projekt.link, öffnet in neuem Tab).
//         Die Zelle #projekteAnzahl zeigt danach "Anzahl Projekte: <Anzahl>".


document.addEventListener("DOMContentLoaded", () => {
    const projekteKoerper = document.getElementById("projekteKoerper");
    if (!projekteKoerper) {
        return;
    }

    loadProjects();

    // TODO 6: Ein Klick auf #filterButton schaltet die Hervorhebung
    //         (CSS-Klasse "hervorgehoben") aller Tabellenzeilen mit dem Jahr
    //         2026 ein bzw. wieder aus.
});
