<?php ob_start() ?>
<?php

    if (!strstr($_SERVER['PHP_SELF'],'index')) {
        include_once("../../models/tareas_model.php");  
    }
    else {
        include_once("./models/tareas_model.php");
    }

    class tareas_controller {
        
        private $t_modelo;

        public function __construct() {}

        public function mostrar_tareas($id_usr) {
            $this->t_modelo = new tareas_model();
            $lista = $this->t_modelo->get($id_usr);
            return $lista;
        
        }

        public function crear_tarea($tarea) {
        $this->t_modelo = new tareas_model();
        $exito = $this->t_modelo->insert($tarea);
        return $exito;

    }

    public function obtener($id_task) {
        $this->t_modelo = new tareas_model();
        $task = $this->obtener_tarea($id_task);
        return $task;
    }

    public function editar_tarea($tarea) {
        $this->t_modelo = new tareas_model();
        $exito = $this->t_modelo->update($tarea);
        return $exito;
    }

    public function borrar_tarea($id_task) {
        $this->t_modelo = new tareas_model();
        $exito = $this->t_modelo->delete($id_task);
        return $exito;
    }

    public function obtener_tarea($id_task) {
        $this->t_modelo = new tareas_model();
        $task = $this->t_modelo->get_by_id($id_task);
        return $task;
        
    }
            
    }

?>
<?php ob_end_flush();?>