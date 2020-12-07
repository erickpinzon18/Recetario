<?php
    include("conexion.php");

    $nik = $_GET['nik'];
    $sql = mysqli_query($con, "SELECT * FROM `platillo` WHERE `contenido` = '$nik'");

    if(mysqli_num_rows($sql) != 0) {
        $row = mysqli_fetch_assoc($sql);
    }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Style Personal -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Inicio</title>
</head>

<body class="bg-view">
    <!-- NAV -->
    <nav class="navbar navbar-expand-lg nav-obs">
        <a class="navbar-brand" href="index.php">
            <img src="https://img.icons8.com/android/24/000000/fork.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            <font size=5 color="white">RECETARIO</font>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <font color="white" size=4>
                            Inicio
                        </font> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                        <font color="white" size=4>
                            Comidas
                        </font>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item disabled" disabled>
                            <font color="#4b3621" size=4>
                                Tipos
                            </font>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="desayuno.php">
                            <font color="#4b3621" size=4>
                                Desayuno
                            </font>
                        </a>
                        <a class="dropdown-item" href="comida.php">
                            <font color="#4b3621" size=4>
                                Comida
                            </font>
                        </a>
                        <a class="dropdown-item" href="cena.php">
                            <font color="#4b3621" size=4>
                                Cena
                            </font>
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="add.php">
                        <font color="white" size=4>
                            Añadir
                        </font>
                    </a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="contactanos.html">
                    <p class="btn btn-outline-warning my-2 my-sm-0">Contactanos</p>
                </a>
            </form>
        </div>
    </nav>


    <!-- COVER -->
    <div>
        <center><br><br><br>
            <h1>
                <font size=7 color="white">
                    <?php
                        echo $row ["contenido"];
                    ?>
                </font>
            </h1>
        </center>

        <center><br><br>
            <h1>
                <font size=5 color="white"> 
                    <?php
                        echo $row ["comentarios"];
                    ?>
                </font>
            </h1>
                <br>
            <h3>
                <font size=5 color="white"> 
                    Fuente: 
                    <?php
                        echo $row ["fuente"];
                    ?>
                </font>
            </h3>
        </center> <br><br><br>
    </div>

    <!-- Sugerencias -->
    <center>
        <div class="suggest">  <br><br>
            <h1>
                <font size=6 color="white">Ingredientes</font>
            </h1><br>
            <div class="text-left text-white ml-5 mr-5 lead">
                <ul>
                <?php
                    $nombre = $row["contenido"];

                    $sql_get_minmax = mysqli_query($con, "SELECT MIN(`contador`), MAX(`contador`) FROM `receta` WHERE nombre_receta = '$nombre'");

                    if(mysqli_num_rows($sql_get_minmax) != 0) {
                        $row = mysqli_fetch_assoc($sql_get_minmax);
                    }
                        
                    $min = $row['MIN(`contador`)'];
                    $max = $row['MAX(`contador`)'];

                    while($min <= $max) {
                        $sql_get_id = mysqli_query($con, "SELECT `id_ingredientes` FROM `receta` WHERE contador = $min");

                        if(mysqli_num_rows($sql_get_id) != 0) {
                            $row = mysqli_fetch_assoc($sql_get_id);
                        }

                        $id_ingrediente = $row['id_ingredientes'];

                        $sql_get_ing = mysqli_query($con, "SELECT `ingrediente`,`caloria` FROM `ingredientes` WHERE `id_ingredientes` = $id_ingrediente");

                        if(mysqli_num_rows($sql_get_ing) != 0) {
                            $row = mysqli_fetch_assoc($sql_get_ing);
                        }
                        echo '
                            <li>
                                '.$row["ingrediente"].'
                                <ul>
                                    <li>Calorias: '.$row["caloria"].'</li>
                                </ul>
                            </li>
                            ';
                        $min++;
                    }
                ?> <br>
                </ul>
            </div>        
        </div> <br><br>

        <div class="suggest">  <br><br>
            <h1>
                <font size=6 color="white">Utensilios</font>
            </h1><br>
            <div class="text-left text-white ml-5 mr-5 lead">
                <ul>
                <?php
                    $sql_get_minmax = mysqli_query($con, "SELECT MIN(`contador`), MAX(`contador`) FROM `receta` WHERE nombre_receta = '$nombre'");

                    if(mysqli_num_rows($sql_get_minmax) != 0) {
                        $row = mysqli_fetch_assoc($sql_get_minmax);
                    }
                        
                    $min = $row['MIN(`contador`)'];
                    $max = $row['MAX(`contador`)'];

                    while($min <= $max) {
                        $sql_get_id = mysqli_query($con, "SELECT `id_utensilio` FROM `receta` WHERE contador = $min");

                        if(mysqli_num_rows($sql_get_id) != 0) {
                            $row = mysqli_fetch_assoc($sql_get_id);
                        }

                        $id_utensilio = $row['id_utensilio'];

                        $sql_get_ut = mysqli_query($con, "SELECT `nombre`,`ubicacion` FROM `utensilio` WHERE `id_utensilio` = $id_utensilio");

                        if(mysqli_num_rows($sql_get_ut) != 0) {
                            $row = mysqli_fetch_assoc($sql_get_ut);
                        }
                        echo '
                            <li>
                                '.$row["nombre"].'
                                <ul>
                                    <li>Ubicacion: '.$row["ubicacion"].'</li>
                                </ul>
                            </li>
                            ';
                        $min++;
                    }
                ?> <br>
                </ul>
            </div>        
        </div> <br><br>

        <div class="info text-white" style="width:70%;"> <br>
            <h1 class="display-4 ml-5 text-left">Pasos</h1> <br>
            <p class="lead ml-5 mr-5 text-left">Sigue esta serie de sencillos pasos para tener lista tu <b><?php echo $nombre; ?></b></p>
            <hr class="ml-5 mr-5" color="white"> <br>
            <div class="row">
                <div class="col-sm-5 ml-5">
                    <p class="lead ml-5 mr-5 text-left">
                        <ul>
                            <?php
                                $sql_get_minmax = mysqli_query($con, "SELECT MIN(`contador`), MAX(`contador`) FROM `receta` WHERE nombre_receta = '$nombre'");

                                if(mysqli_num_rows($sql_get_minmax) != 0) {
                                    $row = mysqli_fetch_assoc($sql_get_minmax);
                                }
                                    
                                $min = $row['MIN(`contador`)'];
                                $max = $row['MAX(`contador`)'];

                                while($min <= $max) {
                                    $sql_get_paso = mysqli_query($con, "SELECT `id_paso`,`id_utensilio`,`id_ingredientes`,`cantidad_ingredientes` FROM `receta` WHERE contador = $min");

                                    if(mysqli_num_rows($sql_get_paso) != 0) {
                                        $row = mysqli_fetch_assoc($sql_get_paso);
                                    }

                                    $id_paso = $row['id_paso'];
                                    $id_utensilio = $row['id_utensilio'];
                                    $id_ingredientes = $row['id_ingredientes'];
                                    $cantidad_ingredientes = $row['cantidad_ingredientes'];

                                    // Traducir (paso)
                                    $sql_trad_paso = mysqli_query($con, "SELECT `descripcion`,`tiempo` FROM `paso` WHERE `id_paso` = $id_paso");

                                    if(mysqli_num_rows($sql_trad_paso) != 0) {
                                        $row = mysqli_fetch_assoc($sql_trad_paso);
                                    }

                                    $name_paso = $row['descripcion'];
                                    $time_paso = $row['tiempo'];

                                    // Traducir (uten)
                                    $sql_trad_uten = mysqli_query($con, "SELECT `nombre`,`ubicacion` FROM `utensilio` WHERE `id_utensilio` = $id_utensilio");

                                    if(mysqli_num_rows($sql_trad_uten) != 0) {
                                        $row = mysqli_fetch_assoc($sql_trad_uten);
                                    }

                                    $name_uten = $row['nombre'];
                                    $ubi_uten = $row['ubicacion'];

                                    // Traducir (ing)
                                    $sql_trad_ing = mysqli_query($con, "SELECT `ingrediente`,`caloria` FROM `ingredientes` WHERE `id_ingredientes` = $id_ingredientes");

                                    if(mysqli_num_rows($sql_trad_ing) != 0) {
                                        $row = mysqli_fetch_assoc($sql_trad_ing);
                                    }

                                    $name_ing = $row['ingrediente'];
                                    $cal_ing = $row['caloria'];

                                    echo '
                                        <li>
                                            '.$name_paso.' por '
                                            .$time_paso.' el ingrediente '
                                            .$name_ing.' en '
                                            .$name_uten.' ubicado en '
                                            .$ubi_uten.'
                                        </li>
                                        ';
                                    $min++;
                                }
                            ?>
                        </ul> 
                    </p>
                </div>
                <div class="col-sm-5 ml-4 mr-5">
                <img src="https://png.pngtree.com/png-clipart/20190120/ourlarge/pngtree-home-furniture-kitchen-grease-pump-png-image_499656.jpg" width="40%"> <br><br>
                </div>
            </div>
        </div> <br><br>
    </center>

    <footer class="text-center footer"> <br>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <p class="ml-2 lead mr-2">
                    <font size=4>
                        Comer sano durante toda la vida ayuda a prevenir la malnutrición en todas sus formas, así como diversas enfermedades y trastornos no transmisibles. Sin embargo, el aumento en la producción de alimentos procesados, la rápida urbanización y los cambios en los estilos de vida han provocado cambios en los hábitos alimentarios. Actualmente, las personas consumen más alimentos hipercalóricos, grasas, azúcares libres y sal / sodio. Por otro lado, muchas personas no comen suficientes frutas, verduras y fibra como los cereales integrales.
                    </font> <hr> <br>
                    <font size=4>
                        Necesitas ayuda? Visita estas paginas: <br>
                    </font>
                    <ul class="text-left">
                        <li><a href="https://www.who.int/es/news-room/fact-sheets/detail/healthy-diet">https://www.who.int/es/news-room/fact-sheets/detail/healthy-diet</a></li>
                        <li><a href="https://www.minsalud.gov.co/salud/publica/HS/Paginas/que-es-alimentacion-saludable.aspx">https://www.minsalud.gov.co/salud/publica/HS/Paginas/que-es-alimentacion-saludable.aspx</a></li>
                    </ul>
                </p>
            </div>
        </div>
    </footer>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>