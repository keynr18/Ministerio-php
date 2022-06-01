<?php 

  require_once 'vista-menusuperadministrador.php';
  
 ?>
  
  <script type="text/javascript">
    
    function eliminar(){

       var resp = confirm('Estas seguro de eliminar este evento');

       if (resp == true) {

         return true;

       }else{

          return false;
       }
    }

  </script>

<!--final del menu de navegacion-->

<section class="contaier mt-5 pt-5">
        <h2 class="display-4 text-center">Eventos del ministerio</h2>
</section>

<section class="container d-flex flex-wrap mt-2 pt-3 ">

          <?php 

                require_once 'Controlador/controladorMostrarEventos.php';
         
      if($eventos!=""){ 

          foreach ($eventos as $e) {

              if($e['imagen']=="" && $e['titulo_e']=="" && $e['direccion_e']=="" && $e['fecha_a']=="" && $e['hora']=="" && $e['contenido_e']==""){
              }
              else{
                       echo "<article class='col-sm-12 col-md-12 col-lg-4 col-xl-4 mb-5'>
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
                    
                            <div class='row mt-3'>

                              <div class='col col-lg-6 text-center'>

                              <a href='?url=vista-actualizar&ide={$e['id_eventos']}'><img src='Vista/img/editarVerde.png' class='icono2' title='Editar evento'></a>
                              </div>

                              <div class='col col-lg-6 text-center'>

                              <a href='?url=controladoreliminareventos&ide={$e['id_eventos']}'><img src='Vista/img/eliminarRojo.png' onclick='return eliminar()' class='icono2' title='Eliminar evento'></a>
                              </div>

                            </div>

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


  <footer class="contaier-fluid mt-3 h-25 pb-5 bg-success">
        <p>Derechos Recerbados</p>
  </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="Vista/js/jquery-3.4.1.min.js"></script>
    <script src="Vista/js/jquery-3.3.1.slim.min.js"></script>
    <!--<script src="Vista/js/popper.min.js"></script>-->
    <script src="Vista/js/bootstrap.min.js"></script>
  </body>
</html>