<?php 

header("content-type:application/octer-stream");
header("content-Disposition: attachment; filename=Productor.xls");
header("pragma: no-cache");
header("Expirea: 0");

	require_once 'Modelo/claseadministrador.php';


	$objAdministrador = new Administrador();


	if ($_GET) {
	
		$cedula_productor = $_GET["buscar"];

	$objAdministrador->setBuscarcedula($cedula_productor);
	
	}


	$busqueda = $objAdministrador->buscarProductor();
	$busqueda2 = $objAdministrador->buscarHaciendas();

	$busqueda3 = $objAdministrador->buscarProduccion();
?>

 <h2 class="display-4 text-center">Productor</h2>

	<table class="table table-dark table-hover table-responsive-sm">
      <tr class="btn-success" style="background-color: green;">
        <td class="text-center table-hover">NOMBRE</td>
        <td class="text-center table-hover">APELLIDO</td>
        <td class="text-center table-hover">CEDULA</td>
        <td class="text-center table-hover">FECHA</td>
        <td class="text-center table-hover">CORREO</td>
        <td class="text-center table-hover">TELEFONO</td>
      </tr>
           
		<?php
          foreach ($busqueda as $b) {

            if ($b['nombre_p']=="" && $b['apellido_p']=="" && $b['cedula_p']=="" && $b['fecha_p']=="" && $b['correo_p']=="" && $b['telefono']=="") {
              
            }
            else{

            echo "<tr>
              <td class='text-center table-hover'> {$b['nombre_p']} </td>
              <td class='text-center table-hover'>{$b['apellido_p']}</td>
              <td class='text-center table-hover'>{$b['cedula_p']}</td>
              <td class='text-center table-hover'>{$b['fecha_p']}</td>
              <td class='text-center table-hover'>{$b['correo_p']}</td>
              <td class='text-center table-hover'>{$b['telefono']}</td>";

              }

          }

       ?>   

 </table>


<div class="container mt-3">

  <h2 class="display-4 text-center">Haciendas del productor</h2>
  
 <table class="table table-dark table-hover ">
      <tr class="btn-success">
        <td class="text-center table-hover">NOMBRE HACIENDA</td>
        <td class="text-center table-hover">DIRECCION</td>
        <td class="text-center table-hover">TELEFONO</td>
        <td class="text-center table-hover">HECTARIA</td>
        <td class="text-center table-hover">PARROQUIA</td>
      </tr>
 
 <?php 

error_reporting(E_ALL ^ E_NOTICE); // desactiva los notis

$cnt = strlen(implode("", $busqueda2)) ;

    foreach ($busqueda2 as $h) {


 if ($cnt > 1 ){
 if ($h['nombre_h']=="") {
  

} else {
 //print_r(strlen(implode("", $busqueda2)));
echo  "<tr>
              <td class='text-center table-hover'>{$h['nombre_h']}</td>
              <td class='text-center table-hover'>{$h['direccion_h']}</td>
              <td class='text-center table-hover'>{$h['telefono_h']}</td>
              <td class='text-center table-hover'>{$h['hectaria']}</td>
              <td class='text-center table-hover'>{$h['nombre_parroquia']}</td>

            </tr>";}
         
           
              

          }else if ($cnt == 1  ){
//print_r(count(implode("", $busqueda2)));
          
             echo  "<tr>
              <td class='text-center table-hover'>-------</td>
              <td class='text-center table-hover'>ninguna</td>
              <td class='text-center table-hover'>hacienda</td>
              <td class='text-center table-hover'>registrada</td>
              <td class='text-center table-hover'>--------</td>
                 <td class='text-center table-hover'></td>";
                 //print_r(array_sum($busqueda2));
                 print_r("                   ");
          }
         error_reporting(E_ALL); // me activa los notis
      }
    


    ?>
      
 </table>

</div>

<div class="container mt-3">

  <h2 class="display-4 text-center">Producciones del Productor</h2>
  
 <table class="table table-dark table-hover ">
      <tr class="btn-success">
      
        <td class="text-center table-hover">CULTIVO</td>
        <td class="text-center table-hover">DIRECCION</td>
        <td class="text-center table-hover">HACIENDA</td>
        <td class="text-center table-hover">FECHA DE SIEMBRA</td>
        <td class="text-center table-hover">FECHA DE COSECHA</td>
      </tr> 
<?php 

    //require_once 'Controlador/controladorimprimirproduccion.php';

    foreach ($busqueda3 as $res) {

          if($res['nombre_cultivo']=="" ){


          }
          else{

           echo  "<tr>
              
              <td class='text-center table-hover'>{$res['nombre_cultivo']}</td>
              <td class='text-center table-hover'>{$res['direccion_h']}</td>
              <td class='text-center table-hover'>{$res['nombre_h']}</td>
              <td class='text-center table-hover'>{$res['fecha_s']}</td>
              <td class='text-center table-hover'>{$res['fecha_c']}</td>
            </tr>";
          }


      }
    ?>
 </table>


 ?>