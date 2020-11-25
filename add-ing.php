<?php 
    include("conexion.php");

    $sql_count = mysqli_query($con, 'SELECT COUNT(*) FROM `ingredientes`');

    if(mysqli_num_rows($sql_count) != 0) {
        $row = mysqli_fetch_assoc($sql_count);
    } else {
        echo "consulta erronea";
    }

    $id = (int)$row['COUNT(*)'];

    $ing = $_POST["ing-add"];
    $cal = $_POST["cal-add"];

    $sql_add = mysqli_query($con, "INSERT INTO `ingredientes` (`id_ingredientes`, `ingrediente`, `caloria`) VALUES ('$id', '$ing', '$cal')");

    echo '
        <img src="https://media2.giphy.com/media/xULW8PGjOHlVOqNZPq/giphy.gif" alt="Redirect" width=100%> 
        ';

    header( "refresh:3;url=add.php" ); 
?>