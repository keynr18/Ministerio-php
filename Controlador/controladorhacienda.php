<?php 

require_once 'Modelo/clasehacienda.php';

$objhacienda = new Hacienda();

if ($_POST) {

	$nombrehacienda = $_POST['nombreh'];
	$direccionhacienda = $_POST['direccionh']; 
	$telefonohacienda =$_POST['telefonoh'];
	//$latitudhacienda =$_POST['latitud'];
	//$longitudhacienda = $_POST['longitud'];
	$parroquiahacienda = $_POST['parroquia']; 
	//$productorhacienda=$_POST['productor'];
	$hectariahacienda = $_POST['hectariah'];


 
session_start();
$id = $_SESSION['id'];

$objhacienda->setnombreh($nombrehacienda);
$objhacienda->setdireccion($direccionhacienda);
$objhacienda->settelefono($telefonohacienda);
$objhacienda->setparroquia($parroquiahacienda);
$objhacienda->sethectaria($hectariahacienda);
$objhacienda->setid($id);

}

$objhacienda->RegistrarHacienda();

header('location:?url=vista-haciendas-productor');

 ?>