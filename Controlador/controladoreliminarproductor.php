<?php


require_once 'Modelo/claseadministrador.php';


$objadmi = new Administrador();

if ($_GET) {
	# code...


$id =$_GET["idpro"];



//$objadmi->setId_Consulta($idconsulta2);
	# code...
$objadmi->eliminarpro($id);
}

header('location:?url=controladorConsultaProductor');

  ?>