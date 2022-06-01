<?php

require_once 'Modelo/claseproductor.php';

$obj = new Productor();

if ($_GET) {
	$id=$_GET['idpro'];

$res=$obj->consultarProductormodificar($id);

}

session_start();

require_once ("Vista/vista-datos-personales.php");


 ?>