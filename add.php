<?php 
    include("conexion.php");
    $tipo_comida = "";
    $uten_util = "";
    $tit_plat = "";
    $desc_plat = "";
    $desc_paso_1 = "";
    $uten_paso_1 = "";
    $desc_paso_2 = "";
    $uten_paso_2 = "";
    $desc_paso_3 = "";
    $uten_paso_3 = "";
    $time_paso_1 = "";
    $time_paso_2 = "";
    $time_paso_3 = "";
    $comen_paso_1 = "";
    $comen_paso_2 = "";
    $comen_paso_3 = "";
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script>
        function ret() {
            document.getElementById("btn-send").style.display = "inline";
            document.getElementById("btn-verif").style.display = "none";
        }
    </script>

    <!-- Style Personal -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Inicio</title>
</head>

<body class="bg-add">
    <!-- NAV -->
    <nav class="navbar navbar-expand-lg nav-obs">
        <a class="navbar-brand" href="#">
            <img src="https://img.icons8.com/android/24/000000/fork.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            <font size=5 color="black">RECETARIO</font>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="#">
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

    <!-- Crear -->
    <center><br><br><br><br>
        <h1>
            <font size=7 color="#4b3621">Crear Receta</font>
        </h1>
        <form action="add.php" method="POST" enctype="multipart/form-data"> <br>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-4">
                    <label><font size=5 color="#4b3621">Tipo de Comida</font></label>
                    <select name="tipo-comida" class="form-control">
                        <option selected>Seleccione un tipo de Comida</option>
                        <option>Desayuno</option>
                        <option>Comida</option>
                        <option>Cena</option>
                    </select><br>

                    <?php 
                        if (isset($_POST['tipo-comida'])) {
                            $tipo_comida = $_POST['tipo-comida'];
                        } 
                    ?>

                    <label><font size=5 color="#4b3621">Utensilios</font></label> <br>
                    <label><font size=3 color="#4b3621">Seleccione los utensilios que se utilizarán</font></label> <br> <br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="uten-util-1" value="1">
                        <label class="form-check-label">Pinza</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="uten-util-2" value="2">
                        <label class="form-check-label">Cucharon</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="uten-util-3" value="3">
                        <label class="form-check-label">Colador</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="uten-util-4" value="4">
                        <label class="form-check-label">Cuchillo</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="uten-util-5" value="5">
                        <label class="form-check-label">Rayador</label>
                    </div>

                    <?php 
                        if (isset($_POST['uten-util-1'])) {
                            $uten_util = $uten_util." Pinza ";
                        } 
                        if (isset($_POST['uten-util-2'])) {
                            $uten_util = $uten_util." Cucharon ";
                        } 
                        if (isset($_POST['uten-util-3'])) {
                            $uten_util = $uten_util." Colador ";
                        } 
                        if (isset($_POST['uten-util-4'])) {
                            $uten_util = $uten_util." Cuchillo ";
                        } 
                        if (isset($_POST['uten-util-5'])) {
                            $uten_util = $uten_util." Rayador ";
                        } 
                    ?>
                </div>
                <div class="col-sm-2"></div>

                <div class="col-sm-4"> <br>
                    <label><font size=5 color="#4b3621">Nombre del Platillo</font></label>
                    <input type="text" class="form-control" name="titulo-platillo"> <br>

                    <?php 
                        if (isset($_POST['titulo-platillo'])) {
                            $tit_plat = $_POST['titulo-platillo'];
                        } 
                    ?>

                    <label><font size=5 color="#4b3621">Descripcion del Platillo</font></label>
                    <textarea class="form-control" name="desc-platillo" rows="3"></textarea>

                    <?php 
                        if (isset($_POST['desc-platillo'])) {
                            $desc_plat = $_POST['desc-platillo'];
                        } 
                    ?>
                </div>
            </div>

            <hr color="white">

            <font size=6 color="#4b3621">Paso 1</font>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8"> <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <label><font size=5 color="#4b3621">Descripcion del Paso</font></label>
                            <textarea class="form-control" name="desc-paso-1" rows="7"></textarea>

                            <?php 
                                if (isset($_POST['desc-paso-1'])) {
                                    $desc_paso_1 = $_POST['desc-paso-1'];
                                }
                            ?>
                        </div>
                        <div class="col-sm-6">
                            <label><font size=5 color="#4b3621">Utensilios</font></label> <br>
                            <label><font size=3 color="#4b3621">Seleccione los utensilios que se utilizarán en este paso</font></label> <br> <br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="uten-paso-1" value="">
                                <label class="form-check-label">Pinza</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="uten-paso-2" value="">
                                <label class="form-check-label">Cucharon</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="uten-paso-3" value="">
                                <label class="form-check-label">Colador</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="uten-paso-5" value="">
                                <label class="form-check-label">Cuchillo</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="uten-paso-5" value="">
                                <label class="form-check-label">Rayador</label>
                            </div>
                            
                            <?php                         
                                if (isset($_POST['uten-paso-1'])) {
                                    $uten_paso_1 = $uten_paso_1." Pinza ";
                                } 
                                if (isset($_POST['uten-util-2'])) {
                                    $uten_paso_1 = $uten_paso_1." Cucharon ";
                                } 
                                if (isset($_POST['uten-util-3'])) {
                                    $uten_paso_1 = $uten_paso_1." Colador ";
                                } 
                                if (isset($_POST['uten-util-4'])) {
                                    $uten_paso_1 = $uten_paso_1." Cuchillo ";
                                } 
                                if (isset($_POST['uten-util-5'])) {
                                    $uten_paso_1 = $uten_paso_1." Rayador ";
                                } 
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6"> <br>
                            <label><font size=5 color="#4b3621">Tiempo</font></label> <br>
                            <div class="input-group">
                                <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="example: 1:30 / 0:30" name="time-paso-1">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">horas</div>
                                </div>
                                <?php 
                                    if (isset($_POST['time-paso-1'])) {
                                        $time_paso_1 = $_POST['time-paso-1'];
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="col-sm-6"> <br>
                            <label><font size=5 color="#4b3621">Comentario</font></label> <br>
                            <input type="text" class="form-control" name="comen-paso-1"> <br>
                            <?php 
                                if (isset($_POST['comen-paso-1'])) {
                                    $comen_paso_1 = $_POST['comen-paso-1'];
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <hr color="white">

            <font size=6 color="#4b3621">Paso 2</font>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8"> <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <label><font size=5 color="#4b3621">Descripcion del Paso</font></label>
                            <textarea class="form-control" name="desc-paso-2" rows="7"></textarea>
                            
                            <?php 
                                if (isset($_POST['desc-paso-2'])) {
                                    $desc_paso_2 = $_POST['desc-paso-2'];
                                }
                            ?>
                        </div>
                        <div class="col-sm-6">
                            <label><font size=5 color="#4b3621">Utensilios</font></label> <br>
                            <label><font size=3 color="#4b3621">Seleccione los utensilios que se utilizarán en este paso</font></label> <br> <br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="uten-paso-2-1" value="">
                                <label class="form-check-label">Pinza</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="uten-paso-2-2" value="">
                                <label class="form-check-label">Cucharon</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="uten-paso-2-3" value="">
                                <label class="form-check-label">Colador</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="uten-paso-2-4" value="">
                                <label class="form-check-label">Cuchillo</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="uten-paso-2-5" value="">
                                <label class="form-check-label">Rayador</label>
                            </div>

                            <?php                         
                                if (isset($_POST['uten-paso-2-1'])) {
                                    $uten_paso_2 = $uten_paso_2." Pinza ";
                                } 
                                if (isset($_POST['uten-paso-2-2'])) {
                                    $uten_paso_2 = $uten_paso_2." Cucharon ";
                                } 
                                if (isset($_POST['uten-paso-2-3'])) {
                                    $uten_paso_2 = $uten_paso_2." Colador ";
                                } 
                                if (isset($_POST['uten-paso-2-4'])) {
                                    $uten_paso_2 = $uten_paso_2." Cuchillo ";
                                } 
                                if (isset($_POST['uten-paso-2-5'])) {
                                    $uten_paso_2 = $uten_paso_2." Rayador ";
                                } 
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6"> <br>
                            <label><font size=5 color="#4b3621">Tiempo</font></label> <br>
                            <div class="input-group">
                                <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="example: 1:30 / 0:30" name="time-paso-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">horas</div>
                                </div>
                                
                                <?php 
                                    if (isset($_POST['time-paso-2'])) {
                                        $time_paso_2 = $_POST['time-paso-2'];
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="col-sm-6"> <br>
                            <label><font size=5 color="#4b3621">Comentario</font></label> <br>
                            <input type="text" class="form-control" name="comen-paso-2"> <br>
                            <?php 
                                if (isset($_POST['comen-paso-2'])) {
                                    $comen_paso_2 = $_POST['comen-paso-2'];
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <hr color="white">

            <font size=6 color="#4b3621">Paso 3</font>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8"> <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <label><font size=5 color="#4b3621">Descripcion del Paso</font></label>
                            <textarea class="form-control" name="desc-paso-3" rows="7"></textarea>
                            
                            <?php 
                                if (isset($_POST['desc-paso-3'])) {
                                    $desc_paso_3 = $_POST['desc-paso-3'];
                                }
                            ?>
                        </div>
                        <div class="col-sm-6">
                            <label><font size=5 color="#4b3621">Utensilios</font></label> <br>
                            <label><font size=3 color="#4b3621">Seleccione los utensilios que se utilizarán en este paso</font></label> <br> <br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="uten-paso-3-1" value="">
                                <label class="form-check-label">Pinza</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="uten-paso-3-2" value="">
                                <label class="form-check-label">Cucharon</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="uten-paso-3-3" value="">
                                <label class="form-check-label">Colador</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="uten-paso-3-4" value="">
                                <label class="form-check-label">Cuchillo</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="uten-paso-3-5" value="">
                                <label class="form-check-label">Rayador</label>
                            </div>

                            <?php                         
                                if (isset($_POST['uten-paso-3-1'])) {
                                    $uten_paso_3 = $uten_paso_3." Pinza ";
                                } 
                                if (isset($_POST['uten-paso-3-2'])) {
                                    $uten_paso_3 = $uten_paso_3." Cucharon ";
                                } 
                                if (isset($_POST['uten-paso-3-3'])) {
                                    $uten_paso_3 = $uten_paso_3." Colador ";
                                } 
                                if (isset($_POST['uten-paso-3-4'])) {
                                    $uten_paso_3 = $uten_paso_3." Cuchillo ";
                                } 
                                if (isset($_POST['uten-paso-3-5'])) {
                                    $uten_paso_3 = $uten_paso_3." Rayador ";
                                } 
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6"> <br>
                            <label><font size=5 color="#4b3621">Tiempo</font></label> <br>
                            <div class="input-group">
                                <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="example: 1:30 / 0:30" name="time-paso-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">horas</div>
                                </div>

                                <?php 
                                    if (isset($_POST['time-paso-3'])) {
                                        $time_paso_3 = $_POST['time-paso-3'];
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="col-sm-6"> <br>
                            <label><font size=5 color="#4b3621">Comentario</font></label> <br>
                            <input type="text" class="form-control" name="comen-paso-3"> <br>
                            <?php 
                                if (isset($_POST['comen-paso-3'])) {
                                    $comen_paso_3 = $_POST['comen-paso-3'];
                                }

                                echo $comen_paso_3;
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <hr color="white">

           <!-- <div class="suggest">
                <label for="foto"><font size=5 color="#4b3621">Imagen del Platillo</font></label> <br>
                <input type="file" class="form-control-file" id="foto" aria-describedby="fileHelp" name="foto" style="display:none;">
                <button type="button" class="btn btn-outline-primary" onclick="document.getElementById('foto').click()">Subir Imagen</button>
                <small id="fileHelp" class="form-text text-muted">Inserta la imagen representativa de tu platillo</small>
            </div>-->

            <hr color="white">

            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal" id="btn-verif">Verificar</button>
            <input type="submit" class="btn btn-outline-success" value="Enviar" style="display:none;" id="btn-send"></input>
        </form>
    </center>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deseas enviar esta receta?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-info" data-dismiss="modal">Editar</button>
                    <button type="button" class="btn btn-outline-success" data-dismiss="modal" onclick="ret()">Enviar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>