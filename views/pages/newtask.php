<?php ob_start() ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Inicio</title>
    <link rel="shortcut icon" type="image/jpg" href="images/favicon.png"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/estilosformtask.css"/>
    <script type="text/javascript" src="../js/funciones.js"></script> 
  </head>

    <body>

    <?php
    include_once('../../controllers/tareas_controller.php');
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 banner"><img src="../../images/logo.png" alt="Logo"></div>
        </div>

        <div class="row">
            <div class="col-12 navbar">

                <nav>
        
                    <a href="principal.php">Inicio</a>
                    <a href="newtask.php">Nueva Tarea</a>
                    
                </nav>
                <a href="../users/logout.php"><img class="logout" src="../../images/logout.png" alt="Logout"></a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 content">
                <?php
                    session_start();
                ?>

                <div class="newtask">
                    <div class="container">
                        <div id="fila" class="row justify-content-center align-items-center">
                            <div id="columna" class="col-md-6">
                                <div id="caja" class="col-md-12">
                                    <form id="form" class="form" action="" method="post">
                                        <br/>
                                        <h2 class="text-center text-info">Nueva Tarea</h2>
                                        <div class="form-group">
                                            <label for="title" class="text-info">Título:</label><br>
                                            <input type="text" name="title" id="title" placeholder="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="descr" class="text-info">Descripción:</label><br>
                                            <textarea type="textarea" name="descr" id="descr" placeholder="" style="height: 12em; resize: none;" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="cat" class="text-info">Categoría:</label><br>
                                            <select name="cat" id="cat" class="form-control">
                                            <option></option>
                                                <option value="Diaria">Diaria</option>
                                                <option value="Familia">Familia</option>
                                                <option value="Social">Social</option>
                                                <option value="Compras">Compras</option>
                                                <option value="Trabajo">Trabajo</option>
                                                <option value="Salud">Salud</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="status" class="text-info">Estado:</label><br>
                                            <select name="status" id="status" class="form-control">
                                                <option value="En espera">En espera</option>
                                                <option value="Planificada">Planificada</option>
                                                <option value="En curso">En curso</option>
                                                <option value="Terminada">Terminada</option>
                                                <option value="Cerrada">Cerrada</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="urg" class="text-info">Urgencia:</label><br>
                                            <select name="urg" id="urg" class="form-control">
                                                <option></option>
                                                <option value="low">Baja</option>
                                                <option value="mid">Media</option>
                                                <option value="high">Alta</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <br/>
                                            <input type="submit" name="newtask" class="btn btn-danger btn-md" value="Crear Tarea">
                                            <input type="submit" id="back" name="volver" class="btn btn-info btn-md" value="Volver">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <?php

                if (isset($_POST['newtask'])) {
                    $controller = new tareas_controller();
                    $tarea = new Tarea($_POST['title'], $_POST['descr'],
                    $_POST['cat'], $_POST['status'], $_POST['urg']);
                    $controller->crear_tarea($tarea);

                    header("Location: exito_t.php");
                    
                }

                if (isset($_POST['volver'])) {

                    header("Location: principal.php");

                }

        ?>

        <div class="row mb-3 ">
            <div class="col-12 footer"><p>David Romero Alonso © DAW 2020/2021</p></div>
        </div>
     </div>
     <?php ob_end_flush();?>
    </body>
</html>