<?php       
require_once("car.php");
require_once("Uberx.php");
require_once("account.php");
require_once("UberPool.php");

$uberX= new UberX("CHSGTS", new Account("Andres herrera", "ANDGYU879", "NISSAN", "AVEO"));
$uberX->printDataCar();

//$UberPool = new UberPool("tdjcjbd", new Account("hermenegilda galeana", "AJDSGVB987", "CHEVROLET", "CUICUI"));
//$uberPool->printDataCar();
?>