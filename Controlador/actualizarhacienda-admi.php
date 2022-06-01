<?php 

require_once 'Modelo/clasehacienda.php';

$objhacienda = new Hacienda();


$id = $_GET['idhac'];

$cedula = $_GET['ci'];

$haciendas = $objhacienda->sacarhaciendaParaModificar($id);

session_start();


require_once 'Vista/actualizarhacienda-admi.php';


 ?>