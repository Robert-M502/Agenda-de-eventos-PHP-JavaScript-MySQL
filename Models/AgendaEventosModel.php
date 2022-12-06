<?php
class AgendaEventosModel extends Query
{
    public function __construct()
    {
        parent::__construct();
    }

    public function registrar($evento, $fecha, $color)
    {
        $sql = "INSERT INTO eventos (title, start, color) VALUES (?,?,?)";
        $array = array($evento, $fecha, $color);
        $data = $this->insert($sql, $array);
        if ($data == true) {
            $msg = 1;
        } else {
            $msg = 0;
        }
        return $msg;
    }

    public function listarEventos()
    {
        $sql = "SELECT * FROM eventos";
        return $this->select_all($sql);
    }
}
