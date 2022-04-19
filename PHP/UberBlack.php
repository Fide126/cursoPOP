<?php
require_once('car.php');
class UberBlack extends Car{
    public $typeCarAccepted;
    public $seatMaterial;

    public function __constructor($license, $driver , $typeCarAccepted, $seatMaterial){
        parent::__constructor($license, $driver);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->seatMaterial = $seatMaterial;
    }
    
}
?>