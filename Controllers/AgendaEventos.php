<?php
class AgendaEventos extends Controller
{
    public function __construct()
    {
        parent::__construct();
        session_start();
    }

    public function index()
    {
        $data['title'] = 'Principal';
        $this->views->getView('AgendaEventos', "index", $data);
    }

    public function registrar()
    {
        if (empty($_POST['title']) || empty($_POST['start']) || empty($_POST['color'])) {
            $mensaje = array('msg' => 'Todos los campos son requeridos', 'estado' => false, 'icon' => 'warning');
        } else {
            $evento = $_POST['title'];
            $fecha = $_POST['start'];
            $color = $_POST['color'];
            $respuesta = $this->model->registrar($evento, $fecha, $color);;
            echo $respuesta;
        }
    }
}
