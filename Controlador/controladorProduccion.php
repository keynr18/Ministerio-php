<?php
require_once 'Modelo/claseProduccion.php';

$objProduccion = new Produccion();

if($_POST){

// recibimos los datos por via POST 
	$id_cultivo = $_POST["cultivo"];
	$fecha_s = $_POST["fechaS"];
	$fecha_c = $_POST["fechaC"];
	$id_hacienda = $_POST["hacienda"];


	
}

session_start();
$id = $_SESSION['id'];

	$objProduccion->setId_cultivo($id_cultivo);
	$objProduccion->setFecha_s($fecha_s);
	$objProduccion->setFecha_c($fecha_c);
	$objProduccion->setId_hacienda($id_hacienda);
	$objProduccion->setid($id);



	$resulRegistrar=$objProduccion->RegistrarProduccion();




	if ($resulRegistrar['estatus']== true) { ////verificamos si se ejecutó correctamente el método del modelo
	 $mensaje = 'Registro Exitoso del Titular';
	 

	}
	else {//si hay un error al registrar
            $mensaje = 'Error al registrar el Titular, contacte con el soporte';
        }
        //require_once '../Vista/registro.php';
       header('location:?url=vista-productor');

?>