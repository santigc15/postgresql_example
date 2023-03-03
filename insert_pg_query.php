<?php
require_once ("conexion.php");
    // consulta SQL para insertar datos en la tabla
    $sql = "INSERT INTO alumnos (id, nombre, email) VALUES (2, 'Manuel gomez', 'manuel@example.com')";

    // ejecutar la consulta
    $result = pg_query($db, $sql);

    // verifica si la consulta fue exitosa
    if(!$result) {
        echo "Error al agregar datos a la tabla.";
    } else {
        echo "Datos agregados exitosamente.";
    }
?>