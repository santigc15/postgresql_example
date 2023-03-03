<?php

require_once ("conexion.php");

    // consulta SQL para seleccionar todos los registros de la tabla
    $sql = "SELECT * FROM alumnos";

    // ejecutar la consulta
    $result = pg_query($db, $sql);

    // verifica si la consulta fue exitosa
    if(!$result) {
        echo "Error al seleccionar datos de la tabla.";
    } else {
        // recorre los resultados y muestra los datos en una tabla
        echo "<table>";
        echo "<tr><th>ID</th><th>Nombre</th><th>Email</th></tr>";
        while($row = pg_fetch_assoc($result)) {
            echo "<tr><td>" . $row['id'] . "</td><td>" . $row['nombre'] . "</td><td>" . $row['email'] . "</td></tr>";
        }
        echo "</table>";
    }
?>

