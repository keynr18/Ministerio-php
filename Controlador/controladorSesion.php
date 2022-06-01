<?php 

	require_once 'Modelo/claseproductor.php';
	require_once 'Modelo/claseadministrador.php';

if($_POST){
	$user = $_POST['usuario1']; 
	$contra = $_POST['contra11'];
	$tipouser = $_POST['tipouser'];

	foreach ($tipouser as $tipo) { 
		
		 $tipo;
	}

	// este if verifica si el usuario entra como productor para iniciar session
	if ($tipo=="productor") {
	
			$objSesion = new Productor();

			$usuarioproductor = $objSesion->consultarProductor();

			foreach ($usuarioproductor as $u) {

				  
				   $u['usuario_p'];
				   $u['clave_p'];

					if($u['usuario_p']==$user && $u['clave_p']==$contra)
					{
						   session_start();
						   $_SESSION['id']= $u['id_productor'];
						   $_SESSION['nombre']= $u['nombre_p'];
						   $_SESSION['apellido']= $u['apellido_p'];
						   $_SESSION['cedula']= $u['cedula_p'];
						   $_SESSION['fecha']= $u['fecha_p'];
						   $_SESSION['correo']= $u['correo_p'];
						   $_SESSION['telefono']= $u['telefono']; 
						   $_SESSION['usuario']= $u['usuario_p'];
						   $_SESSION['clave']= $u['clave_p'];

						//header('location:?url=vista-productor');
						require_once "Vista/vista-productor.php";
						exit;
					}

			

			}

			$mensaje = 1;
			header('location:?url=vista-iniciosesion&m=1');
			//require_once "Vista/vista-iniciosesion.php";

	}

	// este if verifica si el usuario entra como administrador para iniciar session
	elseif ($tipo=="administrador") {
	

			$objSesion = new Administrador();

			$usuarioadministrador = $objSesion->consultarAdministrador();

			foreach ($usuarioadministrador as $u) {

				  $u['usuario'];
				  $u['clave']; 

					if($u['usuario']==$user && $u['clave']==$contra)
					{
						   session_start();
						   $_SESSION['id']= $u['id_user'];
						   $_SESSION['nombre']= $u['nombre'];
						   $_SESSION['apellido']= $u['apellido'];
						   $_SESSION['cedula']= $u['cedula'];
						   $_SESSION['correo']= $u['correo'];
						   $_SESSION['telefono']= $u['telefono'];
						   $_SESSION['usuario']= $u['usuario'];
						   $_SESSION['clave']= $u['clave'];
						   $_SESSION['tipo']= $u['tipo_user'];

						require_once ('Vista/vista-administrador.php');
						exit;
					}

			}
			$mensaje = 1;
			header('location:?url=vista-iniciosesion&m=1');
	}
		
}

 ?>