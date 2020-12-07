<?php
    include("conexion.php");
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

<body class="bg-cena">
    <!-- NAV -->
    <nav class="navbar navbar-expand-lg nav-obs">
        <a class="navbar-brand" href="index.php">
            <img src="https://img.icons8.com/android/24/000000/fork.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            <font size=5 color="black">RECETARIO</font>
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
        <center><br><br>
            <h1>
                <font size=7 color="white">Cenas</font>
            </h1>
        </center> <br><br>
    </div>

    <!-- Sugerencias -->
    <form action="view.php" method="POST">
       <div class="row mr-4">
       <div class="col-sm-8">
                <div class="info ml-5" style="width= 100%">  <br><br>
                    <h1 class="ml-5">
                        <font size=6 color="white">Recetas</font>
                    </h1> <hr color="white" width="50%" align="left" class="ml-5">
                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-6">
                                <center>
                                    <?php
                                        $sql= "SELECT * FROM `platillo` WHERE `tipo_presentacion` = 3";

                                        if ($resultado = $con->query($sql)) {
                                    
                                            while ($fila = $resultado->fetch_assoc()) {
                                    ?>
                                        <div class="card border-primary mb-3 ml-2 mr-1">
                                            <div class="card-header">Cena</div>
                                            <div class="card-body">
                                                <h4 class="card-title">
                                                    <?php 
                                                        echo $fila ['contenido'];
                                                    ?>
                                                </h4>
                                                <p class="card-text">
                                                    <?php
                                                        echo $fila ['comentarios'];
                                                        echo '
                                                            </p>
                                                            <a href="view.php?nik='.$fila['contenido'].'"><p class="btn btn-primary">Ver Desayuno</p></a>
                                                            ';
                                                    ?>
                                            </div>
                                        </div>
                                    <?php
                                            }
                                        
                                            $resultado->free();
                                        }
                                    ?>
                                </div>
                            </center>
                        </div>
                </div> <br><br>
           </div>
           <div class="col-sm-4">
                <div class="info-cena text-left text-white lead"> <br>
                    <div class="ml-3 mr-3">
                        <h2 class="ml-2">La importancia de comer</h2>
                        <hr size="80%" align="left" class="ml-2" color="white"> 
                        <p>
                            <font size="3">
                            "Desayuna como un rey, come como un príncipe, come como un mendigo" Este es sin duda uno de los refranes más famosos en el campo de la nutrición. Sin embargo, en el otro extremo, es importante no "saltarse" esta hora de comida, porque durante el sueño, ayunamos más tiempo que en otros momentos del día. Por lo tanto, la solución es la cena, que puede reponer las reservas esenciales de glucógeno durante el sueño. Sugerencias de cena Además del desayuno y la cena, también conviene cenar temprano para asegurar una mejor digestión y absorción de los alimentos, y evitar síntomas molestos que pueden provocar trastornos del sueño, como flatulencias e hinchazón. El conocimiento básico de una cena saludable es el mismo que el del almuerzo. Su última comida debe contener alrededor de 300-450 kcal, que provienen de fibra y proteína y una pequeña cantidad de grasa vegetal.
                            <br>
                            Debe incluir al menos tres categorías de alimentos: frutas / verduras, cereales y alimentos de origen animal. Debe limitarse a grasas saturadas y azúcares simples. 
                            <br><br>
                            </font>
                        </p>
                    </div>
                </div>
           </div>
       </div>
    </form>    

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