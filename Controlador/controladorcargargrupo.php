<?php 

	require_once '../Modelo/clasegrupoagricola.php';

	$objgrupo = new Grupo();

	$grupo = $objgrupo->sacargrupo();

	/*$municipio = $_POST['municipio'];*/
	echo $lista = "<option value='0'>seleciona grupo agricolas</option>";

	foreach ($grupo as $g) {

	  echo $lista = "<option value='{$g['id_nombre_grupo']}'>{$g['nombre_grupo']}</option>";

	}

 ?>