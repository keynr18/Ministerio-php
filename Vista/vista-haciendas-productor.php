
<?php 
  //require_once 'cintillo.php';
  require_once 'vista-menuProductor.php';

 ?>

<div class="container mt-3">

  <h2 class="display-4 text-center">Tus haciendas</h2>
  
 <table class="table table-dark table-hover ">
      <tr class="btn-success">
        <td class="text-center table-hover">NOMBRE HACIENDA</td>
        <td class="text-center table-hover">DIRECCION</td>
        <td class="text-center table-hover">TELEFONO</td>
        <td class="text-center table-hover">HECTARIA</td>
        <td class="text-center table-hover">PARROQUIA</td>
        <td class="text-center table-hover">ACCIÓN</td>
      </tr>
    <?php 

    require_once 'Controlador/controladorimprehacienda.php';

    if ($haciendas) {

    foreach ($haciendas as $h) {

          if ($h['nombre_h']=="" && $h['direccion_h']=="" && $h['telefono_h']=="" && $h['hectaria_h']=="" && $h['nombre_parroquia']=="") {

            
          }else{

           echo  "<tr>
              <td class='text-center table-hover'>{$h['nombre_h']}</td>
              <td class='text-center table-hover'>{$h['direccion_h']}</td>
              <td class='text-center table-hover'>{$h['telefono_h']}</td>
              <td class='text-center table-hover'>{$h['hectaria']}</td>
              <td class='text-center table-hover'>{$h['nombre_parroquia']}</td>
              <td class='text-center table-hover'><a href='?url=actualizarhacienda&idhac={$h['id_hacienda']}'><img src='Vista/img/editarVerde.png' class='icono2' title='Editar hacienda'></a></td>
            </tr>";

          }
          
         
      }// fin del foreach

    }else{

      echo "no hay producciones";
    }
    ?>
      
 </table>

</div>



  <footer class="contaier-fluid mt-3 h-25 pb-5 bg-success">
        <p>Derechos Recerbados</p>
  </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="Vista/js/jquery-3.3.1.slim.min.js"></script>
    <script src="Vista/js/popper.min.js"></script>
    <script src="Vista/js/bootstrap.min.js"></script>
  </body>
</html>