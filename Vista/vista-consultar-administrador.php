<?php 

  require_once 'vista-menusuperadministrador.php';
  
 ?>

<script type="text/javascript">
 function eliminarA(){

       var resp = confirm('Estas seguro de eliminar este administrador');

       if (resp == true) {

         return true;

       }else{

          return false;
       }
    }

</script>


<div class="container mt-3 ">

  <h2 class="display-4 text-center">Administradores</h2>
  
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
            //require_once '../controlador/controladorConsultarAdministrador.php';

          foreach ($resultado as $resul) {

            if($resul['nombre'] == "" && $resul['apellido']=="" && $resul['cedula']=="" && $resul['fecha']=="" && $resul['correo']=="" && $resul['telefono']=="" && $resul['tipo_user']==""){


            }
            else{



            echo "<tr>
              <td class='text-center table-hover'> {$resul['nombre']} </td>
              <td class='text-center table-hover'>{$resul['apellido']}</td>
              <td class='text-center table-hover'>{$resul['cedula']}</td>
              <td class='text-center table-hover'>{$resul['fecha']}</td>
              <td class='text-center table-hover'>{$resul['correo']}</td>
              <td class='text-center table-hover'>{$resul['telefono']}</td>
              <td class='text-center table-hover'>{$resul['tipo_user']}</td>
             
              <td class='text-center table-hover'><a href='#'><img src='Vista/img/eliminarRojo.png' class='icono2' onclick='return eliminarA()' ></a></td>
            </tr>";

                }

          }

      ?>

 </table>

 <div class="row justify-content-center mt-2">
          <!--<button type="button" id="" class="btn btn-danger mb-3 ml-1">Imprimir</button>
          <button class="btn btn-danger mb-3 ml-1"><a href="administracion.php">Atrás</a></button>-->
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