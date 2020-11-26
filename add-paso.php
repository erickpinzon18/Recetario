<?php 
    include("conexion.php");

    $sql_count = mysqli_query($con, 'SELECT COUNT(*) FROM `paso`');

    if(mysqli_num_rows($sql_count) != 0) {
        $row = mysqli_fetch_assoc($sql_count);
    } else {
        echo "consulta erronea";
    }

    $id = (int)$row['COUNT(*)'];

    $paso = $_POST["paso-add"];
    $time = $_POST["time-add"];

    $sql_add = mysqli_query($con, "INSERT INTO `paso` (`id_paso`, `descripcion`, `tiempo`) VALUES ('$id', '$paso', '$time')");

    echo '
        <img src="https://media2.giphy.com/media/xULW8PGjOHlVOqNZPq/giphy.gif" alt="Redirect" width=100%> 
        ';

    header( "refresh:3;url=add.php" ); 
?>