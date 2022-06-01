<?php  

require_once 'Modelo/claseproductor.php';

$obj= new Productor();



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
	$idconsulta=$_POST["id"];
	$id = $idconsulta;


	$obj->setNombre($nombre);
	$obj->setApellido($apellido);
	$obj->setCedula($cedula);
	$obj->setFecha($fecha);
	$obj->setTelefono($telefono);
	$obj->setCorreo($correo);
	$obj->setUsuario($usuario);
	$obj->setClave($clave2);
	$obj->setid($idconsulta);

$obj->modificar();   
    //$busqueda=$obj->consultaactualizado($id);
}

session_start();
session_destroy();

header('location:?url=vista-iniciosesion');

?>