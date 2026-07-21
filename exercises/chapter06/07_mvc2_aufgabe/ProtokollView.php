<?php
/*
    View: erzeugt die HTML-Ausgabe der Seite (Formular + Liste der
    bisherigen Eintraege).

    TODO 1: Implementieren Sie den Konstruktor __construct($protokoll), der
            das uebergebene Model-Objekt in der Eigenschaft $this->protokoll
            speichert.
    TODO 2: Implementieren Sie die Methode render(). Sie soll ein komplettes
            HTML-Dokument ausgeben: eine Ueberschrift, ein Formular
            (method="post", Textfeld "nachricht", Submit-Button "Eintragen")
            sowie darunter eine HTML-Liste aller Eintraege, die Sie ueber
            $this->protokoll->alleEintraege() abrufen.
*/

class ProtokollView
{
    private $protokoll;

    public function __construct($protokoll)
    {
        // TODO 1: $protokoll in $this->protokoll speichern
    }

    public function render()
    {
        // TODO 2: HTML-Dokument mit Formular und Eintraegen ausgeben
    }
}
