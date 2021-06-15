<?php ob_start() ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Registro</title>
    <link rel="shortcut icon" type="image/jpg" href="../../images/favicon.png"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/estilosregis.css"/>
    <script type="text/javascript" src="../js/validareg.js"></script> 
  </head>

    <body>

    <?php
        include_once('../../controllers/usuarios_controller.php');
    ?>

    <div class="regis">
        <h1 class="text-center text-white pt-5">Registro</h1>
            <div class="container">


            <div id="fila" class="row justify-content-center align-items-center">
                <div id="columna" class="col-md-6">
                    <div id="caja" class="col-md-12">
                        <form id="form" class="form" action="" method="post">
                        <h2 class="text-center text-info">Ingrese sus datos</h2>
                            <div class="form-group">
                                <label for="name" class="text-info">Nombre:</label><br>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="surname" class="text-info">Apellidos:</label><br>
                                <input type="text" name="surname" id="surname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-info">Email:</label><br>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">Usuario:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Contraseña:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="rpassword" class="text-info">Repita contraseña:</label><br>
                                <input type="password" name="rpassword" id="rpassword" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" id="registrar" name="registrar" class="btn btn-danger btn-md" value="Enviar">
                                <input type="submit" id="back" name="volver" class="btn btn-info btn-md" value="Volver">
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <?php

                if (isset($_POST['registrar'])) {
                    $controller = new usuarios_controller();
                    $usuario = new Usuario($_POST['name'], $_POST['surname'],
                    $_POST['email'], $_POST['username'], $_POST['password']);
                    $controller->registrar_usuario($usuario);

                    header("Location: exito_u.php");
                    
                }

                if (isset($_POST['volver'])) {

                    header("Location: ../../index.php");

                }

            ?>


            </div>
        </div>
        <?php ob_end_flush();?>
    </body>
</html>