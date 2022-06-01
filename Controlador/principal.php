<?php 

if (is_file("Vista/".$direccion.".php")){
	
	require_once ("Vista/".$direccion.".php");
	
}else{

	echo "pagina no encontrada";
}


 ?>