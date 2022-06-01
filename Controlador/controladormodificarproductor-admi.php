<?php

require_once 'Modelo/claseproductor.php';

$objadmin = new Productor();
	//$btn = $_POST['btn'];
	 //	echo  $btn;
//$idconsulta2 = $_POST['idpro'];
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
	$idconsulta = $_POST["id"];

}

	$objadmin->setNombre($nombre);
	$objadmin->setApellido($apellido);
	$objadmin->setCedula($cedula);
	$objadmin->setFecha($fecha);
	$objadmin->setTelefono($telefono);
	$objadmin->setCorreo($correo);
	$objadmin->setUsuario($usuario);
	$objadmin->setClave($clave2); 
	$objadmin->setid($idconsulta);

	$resulRegistrar=$objadmin->modificar();


	if ($resulRegistrar['estatus']== true) { ////verificamos si se ejecutó correctamente el método del modelo
	 $mensaje = 'Registro Exitoso del Titular';
	 

	}
	else {//si hay un error al registrar
            $mensaje = 'Error al registrarte como productor';
        }
    
    //header('location:?url=vista-consulta-productor');
    header('location:?url=controlador-buscar-productorr&ci='.$cedula);
 //      require_once ("Vista/vista-registro-productor.php");
?>