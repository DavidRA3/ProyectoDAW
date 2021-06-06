<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Inicio</title>
    <link rel="shortcut icon" type="image/jpg" href="../../images/favicon.png"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/estilosprincipal.css"/>
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
                    /* echo "Id de usuario: " . $_SESSION['id_usr'];
                    echo "<br/>";
                    echo "<br/><h3>Lista de tareas de: " . $_SESSION['username'] . "</h3>"; */

                    $id_usr = $_SESSION['id_usr'];
                    $controller = new tareas_controller();
                    $lista = $controller->mostrar_tareas($id_usr);
    
                    echo "<br/>";
                    echo "<p>Hola " . $_SESSION['username'] . "! Tienes " . count($lista) . " tareas:</p>";
                    echo "<br/>";
                    echo "<table>";

                ?>

                <!-- <?php

                    $controller = new tareas_controller();


                    if (isset($_GET['option'])) {
                        $metodo = $_GET['option'];
                        if (isset($_GET['id'])) { $id_task = $_GET['id'];
                        echo $id_task;
                        }
                    echo $option;

                        switch($option) {

                            case 'borrar':
                                echo "LLamar al controlador para gestionar la petición de borrar";
                                $controller->borrar($id_task);
                                break;
                            case 'editar';
                                echo "LLamar al controlador para gestionar la petición de modificar";
                                $controller->editar($id_task);
                                break;
                            
                        }
                    }

                ?> -->

                <tr>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Categoría</th>
                    <th>Estado</th>
                    <th>Urgencia</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>

                    <?php
            
                    for($i=0; $i<count($lista); $i++) {
                        $id_task = $lista[$i]->getId_task();
                        echo "<tr>";
                        echo "<td>" . $lista[$i]->getTitle() . "</td>";
                        echo "<td>" . $lista[$i]->getDescr() . "</td>";
                        echo "<td>" . $lista[$i]->getCat() . "</td>";
                        echo "<td>" . $lista[$i]->getStatus() . "</td>";
                        echo "<td>" . $lista[$i]->getUrg() . "</td>";
                        echo "<td><a href='edit.php?id=$id_task'><img class='icon' src='../../images/edit.png' alt='Edit'></a></td>";
                        echo "<td><a href='delete.php?id=$id_task'><img class='icon' src='../../images/delete.png' alt='Delete'></a></td>";
                        echo "</tr>";

                    }
                    ?>
                </table>

            </div>
        </div>

        <div class="row mb-3 ">
            <div class="col-12 footer"><p>David Romero Alonso © DAW 2020/2021</p></div>
        </div>
     </div>

    </body>
</html>

