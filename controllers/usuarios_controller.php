<?php ob_start() ?>
<?php

    if (!strstr($_SERVER['PHP_SELF'],'index')) {
        include_once("../../models/usuarios_model.php");  
    }
    else {
        include_once("./models/usuarios_model.php");
    }

    class usuarios_controller {
        
        private $u_modelo;

        public function __construct() {}

        public function inicio() {
        header('Location: views/pages/principal.php');
        }

        public function obtener_contraseña($username) {
            $this->u_modelo = new usuarios_model();
            return ($this->u_modelo->get_password($username));

        }

        public function obtener_id($username) {
            $this->u_modelo = new usuarios_model();
            return ($this->u_modelo->get_id($username));

        }

        public function registrar_usuario($usuario) {
        $this->u_modelo = new usuarios_model();
        $exito = $this->u_modelo->insert($usuario);
        return $exito;

    }
            
    }

?>
<?php ob_end_flush();?>