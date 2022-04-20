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
    
    public function setPassenger($passenger){
        if ($passenger==6) {
            $this->$passenger=$passenger;
        }
        else {
            echo"Necesitas asignar 6 pasajeros";
        }
    }
}
?>