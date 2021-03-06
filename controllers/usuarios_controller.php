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

        public function obtener($id_usr) {
            $this->u_modelo = new usuarios_model();
            $user = $this->obtener_usuario($id_usr);
            return $user;
        }

        public function obtener_usuario($id_usr) {
            $this->u_modelo = new usuarios_model();
            $user = $this->u_modelo->get_by_id($id_usr);
            return $user;
            
        }

        public function obtener_contraseña($username) {
            $this->u_modelo = new usuarios_model();
            return ($this->u_modelo->get_password($username));

        }

        public function obtener_id($username) {
            $this->u_modelo = new usuarios_model();
            return ($this->u_modelo->get_id($username));

        }

        public function obtener_nombre($id_usr) {
            $this->u_modelo = new usuarios_model();
            return ($this->u_modelo->get_name($id_usr));

        }

        public function registrar_usuario($usuario) {
        $this->u_modelo = new usuarios_model();
        $exito = $this->u_modelo->insert($usuario);
        return $exito;

    }

    public function modificar_usuario($usuario) {
        $this->u_modelo = new usuarios_model();
        $exito = $this->u_modelo->update($usuario);
        return $exito;
    }
            
    }

?>
<?php ob_end_flush();?>