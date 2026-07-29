<?php
/*
    LÖSUNGSVORSCHLAG - Controller
*/

class Controller
{
    public function verarbeiteAnfrage()
    {
        $gaestebuch = new Gaestebuch();

        if (isset($_POST['gbnachricht']) && $_POST['gbnachricht'] !== '') {
            $gaestebuch->hinzufuegen($_POST['gbnachricht']);
        }

        $view = new GaestebuchView($gaestebuch);
        $view->render();
    }
}
