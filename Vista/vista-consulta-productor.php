<?php 

  require_once 'vista-menusuperadministrador.php';
  
 ?>


<div class="container mt-3 ">

  <h2 class="display-4 text-center">Productores</h2>
</div>

<div class="container mt- mb-">

      <div class="row justify-content-center mt-"> 
        <div class="col-6 bord mt-">

          <form for="" action="?url=controlador-buscar-productorr" id="formulario1" method="post" enctype="application/x-wwww-urlencoded">
            <fieldset class="text-center mb-2"></fieldset>

              <div class="form-group d-flex ">
                  <input type="text" name="buscar" id="usuario1" placeholder="Introduzca cedula" class="form-control">
                  <button type="submit" id="entrarUser" class="btn btn-danger ml-2"><img src="Vista/img/lupaBlanca.png"></button>
              </div>

              <div class="d-flex justify-content-center">
                 <div class="form-group ">
                  
                 </a>
              </div>

          </form>
        </div>
      </div>
</div>
  
 <table class="table table-dark table-hover table-responsive-sm mt-2">
      <tr class="btn-success">
        <td class="text-center table-hover">NOMBRE</td>
        <td class="text-center table-hover">APELLIDO</td>
        <td class="text-center table-hover">CEDULA</td>
        <td class="text-center table-hover">FECHA</td>
        <td class="text-center table-hover">CORREO</td>
        <td class="text-center table-hover">TELEFONO</td>
     
      </tr>
      <?php
         require_once 'Controlador/controladorConsultaProductor.php';

          foreach ($resultado as $resul) {

            if ($resul['nombre_p']=="" && $resul['apellido_p']=="" && $resul['cedula_p']=="" && $resul['fecha_p']=="" && $resul['correo_p']=="" && $resul['telefono']=="") {
              
            }
            else{

            echo "<tr>
              <td class='text-center table-hover'> {$resul['nombre_p']} </td>
              <td class='text-center table-hover'>{$resul['apellido_p']}</td>
              <td class='text-center table-hover'>{$resul['cedula_p']}</td>
              <td class='text-center table-hover'>{$resul['fecha_p']}</td>
              <td class='text-center table-hover'>{$resul['correo_p']}</td>
              <td class='text-center table-hover'>{$resul['telefono']}</td>
            </tr>";
                }

          }

      ?>

 </table>

 <div class="row justify-content-center mt-2">

          <a href="?url=controlador-imprimir-xls"><img src="Vista/img/excel.svg" class="iconos"></a>

          <a href="?url=controlador-imprimir-pdf" target="_blank"><img src="Vista/img/pdf.svg" class="iconos ml-2 mr-2"></a>

          <a href="?url=controlador-imprimir-word"><img src="Vista/img/word.svg" class="iconos"></a>
  </div>

</div>

<div class="row justify-content-center mt-">
   <!-- <button class="btn btn-danger mb-3 ml-1"><a href="administracion.php">Atrás</a></button>-->
</div>


  <footer class="contaier-fluid mt-3 h-25 pb-5 bg-success">
        <p>Derechos Recerbados</p>
  </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <!-- <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/tabladinamicaconAjax.js"></script>-->
    <script src="Vista/js/jquery-3.3.1.slim.min.js"></script>
    <script src="Vista/js/popper.min.js"></script>
    <script src="Vista/js/bootstrap.min.js"></script>
    <scripts src="Vista/js/registroPro.js"></script>
  </body>
</html>