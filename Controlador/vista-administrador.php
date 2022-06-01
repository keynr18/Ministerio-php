<?php 

require_once 'Modelo/claseeventos.php';

$objproductor = new Eventos();

$eventos = $objproductor->mostrarEventos();

session_start(); 

require_once ("Vista/vista-administrador.php");


 ?>