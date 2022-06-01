<?php 

	require_once 'Modelo/claseProduccion.php';

	$objProduccion = new Produccion();

//session_start();

$id = $_SESSION['id'];

$objProduccion->setid($id); 

$resultadoProduccion = $objProduccion->imprimirProduccion();
 
 ?>