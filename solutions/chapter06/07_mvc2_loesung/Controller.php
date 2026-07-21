<?php
/*
    LOESUNGSVORSCHLAG - Controller
*/

class Controller
{
    public function verarbeiteAnfrage()
    {
        $protokoll = new Protokoll();

        if (isset($_POST['nachricht']) && trim($_POST['nachricht']) !== '') {
            $protokoll->hinzufuegen($_POST['nachricht']);
        }

        $view = new ProtokollView($protokoll);
        $view->render();
    }
}
