<?php
    $sql_count = mysqli_query($con, 'SELECT DISTINCT(id_receta) FROM `receta` WHERE 1');

    if(mysqli_num_rows($sql_count) != 0) {
        $row = mysqli_fetch_assoc($sql_count);
    } else {
        echo "consulta erronea";
    }

    $id = (int)$row['id_receta'];
    $id = $id + 1;
    $n = 1;

    echo $id.$nom_receta.$pasos_array[$n].$uten_array[$n].$ing_array[$n].$ing_n_array[$n];
    print_r($pasos_array[$n]);

    /*while ($n <= $n_pasos) {
        $sql_add_receta = mysqli_query($con, "INSERT INTO `receta` (`id_receta`, `nombre_receta`, `id_paso`, `id_utensilio`, `id_ingredientes`, `cantidad_ingredientes`, `contador`) VALUES ('$id', '$nom_receta', '$pasos_array[$n]', '$uten_array[$n]', '$ing_array[$n]', ''$ing_n_array[$n]'', NULL)");
        $n++;
    }*/
?>