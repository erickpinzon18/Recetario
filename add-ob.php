<?php 
    include("conexion.php");

    $sql_count = mysqli_query($con, 'SELECT COUNT(*) FROM `utensilio`');

    if(mysqli_num_rows($sql_count) != 0) {
        $row = mysqli_fetch_assoc($sql_count);
    } else {
        echo "consulta erronea";
    }

    $id = (int)$row['COUNT(*)'];

    $ob = $_POST["ob-add"];
    $ub = $_POST["ub-add"];

    $sql_add = mysqli_query($con, "INSERT INTO `utensilio` (`id_utensilio`, `nombre`, `ubicacion`) VALUES ('$id', '$ob', '$ub')");

    echo '
        <img src="https://media2.giphy.com/media/xULW8PGjOHlVOqNZPq/giphy.gif" alt="Redirect" width=100%> 
        ';

    header( "refresh:3;url=add.php" ); 
?>