<?php  

require_once 'Modelo/clasehacienda.php';

$objhacienda = new Hacienda();

/*session_start();

$id = $_SESSION['id'];

$objhacienda->setid($id); */

$id = $_GET['idhac'];

$haciendas = $objhacienda->sacarhaciendaParaModificar($id);

session_start();

require_once 'Vista/actualizarhacienda.php';


?>