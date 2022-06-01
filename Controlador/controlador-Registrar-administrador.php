<?php

require_once 'Modelo/claseadministrador.php';

$objAdministrador = new Administrador();
 
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
	$tipouser = $_POST["tipo_u"];
}


	$objAdministrador->setNombre($nombre);
	$objAdministrador->setApellido($apellido);
	$objAdministrador->setCedula($cedula);
	$objAdministrador->setFecha($fecha);
	$objAdministrador->setTelefono($telefono);
	$objAdministrador->setCorreo($correo);
	$objAdministrador->setUsuario($usuario);
	$objAdministrador->setClave($clave2);
	$objAdministrador->setTipouser($tipouser);


	$resulRegistrar=$objAdministrador->RegistrarAdministrador();


	if ($resulRegistrar['estatus']== true) { ////verificamos si se ejecutó correctamente el método del modelo
	 $mensaje = 'Registro Exitoso del Titular';
	 

	}
	else {//si hay un error al registrar
            $mensaje = 'Error al registrar el Titular, contacte con el soporte';
        }
        //include('../Vista/registro.php');
       header('location:?url=controladorConsultarAdministrador');
?>