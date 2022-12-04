<?php
class Views
{

    public function getView($ruta, $vista, $data = "")
    {
        if ($ruta == "AgendaEventos") {
            $vista = "Views/" . $vista . ".php";
        } else {
            $vista = "Views/" . $ruta . "/" . $vista . ".php";
        }
        require $vista;
    }
}
