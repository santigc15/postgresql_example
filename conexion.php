<?php
require_once ("config.php");
class Conexion{
private $conn;
function __construct()
{
    try {

        $cadenaconexion="pgsql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME.";";
        $this->conn = new PDO($cadenaconexion, DB_USER, DB_PASS);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        echo "conexion ok";
    } catch(PDOException $e) {
        echo "Error al conectar a la base de datos: " . $e->getMessage();
    }

}

public function getConnection(){
    var_dump($this->conn);
    return $this->conn;
}
public function closeConnection(){
    $this->conn=null;
}



}
