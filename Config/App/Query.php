<?php
class Query extends Conexion
{
    private $pdo, $con, $sql, $datos;
    public function __construct()
    {
        $this->pdo = new Conexion();
        $this->con = $this->pdo->conect();
    }

    /* Insert */
    public function insert(string $sql, array $datos)
    {
        $this->sql = $sql;
        $this->datos = $datos;
        $insert = $this->con->prepare($this->sql);
        $data = $insert->execute($this->datos);
        if ($data) {
            $res = $this->con->lastInsertId();
        } else {
            $res = 0;
        }
        return $res;
    }

    /* Select */
    public function select(string $sql)
    {
        $this->sql = $sql;
        $resul = $this->con->prepare($this->sql);
        $resul->execute();
        $data = $resul->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    /* Select All */
    public function select_all(string $sql)
    {
        $this->sql = $sql;
        $result = $this->con->prepare($this->sql);
        $result->execute();
        $data = $result->fetchall(PDO::FETCH_ASSOC);
        return $data;
    }

    /* Update */
    public function update(string $sql, array $arrValues)
    {
        $this->sql = $sql;
        $this->arrValues = $arrValues;
        $update = $this->con->prepare($this->sql);
        $resExecute = $update->execute($this->arrValues);
        return $resExecute;
    }

    /* Delete */
    public function delete(string $sql)
    {
        $this->sql = $sql;
        $result = $this->con->prepare($this->sql);
        $del = $result->execute();
        return $del;
    }
}
