<?php

require_once 'Modelo/claseeventos.php';


$objEventos= new Eventos();

if ($_GET) {

$idconsulta2 = $_GET["ide"];



$objEventos->setId_Consulta($idconsulta2);
	
$respuesta = $objEventos->mostrarEventos2();

}


?>