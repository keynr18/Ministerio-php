<?php
require_once 'Modelo/claseProduccion.php';

$objProduccion = new Produccion();

	$btn = $_POST['btn'];
	 	echo  $btn;


 $idconsulta2 = $_POST["idconsulta3"];
  	
if($btn == "Modificar"){

	$id_cultivo = $_POST["cultivo"];
	$fecha_s = $_POST["fechaS"];
	$fecha_c = $_POST["fechaC"];
	$id_hacienda = $_POST["hacienda"];
	$id_grupo = $_POST["grupo"];
	$idconsulta = $_POST["idconsulta3"];


	$objProduccion->setId_cultivo($id_cultivo);
	$objProduccion->setFecha_s($fecha_s);
	$objProduccion->setFecha_c($fecha_c);
	$objProduccion->setId_hacienda($id_hacienda);
	$objProduccion->setId_grupo($id_grupo);
	$objProduccion->setId_Consulta($idconsulta2);
	
}
	$resulRegistrar=$objProduccion->Modificar();

       
if ($_GET) {
	 
	$cedula = $_GET['ci'];
}



header('location:?url=controlador-buscar-productorr&ci='.$cedula);

?>