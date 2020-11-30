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

<body class="bg-index">
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
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
                        <a class="dropdown-item" href="#">
                            <font color="#4b3621" size=4>
                                Desayuno
                            </font>
                        </a>
                        <a class="dropdown-item" href="#">
                            <font color="#4b3621" size=4>
                                Comida
                            </font>
                        </a>
                        <a class="dropdown-item" href="#">
                            <font color="#4b3621" size=4>
                                Cena
                            </font>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <font color="#4b3621" size=4>
                                Postres
                            </font>
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <font color="white" size=4>
                            Ingreientes
                        </font>
                    </a>
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
                <a href="">
                    <button class="btn btn-outline-warning my-2 my-sm-0">Contactanos</button>
                </a>
            </form>
        </div>
    </nav>


    <!-- COVER -->
    <div>
        <center><br><br><br><br><br><br><br>
            <h1>
                <font size=7 color="white">TODO LO QUE NECESITA TU COCINA <br> ESTA AQUÍ</font>
            </h1>
        </center>

        <div class="row">
            <div class="col-sm-4">
                <hr class="hr">
            </div>
            <div class="col-sm-4">
                <h1 class="tittle-center">
                    <center>
                        El Mejor Recetario
                    </center>
                </h1>
            </div>
            <div class="col-sm-4">
                <hr class="hr">
            </div>
        </div>

        <center><br><br>
            <h1>
                <font size=5 color="white">Esta pagina fue creada para organizar las ideas de un cocinero, <br> desde los ingredientes y utensilios necesarios, hasta postres y comidas que se <br> pueden preparar con ellos, esto con pasos de cada uno <br> y con todo lo que es necesario</font>
            </h1>
        </center> <br><br><br><br><br>
    </div>

    <!-- Sugerencias -->
    <center>
        <div class="suggest">  <br><br>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card border-primary mb-3 ml-2 mr-1">
                        <div class="card-header">
                            <?php 
                                $sql = mysqli_query($con, 'SELECT id_platillo FROM `platillo` WHERE `tipo_presentacion` = 1');

                                if(mysqli_num_rows($sql) != 0) {
                                    $row = mysqli_fetch_assoc($sql);
                                } else {
                                    header("Location: index.php");
                                }
                                
                                echo $row ['contador'];
                            ?>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Primary card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card border-primary mb-3 ml-1 mr-1">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h4 class="card-title">Primary card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card border-primary mb-3 ml-1 mr-2">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h4 class="card-title">Primary card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        </div>
                    </div>
                </div>
            </div>        
        <br><br></div>
    </center>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>