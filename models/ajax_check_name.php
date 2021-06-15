<?php ob_start() ?>
<?php
    include_once("db.php");
    //require_once("conexion.php");
    $db = new db();
    $conectar = $db->conectar();
   
    $username = $_POST['username'];
    $vjson = array();

    $params = array(
        ":username" => $username
    );

    //consultar existentes:
    $sql = "SELECT * FROM users WHERE username = :username";
    $pdo = $conectar->prepare($sql);
    $pdo->execute($params);

    $row = $pdo->fetch(PDO::FETCH_ASSOC);
    
    if ($row){ //Ya existe

        $vjson['error'] = 'ERROR: Ya existe un usuario con ese nombre';
    
    }else{ //insertar nuevo

        $vjson['success'] = 'Nombre de usurario libre';

    }
    
    echo json_encode($vjson);
  
?>
<?php ob_end_flush();?>