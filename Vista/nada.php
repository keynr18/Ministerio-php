<?php 

  require_once 'header.php';
  
  
 ?>

<!--final del menu de navegacion-->
  <!--card-->


<!-- formulario de session para los productores y administradores--> 

<div class="container mt-3">

      <div class="row justify-content-center ">
        <div class="col-6 borde bg-success">

          <form for="" action="../controlador/controladorSesion.php" id="formulario1" method="post" enctype="application/x-wwww-urlencoded">
            <fieldset class="text-center mb-2">Iniciar sección</fieldset>

              <div class="form-group">
                <label>Nombre de usuario: </label>
                  <input type="text" name="usuario1" id="usuario1" placeholder="Usuario" class="form-control">
              </div>

              <div class="form-group">
                <label>Contraseña:</label>
                  <input type="password" name="contra11" id="contra11" placeholder="Contraseña" class="form-control">
              </div>

              <div class="d-flex justify-content-center">

                 <label class="mr-2">Administrador
                    <input type="radio" name="tipouser[]" id="administrador" value="administrador" required="">
                 </label>

                 <label>Productor
                    <input type="radio" name="tipouser[]" id="productor" value="productor" required="">
                 </label>

              </div>

              <div class="d-flex justify-content-center">
                 <div class="form-group ">
                  <button  type="button" id="entrarUser" class="btn btn-danger">Entrar</button>
                  <button  type="button" id="limpiarUser" class="btn btn-danger">Limpiar</button>
                  <button  type="" class="btn btn-danger">Salir</button>
                 </div>
              </div>

              <div>
                <?php 

                    require_once '../controlador/controladorSesion.php';

                     $mensaje = "";
                     $nada = "";
                     $salidaP = "No eres productor";
                     $salidaA = "No eres administrador";

                   if($mensaje=="productor"){

                        echo $salidaP;
                    }
                    elseif($mensaje="administrador"){

                      echo $salidaA;
                    }
                    
                 ?>
              </div>

          </form>
        </div>
      </div>
</div>


<!--fin del  formulario de session para los productores y administradores--> 


<!--cominezan los eventos del sistema--> 

<section class="container mt-2 pt-3">
   
"<div class='card-deck'>
    <article class='col-sm-12 col-md-12 col-lg-4 col-xl-4 mb-2'>
      <!-- card numero uno-->
      <div class='card'>
        <img class='card-img-top' src='img/slider1.png' alt='card image cap'>
        <div class='card-block p-3'>
          <h4 class='card-title'>{$e['titulo_e']}</h4>
          <p class='card-text'>Direccion: {$e['direccion_e']}</p>
          <p class='card-text'>Fecha: {$e['fecha_a']}</p>
           <p class='card-text'>Hora: {$e['hora']}</p>
          <!--<a class='btn btn-primary' -->

                <!--buttom trigger modal-->
              <button type='button' class='btn btn-success' data-toggle='modal' data-target='#myModal'>ver mas información</button>";

              <!--modal-->
                <div class="modal face" id="myModaE" tabindex="-1" role="dialog" aria-labelledby="#exampleModallabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                       <div class="modal-content">
                          <div class="modal-header">
                             <h5 class="modal-title" id="#exampleModalLabel"></h5>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                             </button>
                          </div>
                          <div class="modal-body">
                             <p>prueva inventada para el menu</p>
                          </div>
                          <div class="modal-footer">
                             <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
                             <!--<button type="button" class="btn btn-primary">save changes</button>-->
                          </div>
                       </div>
                    </div>
                </div>
              <!--fin modal-->
        </div>
      </div>
</section>
  <!--fin del card-->

  <!--modal-->
              <div class="modal face" id="myModaA" tabindex="-1" role="dialog" aria-labelledby="#exampleModallabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                       <div class="modal-content">
                          <div class="modal-header">
                             <h5 class="modal-title" id="#exampleModalLabel"></h5>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                             </button>
                          </div>
                          <div class="modal-body">
                             <p>prueva 2 inventada para el menu</p>
                          </div>
                          <div class="modal-footer">
                             <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
                             <!--<button type="button" class="btn btn-primary">save changes</button>-->
                          </div>
                       </div>
                    </div>
                </div>
              <!--fin modal-->

  <footer class="contaier-fluid mt-3 h-25 pb-5 bg-success">
        <p>Derechos Recerbados</p>
  </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/validarUsuario.js"></script>
  </body>
</html>