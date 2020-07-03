<?php
class Conectar
{
    private $servidor = "localhost";
    private $usuario = "root";
    private $password = "";
    private $db = "compras_en_caliente";

    public function conexion()
    {
        $conexion = mysqli_connect(
            $this->servidor,
            $this->usuario,
            $this->password,
            $this->db
        );
        return $conexion;
    }
}
