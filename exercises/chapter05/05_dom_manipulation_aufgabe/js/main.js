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
        burgerButton.setAttribute("aria-expanded", istOffen);
    });
});

/*
    Aus Übung 4 gelöst übernommen (Kontaktformular -> JSON -> localStorage
    -> kontaktanfrage-bestaetigung.html), in dieser Übung unverändert.
*/
document.addEventListener("DOMContentLoaded", () => {
    const kontaktFormular = document.getElementById("kontaktFormular");
    if (!kontaktFormular) {
        return;
    }

    kontaktFormular.addEventListener("submit", (event) => {
        event.preventDefault();

        const rueckmeldungElement = document.querySelector('input[name="rueckmeldung"]:checked');

        const kontaktanfrage = {
            name: document.getElementById("nameFeld").value,
            email: document.getElementById("emailFeld").value,
            betreff: document.getElementById("betreffFeld").value,
            rueckmeldung: rueckmeldungElement ? rueckmeldungElement.value : null,
            nachricht: document.getElementById("nachrichtFeld").value,
            newsletter: document.getElementById("newsletterFeld").checked
        };

        localStorage.setItem("kontaktanfrage", JSON.stringify(kontaktanfrage));

        location.href = "kontaktanfrage-bestaetigung.html";
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const begruessung = document.getElementById("begruessung");
    if (!begruessung) {
        return;
    }

    const gespeichert = localStorage.getItem("kontaktanfrage");
    if (!gespeichert) {
        begruessung.textContent = "Es wurde keine Kontaktanfrage gefunden. Bitte füllen Sie zuerst das Kontaktformular aus.";
        return;
    }

    const kontaktanfrage = JSON.parse(gespeichert);

    begruessung.textContent = "Vielen Dank, " + kontaktanfrage.name + "! Ihre Nachricht wurde empfangen.";
    document.getElementById("detailEmail").textContent = kontaktanfrage.email;
    document.getElementById("detailBetreff").textContent = kontaktanfrage.betreff;
    document.getElementById("detailRueckmeldung").textContent = kontaktanfrage.rueckmeldung || "keine Angabe";
    document.getElementById("detailNachricht").textContent = kontaktanfrage.nachricht;
    document.getElementById("detailNewsletter").textContent = kontaktanfrage.newsletter ? "ja" : "nein";
});

/*
    ÜBUNG 5: DOM-MANIPULATION (Kapitel 5.5 - Document Object Model)

    Diese Funktion ist bereits vorgegeben: Sie lädt die Projektliste per
    fetch() aus projekte.json und übergibt die Daten zur Anzeige an
    fillProjectTable(projekte). Diese Funktion müssen Sie unten selbst
    implementieren (TODO 1).
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

// TODO 1: fillProjectTable(projekte) implementieren. Ermitteln Sie per
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

    // TODO 2: Ermitteln Sie den Button mit id="filterButton" und
    //         registrieren Sie per addEventListener("click", ...) einen
    //         Handler. Der Handler soll ALLE Zeilen des tbody
    //         (projekteKoerper.querySelectorAll("tr")) durchlaufen und bei
    //         jeder Zeile, deren dritte Zelle (Jahr) den Text "2026"
    //         enthält, die CSS-Klasse "hervorgehoben" per classList.toggle
    //         umschalten.
});
