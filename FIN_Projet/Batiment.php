<?php
include("indexac.php");
include("Connection.php");

class Batiment {
    protected $ide;
    protected $nombat;

    public function __construct($ide,$nombat){
        $this->ide=$ide;
        $this->nombat=$nombat;
    }
    public function getIde(){
        return $this->ide;
    }
    public function getNom(){
        return $this->nombat;
    }
    public function setIde($ide){
        $this->ide=$ide;
    }
    public function setNombat($nombat){
        $this->nombat=$nombat;
    }
}
?>