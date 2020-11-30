<?php
    $sql_verif_paso = mysqli_query($con, "SELECT `descripcion` FROM `paso` WHERE id_paso = $id_paso");

    if(mysqli_num_rows($sql_verif_paso) != 0) {
        $row = mysqli_fetch_assoc($sql_verif_paso);
    } else {
        echo '<script>alert("Consulta final");</script>';
    }

    $name_paso = $row['descripcion'];

    $sql_verif_uten = mysqli_query($con, "SELECT `nombre` FROM `utensilio` WHERE id_utensilio  = $id_utensilio");

    if(mysqli_num_rows($sql_verif_uten) != 0) {
        $row = mysqli_fetch_assoc($sql_verif_uten);
    } else {
        echo '<script>alert("Consulta final");</script>';
    }

    $name_uten = $row['nombre'];

    $sql_verif_ing = mysqli_query($con, "SELECT `ingrediente` FROM `ingredientes` WHERE id_ingredientes = $id_ingredientes");

    if(mysqli_num_rows($sql_verif_ing) != 0) {
        $row = mysqli_fetch_assoc($sql_verif_ing);
    } else {
        echo '<script>alert("Consulta final");</script>';
    }

    $name_ing = $row['ingrediente'];
?>