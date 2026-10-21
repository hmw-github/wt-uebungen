<?php
/*
    View: erzeugt die HTML-Ausgabe der Seite (Formular + Liste der
    bisherigen Einträge).

    TODO 1: Eine View wird mit dem Model erzeugt, das sie später darstellen
            soll. Sie merkt es sich in der Eigenschaft $gaestebuch.
    TODO 2: render() gibt eine vollständige Seite im Look der übrigen
            Portfolio-Seiten aus (Stylesheet, Header mit Logo, Burger-Button
            und Navigation, Footer, siehe ../kontakt.php). Alle Links, Bilder
            und Stylesheets funktionieren auch aus dem Unterordner gaestebuch/
            heraus. Inhalt: Überschrift "Gästebuch", ein Formular mit Textfeld
            "gbnachricht" und Button "Eintragen", das per POST an diese Seite
            sendet, darunter alle Einträge des Models als Aufzählungsliste
            sowie ein Link zurück zur Kontaktseite.
*/

class GaestebuchView
{
    private $gaestebuch;

    public function __construct($gaestebuch)
    {
        // TODO 1: Model für die spätere Darstellung merken
    }

    public function render()
    {
        // TODO 2: Gästebuch-Seite (Formular, Einträge, Rück-Link) ausgeben
    }
}
