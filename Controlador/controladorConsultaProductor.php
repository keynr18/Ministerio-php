<?php 

require_once 'Modelo/claseproductor.php';

$objproductor = new Productor();

$resultado = $objproductor->consultarProductor();


session_start();

require_once ("Vista/vista-consulta-productor.php");

 ?>