<?php
    $con = mysqli_connect("localhost", "root", "", "recetario");

    if (mysqli_connect_errno()) {
        echo "<p style='display: none;' id='conexion-bd'>No se pudo conectar a la base de datos :</p>".mysqli_connect_error();
    }
    else {
        echo "<p style='display: none;' id='conexion-bd'>Conexion establecida</p>";
    }
?>