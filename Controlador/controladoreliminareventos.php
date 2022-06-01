<?php  

require_once 'Modelo/claseeventos.php';


$objEventos = new Eventos();

$idconsulta2 =$_GET["ide"];

$objEventos->setId_Consulta($idconsulta2);
	
$objEventos->eliminar();


header('location:?url=vista-administrador');
?>