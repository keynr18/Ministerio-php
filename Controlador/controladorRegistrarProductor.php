<?php

require_once 'Modelo/claseproductor.php';

$objProductor = new Productor();
 
if($_POST){
// recibimos los datos por via POST 
    $nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$cedula = $_POST["cedula"];
	$fecha = $_POST["fecha"];
	$telefono = $_POST["tele"];
	$correo = $_POST["correo"];
	$usuario = $_POST["usuario"];
	$clave1 = $_POST["clave1"];
	$clave2 = $_POST["clave2"];
}

	$objProductor->setNombre($nombre);
	$objProductor->setApellido($apellido);
	$objProductor->setCedula($cedula);
	$objProductor->setFecha($fecha);
	$objProductor->setTelefono($telefono);
	$objProductor->setCorreo($correo);
	$objProductor->setUsuario($usuario);
	$objProductor->setClave($clave2); 

	$resulRegistrar=$objProductor->RegistrarProductor(); 

	if ($resulRegistrar['estatus'] == true) { ////verificamos si se ejecutó correctamente el método del modelo

	 $mensaje = 'Registro Exitoso';
	 require_once 'Vista/vista-iniciosesion.php';
	 

	}
	else {//si hay un error al registrar
		
            $mensaje = 'Error al registrarte como productor';
       		require_once ("Vista/vista-registro-productor.php");
        }
    
?>