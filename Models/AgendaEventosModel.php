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
        if ($data == 1) {
            $msg = 1;
        } else {
            $msg = 0;
        }
        return $msg;
    }
}
