<?php


require_once 'Modelo/claseadministrador.php';


$objadmi = new Administrador();

if ($_GET) {
	# code...


$id =$_GET["idprod"];

$cedula = $_GET['ci'];



//$objadmi->setId_Consulta($idconsulta2);
	# code...
$objadmi->eliminarproduccion($id);
}

header('location:?url=controlador-buscar-productorr&ci='.$cedula);

  ?>