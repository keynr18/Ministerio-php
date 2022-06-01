<?php 

	require_once 'Modelo/claseeventos.php';

	$objEventos = new Eventos();


	$btn = $_POST['btn'];
	 	echo  $btn;

$idconsulta2 = $_POST["ide"];

if($btn == "Modificar"){
	$tituloEventos = $_REQUEST["titulo"];
	$direccionEventos = $_REQUEST["direc"]; 
	$fechaA = $_REQUEST["fechaa"]; 
	$fechaC = $_REQUEST["fechac"]; 
	$hora = $_REQUEST["hora"];
	//$imagen = addslashes(file_get_contents($_FILES['img']['tmp_name']));
	$contenido = $_REQUEST["contenido"];
	$idconsulta = $_POST["ide"];

	$nombre_img = $_FILES['img']['name'];
	$archivo = $_FILES['img']['tmp_name'];
	$ruta = "Vista/imagenes";
	$ruta = $ruta."/".$nombre_img;
	//$ruta = "imagenes/".$nombre_img;
	move_uploaded_file($archivo, $ruta);
	//print_r($_FILES);

$objEventos->setTitulo($tituloEventos);
$objEventos->setDireccion($direccionEventos);
$objEventos->setFechaA($fechaA);
$objEventos->setFechaC($fechaC);
$objEventos->setHora($hora);
$objEventos->setContenido($contenido);
$objEventos->setImagen($ruta);
$objEventos->setId_Consulta($idconsulta2);
}

$eventos=$objEventos->Modificare();

/*echo $objEventos->getTitulo();
echo $objEventos->getDireccion();
echo $objEventos->getFechaA();
echo $objEventos->getFechaC();
echo $objEventos->getHora();
echo $objEventos->getContenido();
$imagen = $objEventos->getImagen();
echo "<img src='$imagen'>";*/


header( 'location:?url=vista-administrador');
 ?>
