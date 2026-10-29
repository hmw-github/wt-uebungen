/*
    ÜBUNG 3: RESPONSIVE WEB DESIGN (Kapitel 4.6) - main.js

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
        // Klasse "offen" hinzunehmen oder löschen aus Klassenliste
        const istOffen = hauptnav.classList.toggle("offen");
        // Klasse offen bei Burger-Button setzen/löschen
        burgerButton.classList.toggle("offen", istOffen);
    });
});
