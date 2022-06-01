<?php 

	require_once '../Modelo/clasemuni.php';

	$objmuni = new Muni();
 
	$municipio = $objmuni->sacarmuni();

	/*$municipio = $_POST['municipio'];*/
	echo $lista = "<option value='0'>seleciona  municipio</option>";

	foreach ($municipio as $muni) {

	  echo $lista = "<option value='{$muni['id_nombremuni']}'>{$muni['nombre_municipio']}</option>";

	}

 ?>