<?php
require_once 'Modelo/clasehacienda.php';

$objhacienda = new Hacienda();


$idconsulta2 =$_GET["idhac"];

$cedula = $_GET['ci'];

$objhacienda->setId_Consulta($idconsulta2);
	# code...
	$resulRegistrar=$objhacienda->Eliminar();

//require_once "Controlador/controlador-buscar-productorr.php";
header('location:?url=controlador-buscar-productorr&ci='.$cedula);

?>