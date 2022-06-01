<?php 

  require_once 'vista-menusuperadministrador.php';
  
 ?> 

 <script type="text/javascript">
    
    function eliminar(){

       var resp = confirm('Estas seguro de eliminar este productor, se eliminaran todos sus datos');

       if (resp == true) {

         return true;

       }else{

          return false;
       }
    }

    function eliminarh(){

       var resp = confirm('Estas seguro de eliminar esta hacienda, se eliminaran las producciones de esta hacienda');

       if (resp == true) {

         return true;

       }else{

          return false;
       }
      }

       function eliminarp(){

       var resp = confirm('Estas seguro de eliminar esta producción');

       if (resp == true) {

         return true;

       }else{

          return false;
       }
    }

  </script>

<div class="container mt-3 ">

  <div class="container mt- mb-5">

      <div class="row justify-content-center mt-">
        <div class="col-6 bord mt-">

          <form for="" action="?url=controlador-buscar-productorr" id="formulario1" method="post" enctype="application/x-wwww-urlencoded">
            <fieldset class="text-center mb-2"></fieldset>

              <div class="form-group d-flex">
                  <input type="text" name="buscar" id="usuario1" placeholder="Introduzca cedula" class="form-control">
                  <a href="vista-busqueda-productor.php"><button type="submit" id="entrarUser" class="btn btn-danger ml-2"><img src="Vista/img/lupaBlanca.png" title="Buscar Productor"></button></a>
              </div>

              <div class="d-flex justify-content-center">
                 <div class="form-group ">

              </div>
          </form>
        </div>
      </div>
</div>

<h2 class="display-4 text-center mt-3"></h2>
  
 <table class="table table-dark table-hover table-responsive-sm">
      <tr class="btn-success">
        <td class="text-center table-hover">NOMBRE</td>
        <td class="text-center table-hover">APELLIDO</td>
        <td class="text-center table-hover">CEDULA</td>
        <td class="text-center table-hover">FECHA</td>
        <td class="text-center table-hover">CORREO</td>
        <td class="text-center table-hover">TELEFONO</td>
        <td class="text-center table-hover" colspan="2">ACCIÓN</td>
      </tr>
      <?php
           // require_once '../controlador/controlador-buscar-productorr.php';
            //require_once 'vista-busqueda-productor.php';

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
              <td class='text-center table-hover'>{$b['telefono']}</td>

              <td class='text-center table-hover'><a href='?url=vistamodificarproductor-admi&idpro={$b["id_productor"]} '><img src='Vista/img/editarVerde.png' class='icono2' title='Editar productor'></a></td>
             
              <td class='text-center table-hover'><a href='?url=controladoreliminarproductor&idpro={$b["id_productor"]}'><img src='Vista/img/eliminarRojo.png' onclick='return eliminar()' class='icono2' title='Eliminar productor'></a></td>
            </tr>";

//botones para reportar el producctor que se busco
            echo "<a href='?url=controlador-exportar-productor-xls&buscar={$b['cedula_p']}'><img src='Vista/img/excel.svg' class='iconos mb-2' title='Exportar a excel'></a>

             <a href='?url=controlador-exportar-productor-pdf&buscar={$b['cedula_p']}' target='_blank'><img src='Vista/img/pdf.svg' class='iconos ml-2 mr-2 mb-2' title='Exportar a pdf'></a>

             <a href='?url=controlador-exportar-productor-word&buscar={$b['cedula_p']}'><img src='Vista/img/word.svg' class='iconos mb-2' title='Exportar a word'></a>";

              }

          
          }
      ?>
 </table>


<div class="container mt-3">

  <h2 class="display-4 text-center">Haciendas</h2>
  
 <table class="table table-dark table-hover table-responsive-sm">
      <tr class="btn-success">
        <td class="text-center table-hover">HACIENDA</td>
        <td class="text-center table-hover">DIRECCION</td>
        <td class="text-center table-hover">TELEFONO</td>
        <td class="text-center table-hover">HECTARIA</td>
        <td class="text-center table-hover">PARROQUIA</td>
        <td class="text-center table-hover" colspan="2">ACCIÓN</td>
      </tr>
 
 <?php 

 
error_reporting(E_ALL ^ E_NOTICE); // desactiva los notis

$cnt = strlen(implode("", $busqueda2)) ;

    foreach ($busqueda2 as $h) {


 if ($cnt > 1 ){
 if ($h['nombre_h']=="") {
  # code...





} else {
 //print_r(strlen(implode("", $busqueda2)));
echo  "<tr>
              <td class='text-center table-hover'>{$h['nombre_h']}</td>
              <td class='text-center table-hover'>{$h['direccion_h']}</td>
              <td class='text-center table-hover'>{$h['telefono_h']}</td>
              <td class='text-center table-hover'>{$h['hectaria']}</td>
              <td class='text-center table-hover'>{$h['nombre_parroquia']}</td>

              <td class='text-center table-hover'><a href='?url=actualizarhacienda-admi&idhac={$h['id_hacienda']}&ci={$h['cedula_p']}'><img src='Vista/img/editarVerde.png' class='icono2' title='Editar hacienda'></a></td>

              <td class='text-center table-hover'><a href='?url=controladoreliminarhacienda-admi&idhac={$h['id_hacienda']}&ci={$h['cedula_p']}'><img src='Vista/img/eliminarRojo.png' class='icono2' onclick='return eliminarh()' title='Eliminar hacienda'></a></td>

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

  <h2 class="display-4 text-center">Producciones</h2>
  
 <table class="table table-dark table-hover ">
      <tr class="btn-success">
      
        <td class="text-center table-hover">CULTIVO</td>
        <td class="text-center table-hover">DIRECCION</td>
        <td class="text-center table-hover">HACIENDA</td>
        <td class="text-center table-hover">SIEMBRA</td>
        <td class="text-center table-hover">COSECHA</td>
        <td class="text-center table-hover" colspan="2">ACCIÓN</td>
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

              <td class='text-center table-hover'><a href='?url=actualizarProduccionAdmin&idprod={$res['id_produccion']}&ci={$res['cedula_p']}'><img src='Vista/img/editarVerde.png' class='icono2' title='Editar Producción'></a></td>

              <td><a href='?url=eliminarproduccion&idprod={$res['id_produccion']}&ci={$res['cedula_p']}'><img src='Vista/img/eliminarRojo.png' class='icono2' onclick='return eliminarp()' title='Eliminar Producción'></a></td>
            </tr>";
          }


      }
    ?>
 </table>

</div>


  <div class="row justify-content-center mt-2">
        <?php
         /* echo "<a href='?url=controlador-exportar-productorxls&buscar={$b['cedula_p']}'><button type='button' id='' class='btn btn-danger mb-3 ml-1'>Exportar en xls</button></a>
          <a href='../controlador/controlador-imprimir-pdf.php'><button type='button' id='' class='btn btn-danger mb-3 ml-1'>Exportar en pdf</button></a>
          <a href='../controlador/controlador-imprimir-word.php'><button type='button' id='' class='btn btn-danger mb-3 ml-1'>Exportar en word</button></a>";*/
        ?>
      </div>
  </div>

</div>


  <footer class="contaier-fluid mt-3 h-25 pb-5 bg-success">
        <p>Derechos Recerbados</p>
  </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <scripts src="js/registroPro.js"></script>
  </body>
</html>