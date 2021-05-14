<?php ob_start() ?>
<?php
include_once("db.php");

if (!strstr($_SERVER['PHP_SELF'],'index')) {
    include_once('../../libs/usuario.php');
} else {
    include_once('./libs/usuario.php');
}

class usuarios_model {

    private $db_handler;

    public function __construct() { 
        $this->db_handler = db::conectar(); }

    public function get() {

        $pdo = $this->db_handler->prepare(
            "SELECT * FROM users");
        
        $pdo->execute();
        $lista=array();
        while ($row=$pdo->fetch(PDO::FETCH_ASSOC)) {
            $usuario = new Usuario($row['name'], $row['surname'], $row['email'], $row['username'], $row['password']);
            $lista[] = $usuario;

        }
        return $lista;

    }

    public function insert($usuario) {

        $parametros = array(':name'=>$usuario->getName(),
        ':surname'=>$usuario->getSurname(),
        ':email' =>$usuario->getEmail(),    
        ':username'=>$usuario->getUsername(),
        ':password'=>$usuario->getPassword(),
        ":date" => date('Y-m-d H:i:s'));

        $pdo = $this->db_handler->prepare(
            "INSERT INTO users (name,surname,email,username,password,date) VALUES (
            :name,:surname,:email,:username,:password,:date)");
        $pdo->execute($parametros);
    }

    public function get_password($username) {
        $parametros = array(':username'=>$username);
        $pdo = $this->db_handler->prepare(
            "SELECT password FROM users WHERE username = :username");
        
        $pdo->execute($parametros);
        $password = null;
        if ($pdo->rowcount()==1) {
            $row = $pdo->fetch(PDO::FETCH_ASSOC);
            $password = $row['password'];
        }
        
        return $password;

    }

    public function get_id($username) {
        $parametros = array(':username'=>$username);
        $pdo = $this->db_handler->prepare(
            "SELECT id_usr FROM users WHERE username = :username");
        
        $pdo->execute($parametros);
        $id = null;
        if ($pdo->rowcount()==1) {
            $row = $pdo->fetch(PDO::FETCH_ASSOC);
            $id = $row['id_usr'];
        }
        
        return $id;

    }

}
?>
<?php ob_end_flush();?>