/*
    LÖSUNGSVORSCHLAG - ÜBUNG 1: CSS-GRUNDLAGEN - main.js

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
