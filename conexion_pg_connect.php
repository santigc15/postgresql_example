<?php


    // conexión con la base de datos
    $db = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");


    // verifica si la conexión fue exitosa
    if(!$db) {
        echo "Error: No se pudo conectar a la base de datos.";
    } else {
        echo "Conexión exitosa.";
    }
?>