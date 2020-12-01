<?php
    include("conexion.php");

    $sql_count = mysqli_query($con, 'SELECT DISTINCT(`id_receta`) FROM `receta`');

    if(mysqli_num_rows($sql_count) != 0) {
        $row = mysqli_fetch_assoc($sql_count);
    }

    $id = (int)$row['id_receta'];
    
    $sql_search = mysqli_query($con, '');

    $id = $id + 1;

    $titulo = $_POST['fin-nom'];
    $desc =  $_POST['fin-desc'];
    $ing_princi = $_POST['fin-ing-prin'];
    $paso = $_POST['fin-paso'];
    $utenci = $_POST['fin-uten'];
    $ing = $_POST['fin-ing'];
    $ing_n = $_POST['fin-ing-n'];

    $sql_add = mysqli_query($con, "INSERT INTO `receta` (`id_receta`, `nombre_receta`, `id_paso`, `id_utensilio`, `id_ingredientes`, `cantidad_ingredientes`, `contador`) VALUES ('$id', '$titulo', $paso, $utenci, $ing, $ing_n, NULL)");
    
    echo '
        //<img src="https://media2.giphy.com/media/xULW8PGjOHlVOqNZPq/giphy.gif" alt="Redirect" width=100%> 
      //  ';

    header( "refresh:3;url=add.php" ); 
?>