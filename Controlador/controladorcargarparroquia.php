<?php 

require_once '../Modelo/claseparro.php';

	$objparro = new Parro();

    $id = $_POST['id'];

    $objparro->setId($id);
    
	$parroquia = $objparro->sacarparroquia(); 

	echo $lista2 = "<option value='0'>seleciona parroquia</option>";

	foreach ($parroquia as $parro) {

	  echo $lista2 = "<option value='{$parro['id_parroquia']}'>{$parro['nombre_parroquia']}</option>";

	}

 ?>