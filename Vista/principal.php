<?php 

  require_once 'Vista/header.php';
  
  
 ?>
<!--final del menu de navegacion-->

<!-- carussel para mostrar las producciones actuales-->
<section class="container">

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php 

      require_once 'Controlador/controladorImprimirProduccionslider.php';

      foreach ($resultadoProduccion  as $p) {

        echo "<li data-target='#carouselExampleIndicators' data-slide-to='{$p['id_produccion']}'></li>";
      }

     ?>
  </ol>
  <div class="carousel-inner">
    <div class='carousel-item active'>
        <img src='Vista/img/slider1.png ' class='d-block w-100 h-50' alt=''>
    </div>
  
  <?php  

  foreach ($resultadoProduccion  as $p) {

      if($p['nombre_cultivo']=="" && $p['nombre_h']=="" && $p['direccion_h']==""){


      }else{

       echo  "<div class='carousel-item'>
          <div class='container-fluid bg-success h-100 p-5'>
            <p class='display-4 text-center text-white bg-dark p-3 rounded'>Siembra de {$p['nombre_cultivo']} en la hacienda {$p['nombre_h']} ubicada en {$p['direccion_h']} </p>
          </div>
          <img src='' class='d-block w-75' alt=''>
        </div>";
      }

  }
  ?>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>  
</section>


  <!--card-->
<!--cominezan los eventos del sistema--> 
<section class="contaier mt-5 pt-5">
        <h2 class="display-4 text-center ">Eventos del ministerio</h2>
</section>

<section class="container d-flex flex-wrap mt-2 pt-3 ">

          <?php 

                require_once 'Controlador/controladorMostrarEventos.php';
         
      if($eventos!=""){ 

          foreach ($eventos as $e) {

              if($e['imagen']=="" && $e['titulo_e']=="" && $e['direccion_e']=="" && $e['fecha_a']=="" && $e['hora']=="" && $e['contenido_e']==""){


                      
              }
              else{
                       echo "<article class='col-sm-12 col-md-12 col-lg-4 col-xl-4 mb-2'>
                          <!-- card numero uno-->
                          <div class='card'>
                            <img class='card-img-top img-responsive' src='{$e['imagen']}' alt='card image cap'>
                            <div class='card-block p-3'>
                              <h4 class='card-title'>{$e['titulo_e']}</h4>
                              <p class='card-text'>Direccion: {$e['direccion_e']}</p>
                              <p class='card-text'>Fecha: {$e['fecha_a']}</p>
                               <p class='card-text'>Hora: {$e['hora']}</p>
                              <!--<a class='btn btn-primary' 

                                    <!--buttom trigger modal-->
                                  <button type='button' class='btn btn-success' data-toggle='modal' data-target='#".$e['id_eventos']."'>ver mas información</button>
                    
                   <div class='modal face' id='{$e['id_eventos']}' tabindex='-1' role='dialog' aria-labelledby='#exampleModallabel' aria-hidden='true'>
                            <div class='modal-dialog' role='document'>
                               <div class='modal-content'>
                                  <div class='modal-header'>
                                     <h5 class='modal-title' id='#exampleModalLabel'> {$e['titulo_e']}</h5>
                                     <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                     </button>
                                  </div>
                                  <div class='modal-body'>
                                     <p> {$e['contenido_e']}</p>
                                  </div>
                                  <div class='modal-footer'>
                                     <button type='button' class='btn btn-success' data-dismiss='modal'>Cerrar</button>
                                     <!--<button type='button' class='btn btn-primary'>save changes</button>-->
                                  </div>
                               </div>
                            </div>
                        </div>";

                         echo "</article>";
                      }
            }//fin del foreach

         }elseif($eventos==""){

           echo "no y que";
         }


         ?>
         
</section>
  <!--fin del card-->
  <!--fin del card-->

  <footer class="contaier-fluid mt-3 h-25 pb-5 bg-success">
        <p>Derechos Recerbados</p>
  </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="Vista/js/jquery-3.3.1.slim.min.js"></script>
    <script src="Vista/js/popper.min.js"></script>
    <script src="Vista/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="Vista/js/validarUsuario.js"></script>
  </body>
</html>