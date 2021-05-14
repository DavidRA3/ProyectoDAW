<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'dromero');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
// include_once("config.php");
class db {

    private $host;
    private $dbname;
    private $user;
    private $password;
    
    private $db_handler;

    public function __construct(){}
       
    public static function conectar() {

            $host = DB_HOST;
            $dbname = DB_NAME;
            $user = DB_USER;
            $password = DB_PASSWORD;

            $db_handler= null;
            
            try{
                $dns="mysql:host=$host;dbname=$dbname";
                $db_handler = new PDO($dns,$user,$password);
                $db_handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $db_handler->exec('set names utf8');
                //echo "Conexión realizada con exito";
                
            }catch(PDOException $e){

                die ("Error en la conexión " . $e->getMessage());
                echo "Número de línea del error: " . $e->getLine();
                
            }

            return $db_handler;
         }
          
}

db::conectar();
?>