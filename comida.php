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

<body class="bg-comida">
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
                <font size=7 color="white">Comidas</font>
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
                                        $sql= "SELECT * FROM `platillo` WHERE `tipo_presentacion` = 2";

                                        if ($resultado = $con->query($sql)) {
                                    
                                            while ($fila = $resultado->fetch_assoc()) {
                                    ?>
                                        <div class="card border-primary mb-3 ml-2 mr-1">
                                            <div class="card-header">Comida</div>
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
                <div class="info-comida text-left text-white lead"> <br>
                    <div class="ml-3 mr-3">
                        <h2 class="ml-2">La importancia de comer</h2>
                        <hr size="80%" align="left" class="ml-2" color="white"> 
                        <p>
                            <font size="3">
                            La alimentación es necesaria en toda la vida de los animales y los seres humanos, por eso debemos absorber los nutrientes en el organismo de manera equilibrada, este nutriente se suele denominar buena nutrición y su cumplimiento es fundamental. Para el desarrollo de la vida y las diferentes actividades diarias.
                            <br>
                            Una buena dieta significa que su cuerpo obtendrá todos los nutrientes, vitaminas y minerales que necesita para su trabajo normal. Para ello, debes aprender a planificar las comidas y meriendas de manera inteligente para que sean nutritivos y bajos en calorías.
                            <br>
                            Suele estar relacionado con la buena nutrición que aporta el ejercicio, el ejercicio está muy relacionado con la vida, pues se suele utilizar una dieta equilibrada para complementar estas actividades físicas, por el contrario, el desequilibrio nutricional suele estar relacionado con el sedentarismo y la falta de nutrición. Ejercicio físico.
                            <br>
                            Los malos hábitos alimenticios han contribuido a un aumento de la obesidad en todo el mundo. Según la Organización Mundial de la Salud, en 2014, más de 1.900 millones de adultos mayores de 18 años tenían sobrepeso. Entre ellos, más de 600 millones son obesos. Incluso para aquellos que tienen suficiente peso, una dieta mal nutrida traerá mayores riesgos para la salud e incluso puede provocar enfermedades o incluso la muerte.     
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