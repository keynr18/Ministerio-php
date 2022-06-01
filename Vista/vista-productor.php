<?php 
  //require_once 'cintillo.php';
  require_once 'Vista/vista-menuProductor.php';

 ?>

<div class="container mt-3">

  <h2 class="display-4 text-center">Tus producciones</h2>
  
 <table class="table table-dark table-hover ">
      <tr class="btn-success">
      
        <td class="text-center table-hover">CULTIVO</td>
        <td class="text-center table-hover">DIRECCION</td>
        <td class="text-center table-hover">HACIENDA</td>
        <td class="text-center table-hover">FECHA DE SIEMBRA</td>
        <td class="text-center table-hover">FECHA DE COSECHA</td>
        <td class="text-center table-hover">ACCIÓN</td>
      </tr> 
<?php 

    require_once 'Controlador/controladorimprimirproduccion.php';

    foreach ($resultadoProduccion as $res) {

          if($res['nombre_cultivo']=="" ){


          }
          else{

           echo  "<tr>
              
              <td class='text-center table-hover'>{$res['nombre_cultivo']}</td>
              <td class='text-center table-hover'>{$res['direccion_h']}</td>
              <td class='text-center table-hover'>{$res['nombre_h']}</td>
              <td class='text-center table-hover'>{$res['fecha_s']}</td>
              <td class='text-center table-hover'>{$res['fecha_c']}</td>
              <td class='text-center table-hover'><a href='?url=actualizarProduccion&idprod={$res['id_produccion']}'><img src='Vista/img/editarVerde.png' class='icono2' title='Editar produccion'></a></td>
            </tr>";
          }


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