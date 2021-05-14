<?php
class Tarea {

    protected $title;
    protected $descr;
    protected $cat;
    protected $status;
    protected $urg;
        
    function __construct($title,$descr,$cat,$status,$urg) {
        $this->title=$title;
        $this->descr=$descr;
        $this->cat=$cat;
        $this->status=$status;
        $this->urg=$urg;      
    }
   
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