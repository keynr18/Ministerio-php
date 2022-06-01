<?php 

require_once 'Modelo/clasehacienda.php';

$objhacienda = new Hacienda();

//session_start();

$id = $_SESSION['id'];

$objhacienda->setid($id); 

$haciendas = $objhacienda->sacarhacienda();


 ?>