<?php
    include("conexion.php");

    $titulo = $_POST['fin-nom'];
    $desc =  $_POST['fin-desc'];
    $ing_princi = $_POST['fin-ing-prin'];
    $paso = $_POST['fin-paso'];
    $utenci = $_POST['fin-uten'];
    $ing = $_POST['fin-ing'];
    $ing_n = $_POST['fin-ing-n'];
    $tipo_comida = $_POST['fin-tipo'];
    $fuentes = $_POST['fin-fuentes'];

    $sql_count = mysqli_query($con, 'SELECT DISTINCT(`id_receta`) FROM `receta`');

    if(mysqli_num_rows($sql_count) != 0) {
        $row = mysqli_fetch_assoc($sql_count);
    }

    $id = (int)$row['id_receta'];
    
    $sql_nom = mysqli_query($con, "SELECT * FROM `receta` WHERE `nombre_receta` = '$titulo'");

    if(mysqli_num_rows($sql_nom) != 0) {
        $row = mysqli_fetch_assoc($sql_nom);
    } else {
        $id = $id + 1;
        $sql_count_plat = mysqli_query($con, 'SELECT COUNT(*) FROM `platillo`');

        if(mysqli_num_rows($sql_count_plat) != 0) {
            $row = mysqli_fetch_assoc($sql_count_plat);
        }

        $id_plat = (int)$row['COUNT(*)'];
        $id_plat = $id_plat + 1;

        $sql_add_plat = mysqli_query($con, "INSERT INTO `platillo` (`id_platillo`, `id_receta`, `tipo_presentacion`, `fuente`, `contenido`, `ing_principal`, `comentarios`) VALUES ('$id_plat', '$id', '$tipo_comida', '$fuentes', '$titulo', '$ing_princi', '$desc')");
    }

    $sql_add = mysqli_query($con, "INSERT INTO `receta` (`id_receta`, `nombre_receta`, `id_paso`, `id_utensilio`, `id_ingredientes`, `cantidad_ingredientes`, `contador`) VALUES ('$id', '$titulo', $paso, $utenci, $ing, $ing_n, NULL)");
    
    echo '
        //<img src="https://media2.giphy.com/media/xULW8PGjOHlVOqNZPq/giphy.gif" alt="Redirect" width=100%> 
      //  ';

    header( "refresh:3;url=add.php" ); 
?>