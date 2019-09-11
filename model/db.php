<?php

class Conexion {
    private $servidor = "localhost";
    private $usuario = "root";
    private $contrasena = "";
    private $based = "prueba";
    private $conn;

    public function conectar() {
        $this->conn = new mysqli(
                $this->servidor, $this->usuario, $this->contrasena, $this->based
        );
        if ($this->conn->connect_errno) {
            echo "Fallo al contenctar a MySQL: (" . $this->conn->connect_errno . ") " . $this->conn->connect_error;
        }
        //echo $this->conn->host_info . "\n";
        return $this->conn;
    }

    public function desconectar() {
        $this->conn->close();
    }
    
    
}

?>
