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
    Teil A (auf kontakt.html): Liest beim Absenden des Kontaktformulars
    die eingegebenen Werte per DOM-Zugriff aus, speichert sie als
    JSON-Objekt im localStorage und leitet zur Bestätigungsseite weiter.
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

/*
    Teil B (auf kontaktanfrage-bestaetigung.html): Liest die zuvor
    gespeicherten Daten wieder aus dem localStorage und zeigt sie in den
    vorgegebenen Platzhalter-Elementen an.
*/
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
