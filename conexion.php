<?php
    $con = mysqli_connect("localhost", "root", "", "recetario");

    if (mysqli_connect_errno()) {
        echo "<p style='display: none;' id='conexion-bd'>No se pudo conectar a la base de datos :</p>".mysqli_connect_error();
    }
    else {
        echo "<p style='display: none;' id='conexion-bd'>Conexion establecida</p>";
    }

    /*$sql = mysqli_query($con, 'SELECT `nombre_receta` FROM `receta` WHERE `id_receta` = 1');

    if(mysqli_num_rows($sql) != 0) {
        $row = mysqli_fetch_assoc($sql);
    } else {
        echo "consulta erronea";
    }
    
    echo $row ['nombre_receta'];*/
?>