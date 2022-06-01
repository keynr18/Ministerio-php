<?php 

	require_once 'Modelo/claseadministrador.php';


	$objAdministrador = new Administrador();


	if ($_POST) {
	
		$cedula_productor = $_POST["buscar"];
	
	}

	else if ($_GET) {
		$cedula_productor = $_GET["ci"];
	}

	$objAdministrador->setBuscarcedula($cedula_productor);
	$busqueda = $objAdministrador->buscarProductor();
	$busqueda2 = $objAdministrador->buscarHaciendas();

	$busqueda3 = $objAdministrador->buscarProduccion();


	session_start();

	require_once ("Vista/vista-busqueda-productor.php");

	 //header('location:?url=vista-busqueda-productor');
 ?>