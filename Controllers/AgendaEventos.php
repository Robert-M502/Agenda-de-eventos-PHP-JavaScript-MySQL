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
            $mensaje = array('msg' => 'Todos los campos son requeridos', 'estado' => false, 'icono' => 'warning');
        } else {
            $evento = $_POST['title'];
            $fecha = $_POST['start'];
            $color = $_POST['color'];
            $respuesta = $this->model->registrar($evento, $fecha, $color);
            if ($respuesta == 1) {
                $mensaje = array('msg' => 'Evento registrado', 'estado' => true, 'icono' => 'success');
            } else {
                $mensaje = array('msg' => 'Error al registrar el evento', 'estado' => false, 'icono' => 'error');
            }
            echo json_encode($mensaje);
            die();
        }
    }

    public function listar()
    {
        $data = $this->model->listarEventos();
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }
}
