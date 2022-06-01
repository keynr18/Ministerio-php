<?php 

require_once '../Modelo/clasecultivo.php';

	$objcultivo = new Cultivo();

    $id = $_POST['id'];

    $objcultivo->setId($id);
    
	$cultivo = $objcultivo->sacarcultivo();

	echo $lista2 = "<option value='0'>seleciona cultivo</option>";

	foreach ($cultivo as $cul) {

	  echo $lista2 = "<option value='{$cul['id_cultivo']}'>{$cul['nombre_cultivo']}</option>";

	}



 ?>