<?php
/*
    View: erzeugt die HTML-Ausgabe der Seite (Formular + Liste der
    bisherigen Einträge).

    TODO 1: Implementieren Sie den Konstruktor __construct($gaestebuch), der
            das übergebene Model-Objekt in der Eigenschaft
            $this->gaestebuch speichert.
    TODO 2: Implementieren Sie die Methode render(). Sie soll ein komplettes
            HTML-Dokument ausgeben: eine Überschrift, ein Formular
            (method="post", Textfeld "gbnachricht", Submit-Button
            "Eintragen"), einen Link zurück zu "../kontakt.php" sowie
            darunter eine HTML-Liste aller Einträge, die Sie über
            $this->gaestebuch->alleEintraege() abrufen.
*/

class GaestebuchView
{
    private $gaestebuch;

    public function __construct($gaestebuch)
    {
        // TODO 1: $gaestebuch in $this->gaestebuch speichern
    }

    public function render()
    {
        // TODO 2: HTML-Dokument mit Formular, Einträgen und Rück-Link ausgeben
    }
}
