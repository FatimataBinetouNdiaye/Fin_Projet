<?php 
    include("indexac.php");
class CHAMBRES{
    protected $idc;
    protected $num_c;
    protected $capacite;
    protected $ide;
public function __construct($idc, $num_c,$capacite, $ide){
    $this->idc=$idc;
    $this->num_c=$num_c;
    $this->capacite=$capacite;
    $this->ide=$ide;
}

}


?>