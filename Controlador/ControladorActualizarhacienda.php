<?php

require_once 'Modelo/clasehacienda.php';

$objhacienda = new Hacienda();

	//$btn = $_POST['btn'];
	 //	echo  $btn;

// recibimos los datos por via POST
if ($_POST) {

 $idconsulta2 = $_POST['idhac'];
//if ($btn == "Modificar") {

	$nombrehacienda = $_POST['nombreh'];
	$direccionhacienda = $_POST['direccionh'];
	$telefonohacienda =$_POST['telefonoh'];
	//$latitudhacienda =$_POST['latitud'];
	//$longitudhacienda = $_POST['longitud'];
	$parroquiahacienda = $_POST['parroquia']; 
	//$productorhacienda=$_POST['productor'];
	$hectariahacienda = $_POST['hectariah'];
	//$idconsulta = $_POST["idhac"];

session_start();
$id = $_SESSION['id'];


$objhacienda->setnombreh($nombrehacienda);
$objhacienda->setdireccion($direccionhacienda);
$objhacienda->settelefono($telefonohacienda);
$objhacienda->setparroquia($parroquiahacienda);
$objhacienda->sethectaria($hectariahacienda);
$objhacienda->setid($id);
$objhacienda->setId_Consulta($idconsulta2);

$objhacienda->Modificarh();

}

header('location:?url=vista-haciendas-productor');

?>