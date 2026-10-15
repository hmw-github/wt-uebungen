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
    DOM-Werte lesen: Kontaktformular -> JSON -> localStorage
    -> kontaktanfrage-bestaetigung.html (TODO 1-4).
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
    Lädt die Projektliste per fetch() aus projekte.json und baut daraus
    die Tabelle auf der Seite "Projekte" (projekte.html) auf.
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

// Trägt die übergebenen Projekte als Tabellenzeilen in #projekteKoerper ein
// und aktualisiert die Anzahl-Anzeige in #projekteAnzahl.
function fillProjectTable(projekte) {
    const projekteKoerper = document.getElementById("projekteKoerper");
    const projekteAnzahl = document.getElementById("projekteAnzahl");

    for (const projekt of projekte) {
        const zeile = document.createElement("tr");

        const titelZelle = document.createElement("td");
        titelZelle.textContent = projekt.titel;
        zeile.appendChild(titelZelle);

        const technologieZelle = document.createElement("td");
        technologieZelle.textContent = projekt.technologie;
        zeile.appendChild(technologieZelle);

        const jahrZelle = document.createElement("td");
        jahrZelle.textContent = projekt.jahr;
        zeile.appendChild(jahrZelle);

        const linkZelle = document.createElement("td");
        const link = document.createElement("a");
        link.href = projekt.link;
        link.target = "_blank";
        link.textContent = "Repository";
        linkZelle.appendChild(link);
        zeile.appendChild(linkZelle);

        projekteKoerper.appendChild(zeile);
    }

    projekteAnzahl.textContent = "Anzahl Projekte: " + projekte.length;
}

document.addEventListener("DOMContentLoaded", () => {
    const projekteKoerper = document.getElementById("projekteKoerper");
    if (!projekteKoerper) {
        return;
    }

    loadProjects();

    const filterButton = document.getElementById("filterButton");
    filterButton.addEventListener("click", () => {
        const zeilen = projekteKoerper.querySelectorAll("tr");
        for (const zeile of zeilen) {
            const jahrZelle = zeile.children[2];
            if (jahrZelle.textContent === "2026") {
                zeile.classList.toggle("hervorgehoben");
            }
        }
    });
});
