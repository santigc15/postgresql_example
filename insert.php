<?php
require_once('conexion.php');

$conexion =new Conexion();
$conn=$conexion->getConnection();


$consulta="INSERT INTO alumnos (id, nombre, email) VALUES (:id, :nombre, :email)";


$stmt = $conn->prepare($consulta);
$stmt->bindParam(':id', $id);
$stmt->bindParam(':nombre', $nombre);
$stmt->bindParam(':email', $email);
$id = "5";
$nombre = "Carlos Arias";
$email = "carlos@gmail.com";


$stmt->execute();
echo "Inserción de datos exitosa";
?>