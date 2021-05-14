<?php ob_start() ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Bienvenido</title>
    <link rel="shortcut icon" type="image/jpg" href="images/favicon.png"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="views/css/estilosindex.css"/>
    <script type="text/javascript" src="views/js/funciones.js"></script> 
  </head>

    <body>

    <?php

        include_once('./controllers/usuarios_controller.php');
    ?>

    <div class="login">
        <h1 class="text-center text-white pt-5">Bienvenido</h1>
        <div class="container">
            <div id="fila" class="row justify-content-center align-items-center">
                <div id="columna" class="col-md-6">
                    <div id="caja" class="col-md-12">
                        <form id="form" class="form" action="" method="post">
                            <h2 class="text-center text-info">Acceso</h2>
                            <div class="form-group">
                                <label for="username" class="text-info">Usuario:</label><br>
                                <input type="text" name="username" id="username" placeholder="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Contraseña:</label><br>
                                <input type="password" name="password" id="password" placeholder="" class="form-control">
                            </div>
                            <div class="form-group">
                                <br/>
                                <input type="submit" name="submit" id="submit" class="btn btn-danger btn-md" value="Entrar">
                            </div>
                            <div id="link" class="text-right">
                                <a href="views/users/register.php" class="text-danger">Regístrate aquí</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





        <?php



        $controller = new usuarios_controller();
        if (isset($_POST['submit'])) {

            $passHash = $controller->obtener_contraseña($_POST['username']); //No distingue mayúsculas y minúsculas
            $pass = $_POST['password'];

            if ($pass === $passHash) { //password_verify no funciona ???
                
                echo "<h3 class='text-center text-white'>AUTORIZADO PARA ENTRAR AL SITIO WEB DE LA APLICACIÓN</h3>";
                
                session_start();

                $id = $controller->obtener_id($_POST['username']);;

                $_SESSION['id_usr'] = $id;
                $_SESSION['username'] = $_POST['username'];
                
            
                $controller = new usuarios_controller();
                $controller->inicio(); 

            }

            else {

                echo "<br/>";
                echo "<h3 class='text-center text-danger'>ACCESO NO AUTORIZADO. CREDENCIALES NO VÁLIDAS</h3>";

            }
        }

        ?>
    <?php ob_end_flush();?>
    </body>
</html>