<?php 
    include("conexion.php");
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

        function click() {
            document.getElementById("btn-pasos").click();
        }

        function end() {
            document.getElementById("fin-nom").value = document.getElementById("tit-plat").value;
            document.getElementById("fin-desc").value = document.getElementById("desc-plat").value;
            document.getElementById("fin-ing-prin").value = document.getElementById("ing-prin").value;
            document.getElementById("fin-paso").value = document.getElementById("paso-plat").value;
            document.getElementById("fin-uten").value = document.getElementById("uten-plat").value;
            document.getElementById("fin-ing").value = document.getElementById("ing-plat").value;
            document.getElementById("fin-ing-n").value = document.getElementById("ing-n-plat").value;
            document.getElementById("btn-send-receta").click();
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

    <!-- Crear -->
    <center><br><br><br><br>
        <h1>
            <font size=7 color="#4b3621">Crear Receta</font>
        </h1>
        <form action="add.php" method="POST"> <br>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-4"> <br>
                    <label><font size=5 color="#4b3621">Nombre del Platillo</font></label>
                
                    <div class="row">
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="titulo-platillo" id="tit-plat" > <br>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-3">
                            <input type="submit" class="btn btn-outline-success" value="Buscar"></input>
                        </div>
                    </div>

                    <label><font size=5 color="#4b3621">Descripcion del Platillo</font></label>
                    <textarea class="form-control" name="desc-platillo" rows="3" id="desc-plat"></textarea>

                </div>
                <div class="col-sm-2"></div>

                <div class="col-sm-4"> <br>
                    <label><font size=5 color="#4b3621">Ingrediente Principal</font></label> <br>
                    <select name="ing-prin" class="form-control" id="ing-prin">
                        <option value="" selected>Seleccione un ingrediente Principal</option>
                        <?php   
                            include("conexion.php");

                            $sql_count_ing = mysqli_query($con, 'SELECT COUNT(*) FROM `ingredientes`'); 

                            if(mysqli_num_rows($sql_count_ing) != 0) {
                                $row = mysqli_fetch_assoc($sql_count_ing);
                            } 

                            $n_ing = (int)$row['COUNT(*)'];
                            $i = 0;

                            while($i < $n_ing) {
                                
                                $sql_ing = mysqli_query($con, "SELECT * FROM `ingredientes` WHERE `id_ingredientes` = '$i'");

                                if(mysqli_num_rows($sql_ing) != 0) {
                                    $row = mysqli_fetch_assoc($sql_ing);
                                }
                        ?>
                            <option value="<?php echo $i; ?>"><?php
                                                    echo $row['ingrediente']    
                                                ?>
                            </option>
                        <?php    
                                $i++;
                            }
                        ?>

                    </select> <br> <br>

                    <label><font size=5 color="#4b3621">No esta su ingrediente?</font></label> <br>
                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal2">Agregar</button>
                </div>
            </div>

            <hr color="white">

            <font size=6 color="#4b3621">Pasos</font> <br><br>

            <div class="row">
                <div class="col-sm-5"> <br><br><br>
                    <table class="table table-hover ml-5">
                        <thead>
                            <tr class="table-dark">
                                <th scope="col">Paso</th>
                                <th scope="col">Utensilio</th>
                                <th scope="col">Ingredientes</th>
                                <th scope="col">Num_Ingredientes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php   
                                include("conexion.php");

                                $nom_receta = $_POST['titulo-platillo'];

                                $sql_count_receta = mysqli_query($con, "SELECT DISTINCT(id_receta) FROM `receta` WHERE nombre_receta = '$nom_receta'"); 

                                if(mysqli_num_rows($sql_count_receta) != 0) {
                                    $row = mysqli_fetch_assoc($sql_count_receta);
                                } 

                                $n_receta = (int)$row['id_receta'];

                                $sql_count_paso_receta = mysqli_query($con, "SELECT COUNT(*) FROM `receta` WHERE id_receta = $n_receta"); 

                                if(mysqli_num_rows($sql_count_paso_receta) != 0) {
                                    $row = mysqli_fetch_assoc($sql_count_paso_receta);
                                }

                                $n_paso_receta = (int)$row['COUNT(*)'];
                                
                                $sql_contador_receta = mysqli_query($con, "SELECT MIN(`contador`) FROM `receta` WHERE id_receta = $n_receta"); 

                                if(mysqli_num_rows($sql_contador_receta) != 0) {
                                    $row = mysqli_fetch_assoc($sql_contador_receta);
                                } 
                                
                                $s = (int)$row['MIN(`contador`)'];
                                $o = 1;

                                while($o <= $n_paso_receta) {                                    
                                    $sql_receta_paso = mysqli_query($con, "SELECT * FROM `receta` WHERE contador = '$s'");

                                    if(mysqli_num_rows($sql_receta_paso) != 0) {
                                        $row = mysqli_fetch_assoc($sql_receta_paso);
                                    } 

                                    $id_paso = (int)$row['id_paso'];
                                    $id_utensilio = (int)$row['id_utensilio'];
                                    $id_ingredientes = (int)$row['id_ingredientes'];
                                    $cantidad_ingredientes = (int)$row['cantidad_ingredientes'];

                                    include("ver-pasos.php");
                            ?> 
                                <tr class="table-secondary">
                                    <th scope="row"><?php echo $name_paso; ?></th>
                                    <td><?php echo $name_uten; ?></td>
                                    <td><?php echo $name_ing; ?></td>
                                    <td><?php echo $cantidad_ingredientes; ?></td>
                                </tr>
                            <?php    
                                    $s++;
                                    $o++;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-5">
                    <font size=5 color="#4b3621" class="mr-5">Agregar</font> <br><br>
                    <div class="row">
                        <div class="col-sm-5">
                            <font size=5 color="#4b3621">¿Qué vas a hacer?</font> <br>
                            <select class="form-control" name="add-paso" id="paso-plat">
                                <option value="null" selected>Seleccione lo que va hacer</option>
                                <?php   
                                    include("conexion.php");

                                    $sql_count_paso = mysqli_query($con, 'SELECT COUNT(*) FROM `paso`'); 

                                    if(mysqli_num_rows($sql_count_paso) != 0) {
                                        $row = mysqli_fetch_assoc($sql_count_paso);
                                    }

                                    $n_paso = (int)$row['COUNT(*)'];
                                    $s = 0;

                                    while($s < $n_paso) {                                    
                                        $sql_paso = mysqli_query($con, "SELECT * FROM `paso` WHERE `id_paso` = '$s'");

                                        if(mysqli_num_rows($sql_paso) != 0) {
                                            $row = mysqli_fetch_assoc($sql_paso);
                                        }
                                ?>
                                    <option value="<?php echo $s; ?>"><?php
                                                            echo $row['descripcion']    
                                                        ?>
                                    </option>
                                <?php    
                                        $s++;
                                    }
                                ?>

                            </select>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-5">
                            <label><font size=5 color="#4b3621">¿No esta su paso?</font></label> <br>
                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal3">Agregar</button>          
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-5">
                            <font size=5 color="#4b3621">¿Qué utensilios vas a utilizar?</font>
                            <select name="add-uten" id="uten-plat" class="form-control">
                                <option value="null" selected>Seleccione lo que va utilizar</option>
                                <?php   
                                    include("conexion.php");

                                    $sql_count_ob = mysqli_query($con, 'SELECT COUNT(*) FROM `utensilio`'); 

                                    if(mysqli_num_rows($sql_count_ob) != 0) {
                                        $row = mysqli_fetch_assoc($sql_count_ob);
                                    } 

                                    $n_ob = (int)$row['COUNT(*)'];
                                    $n = 0;

                                    while($n < $n_ob) {
                                            
                                        $sql_ob = mysqli_query($con, "SELECT * FROM `utensilio` WHERE `id_utensilio` = '$n'");

                                        if(mysqli_num_rows($sql_ob) != 0) {
                                            $row = mysqli_fetch_assoc($sql_ob);
                                        }
                                ?>
                                    <option value="<?php echo $n; ?>"><?php
                                                        echo $row['nombre']    
                                                    ?>
                                    </option>
                                <?php    
                                        $n++;
                                    }
                                ?>

                            </select> <br>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-5">
                            <br><label><font size=5 color="#4b3621">¿No esta su utensilio?</font></label> <br>
                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal4">Agregar</button>      
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-5">
                            <font size=5 color="#4b3621">¿Qué ingredientes vas a usar?</font>
                            <select id="ing-plat" name="add-ing" class="form-control">
                                <option value="null" selected>Seleccione los ingredientes que va utilizar</option>
                                <?php   
                                    include("conexion.php");

                                    $sql_count_in = mysqli_query($con, 'SELECT COUNT(*) FROM `ingredientes`'); 

                                    if(mysqli_num_rows($sql_count_in) != 0) {
                                        $row = mysqli_fetch_assoc($sql_count_in);
                                    } 

                                    $n_in = (int)$row['COUNT(*)'];
                                    $m = 0;

                                    while($m < $n_in) {
                                                    
                                    $sql_in = mysqli_query($con, "SELECT * FROM `ingredientes` WHERE `id_ingredientes` = '$m'");

                                    if(mysqli_num_rows($sql_in) != 0) {
                                        $row = mysqli_fetch_assoc($sql_in);
                                    } 
                                ?>
                                    <option value="<?php echo $m; ?>"><?php
                                                            echo $row['ingrediente']    
                                                        ?>
                                    </option>
                                <?php    
                                        $m++;
                                    }
                                ?>

                            </select> <br>                                        
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-5">
                            <div class="row">
                                <div class="col-sm-5">
                                    <label><font size=5 color="#4b3621">No esta su ingrediente?</font></label> <br>
                                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal2">Agregar</button>
                                </div>
                                <div class="col-sm-2"></div>
                                <div class="col-sm-5">
                                    <font size=3 color="#4b3621">¿Cuántas veces lo utilizará?</font> <br>
                                    <input type="number" class="form-control" name="add-ing-n" id="ing-n-plat">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--<div class="suggest">
                <label for="foto"><font size=5 color="#4b3621">Imagen del Platillo</font></label> <br>
                <input type="file" class="form-control-file" id="foto" aria-describedby="fileHelp" name="foto" style="display:none;">
                <button type="button" class="btn btn-outline-primary" onclick="document.getElementById('foto').click()">Subir Imagen</button>
                <small id="fileHelp" class="form-text text-muted">Inserta la imagen representativa de tu platillo</small>
            </div>-->

            <hr color="white">

            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal1" id="btn-verif">Verificar</button>
            <input type="button" class="btn btn-outline-success" value="Enviar" style="display:none;" id="btn-send" onclick="end()"> <br>
        </form>

        <form action="add-receta.php" method="POST">
            <input type="text" style="display:inline;" id="fin-nom" name="fin-nom">
            <input type="text" style="display:inline;" id="fin-desc" name="fin-desc">
            <input type="text" style="display:inline;" id="fin-ing-prin" name="fin-ing-prin">
            <input type="number" style="display:inline;" id="fin-paso" name="fin-paso">
            <input type="number" style="display:inline;" id="fin-uten" name="fin-uten">
            <input type="number" style="display:inline;" id="fin-ing" name="fin-ing">
            <input type="number" style="display:inline;" id="fin-ing-n" name="fin-ing-n">
            <input type="submit" style="display:inline;" id="btn-send-receta"> <br>                     
        </form>
    </center>

    <!-- Generar consulta -->

    <!-- Modal (check) -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deseas enviar esta receta?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <font size=5 color="#4b3621">Nombre de la receta: <?php echo $nom_receta; ?></font> <br>
                    <font size=5 color="#4b3621">Descripion de la receta: <?php $desc_receta = $_POST['desc-platillo']; echo $desc_receta; ?></font> <br>
                    <?php
                        $ing_pincipal = $_POST['ing-prin'];
                        
                        $sql_verif_ing_prin = mysqli_query($con, "SELECT `ingrediente` FROM `ingredientes` WHERE id_ingredientes = $ing_pincipal");

                        if(mysqli_num_rows($sql_verif_ing_prin) != 0) {
                            $row = mysqli_fetch_assoc($sql_verif_ing_prin);
                        } 

                        $name_ing_prin = $row['ingrediente'];
                    ?>
                    <font size=5 color="#4b3621">Ingrediente Prinipal: <?php echo $name_ing_prin; ?></font> <br>
                    <hr color="blue"> <br>
                    <font size=5 color="#4b3621">Agrega:</font> <br><br>

                    <table class="table table-hover ml-1">
                        <thead>
                            <tr class="table-dark">
                                <th scope="col">Paso</th>
                                <th scope="col">Utensilio</th>
                                <th scope="col">Ingredientes</th>
                                <th scope="col">Num_Ingredientes</th>
                            </tr>
                        </thead>

                        <?php
                            $paso_verif_modal = $_POST['add-paso'];
                            $uten_verif_modal = $_POST['add-uten'];
                            $ing_verif_modal = $_POST['add-ing'];
                            
                            $sql_verif_paso = mysqli_query($con, "SELECT `descripcion` FROM `paso` WHERE id_paso = $paso_verif_modal");

                            if(mysqli_num_rows($sql_verif_paso) != 0) {
                                $row = mysqli_fetch_assoc($sql_verif_paso);
                            }
                        
                            $name_paso = $row['descripcion'];
                        
                            $sql_verif_uten = mysqli_query($con, "SELECT `nombre` FROM `utensilio` WHERE id_utensilio  = $uten_verif_modal");
                        
                            if(mysqli_num_rows($sql_verif_uten) != 0) {
                                $row = mysqli_fetch_assoc($sql_verif_uten);
                            }
                        
                            $name_uten = $row['nombre'];
                        
                            $sql_verif_ing = mysqli_query($con, "SELECT `ingrediente` FROM `ingredientes` WHERE id_ingredientes = $ing_verif_modal");
                        
                            if(mysqli_num_rows($sql_verif_ing) != 0) {
                                $row = mysqli_fetch_assoc($sql_verif_ing);
                            } 
                        
                            $name_ing = $row['ingrediente'];
                        ?>

                        <tbody>
                            <tr class="table-secondary">
                                <th scope="row"><?php echo $name_paso; ?></th>
                                <td><?php echo $name_uten; ?></td>
                                <td><?php echo $name_ing; ?></td>
                                <td><?php echo $_POST['add-ing-n']; ?></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-info" data-dismiss="modal">Editar</button>
                    <button type="button" class="btn btn-outline-success" data-dismiss="modal" onclick="ret()">Enviar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal (add-ing) -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <label><font size=5 color="#4b3621">Agregar ingrediente</font></label>    
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="add-ing.php" method="POST">
                        <center>
                            <label><font size=5 color="#4b3621">Ingrediente</font></label> <br>
                            <input type="text" name="ing-add" class="form-control" placeholder="example: Salchicha / Peperoni"> <br>
                            <label><font size=5 color="#4b3621">Calorias</font></label> <br>
                            <input type="number" name="cal-add" class="form-control" placeholder="example: 50 / 30"> <br>
                            <input type="submit" class="btn btn-outline-success" value="Enviar"></input>
                        </center>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Listo</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal (add-paso) -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <label><font size=5 color="#4b3621">Agregar paso</font></label>    
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="add-paso.php" method="POST">
                        <center>
                            <label><font size=5 color="#4b3621">Paso</font></label> <br>
                            <input type="text" name="paso-add" class="form-control" placeholder="example: Hornear / Batir"> <br>
                            <label><font size=5 color="#4b3621">Tiempo</font></label> <br>
                            <input type="text" name="time-add" class="form-control" placeholder="example: 50 minutos / 90 minutos"> <br>
                            <input type="submit" class="btn btn-outline-success" value="Enviar"></input>
                        </center>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Listo</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal (add-ob) -->
    <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <label><font size=5 color="#4b3621">Agregar utensilio</font></label>    
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="add-ob.php" method="POST">
                        <center>
                            <label><font size=5 color="#4b3621">Utensilio</font></label> <br>
                            <input type="text" name="ob-add" class="form-control" placeholder="example: Horno / Cuchara"> <br>
                            <label><font size=5 color="#4b3621">Ubicacion</font></label> <br>
                            <input type="text" name="ub-add" class="form-control" placeholder="example: Anaquel 2 / Cajon 1"> <br>
                            <input type="submit" class="btn btn-outline-success" value="Enviar"></input>
                        </center>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Listo</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>