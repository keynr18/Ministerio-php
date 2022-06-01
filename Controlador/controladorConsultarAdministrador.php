<?php 

	require_once 'Modelo/claseadministrador.php';

	$objAdministrador = new Administrador();

	$resultado = $objAdministrador->consultarAdministrador();

	session_start();
	
	require_once ("Vista/vista-consultar-administrador.php");

 ?>