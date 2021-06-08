<?php ob_start() ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Tarea Creada</title>
    <link rel="shortcut icon" type="image/jpg" href="../../images/favicon.png"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/estilosexito.css"/>
    <script type="text/javascript" src="../js/funciones.js"></script> 
  </head>

    <body>


    <div class="exito">
        <h1 class="text-center text-white pt-5">Tarea Creada</h1>
        <div class="container">
            <div id="fila" class="row justify-content-center align-items-center">
                <div id="columna" class="col-md-6">
                    <div id="caja" class="col-md-12">
                        <form id="form" class="form" action="" method="post">
                        <br/> <br/>
                            <h2 class="text-center text-info">La tarea ha sido</h2>
                            <h2 class="text-center text-info">creada</h2>

                            <div class="form-group">
                                <br/> <br/> 
                                <input type="submit" style="margin-left:31.5%;" name="principal" class="btn btn-info btn-md" center-block value="Inicio">
                                <input type="submit" style="margin-left:1%;" name="new_t" class="btn btn-danger btn-md" center-block value="Nueva Tarea">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php

                if (isset($_POST['principal'])) {

                    header("Location: principal.php");

                }

                if (isset($_POST['new_t'])) {

                    header("Location: newtask.php");

                }

            ?>
    <?php ob_end_flush();?>
    </body>
</html>