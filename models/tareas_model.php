<?php ob_start() ?>
<?php
include_once("db.php");

if (!strstr($_SERVER['PHP_SELF'],'index')) {
    include_once('../../libs/tarea.php');
} else {
    include_once('./libs/tarea.php');
}

class tareas_model {

    private $db_handler;

    public function __construct() { 
        $this->db_handler = db::conectar(); }


        public function get($id_usr) {
            $parametros = array(':id_usr'=>$id_usr);
            $pdo = $this->db_handler->prepare(
                "SELECT * FROM tasks WHERE id_usr = :id_usr");
            
            $pdo->execute($parametros);
            $lista=array();
            while ($row=$pdo->fetch(PDO::FETCH_ASSOC)) {
                $task = new Tarea($row['id_task'],$row['title'],$row['descr'],$row['cat'],$row['status'],$row['urg'],);
                $lista[]=$task;
            }
            return $lista;
        }


    public function insert($tarea) {

        $parametros = array(':title'=>$tarea->getTitle(),
        ':descr'=>$tarea->getDescr(),
        ':cat' =>$tarea->getCat(),    
        ':status'=>$tarea->getStatus(),
        ':urg'=>$tarea->getUrg(),
        ':id_usr'=> $_SESSION['id_usr'],
        ":date" => date('Y-m-d H:i:s'));

        $pdo = $this->db_handler->prepare(
            "INSERT INTO tasks (title,descr,cat,status,urg,id_usr,date) VALUES (
            :title,:descr,:cat,:status,:urg,:id_usr,:date)");
        $pdo->execute($parametros);
    }

}
?>
<?php ob_end_flush();?>