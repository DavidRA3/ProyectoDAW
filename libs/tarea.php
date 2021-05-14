<?php
class Tarea {

    protected $id_task;
    protected $title;
    protected $descr;
    protected $cat;
    protected $status;
    protected $urg;
        
    function __construct($id_task,$title,$descr,$cat,$status,$urg) {
        $this->id_task=$id_task;
        $this->title=$title;
        $this->descr=$descr;
        $this->cat=$cat;
        $this->status=$status;
        $this->urg=$urg;      
    }

    public function getId_task() {return $this->id_task;}
    public function setId_task($id_task) { $this->id_task = $id_task; return $this; }
    public function getTitle() { return $this->title; }
    public function setTitle($title) { $this->title = $title; return $this; }
    public function getDescr() { return $this->descr; }
    public function setDescr($descr){ $this->descr = $descr;return $this; }
    public function getCat(){ return $this->cat; }
    public function setCat($cat){ $this->cat = $cat;return $this; }
    public function getStatus(){ return $this->status; }
    public function setStatus($status){ $this->status = $status;return $this; }
    public function getUrg(){ return $this->urg; }
    public function setUrg($urg){ $this->urg = $urg;return $this; }

   }

?>