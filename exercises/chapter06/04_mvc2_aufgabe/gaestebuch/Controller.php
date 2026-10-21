<?php
/*
    Controller: nimmt $_POST entgegen, aktualisiert das Model und ruft
    anschließend die View auf.

    TODO 1: verarbeiteAnfrage() beantwortet einen Aufruf des Gästebuchs:
            Wurde eine nicht leere Nachricht (Feld "gbnachricht")
            abgeschickt, landet sie über das Model im Gästebuch. In jedem
            Fall erscheint danach die Gästebuch-Seite mit allen Einträgen.
            Der Controller selbst erzeugt kein HTML und greift nicht direkt
            auf die Session zu, sondern nutzt dafür Model und View.
*/

class Controller
{
    public function verarbeiteAnfrage()
    {
        // TODO 1: Nachricht ggf. übernehmen, danach Gästebuch-Seite anzeigen
    }
}
