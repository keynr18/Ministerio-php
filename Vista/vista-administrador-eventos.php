<?php 

  require_once 'vista-menusuperadministrador.php';
  
 ?>

<!--final del menu de navegacion-->
 
<form class="container" method="post" id="formeventos" action="?url=controladorEventos" name="" enctype="multipart/form-data"> 

    <h2 class="display-4 text-center">Registra tus eventos</h2>

      <div class="row mt-3">
           <label class="col-lg-6 text-center"><p class="btn-danger pt-2 pb-2">Titulo del evento</p>
             <input type="text"  name="titulo" id="titu" placeholder="Titulo" class="form-control">
           </label> 
           
           <label class="col-lg-6 text-center"><p class="btn-danger pt-2 pb-2">Dirección del evento</p>
             <input type="text"  name="direc" id="lugar" placeholder="lugar" class="form-control">
           </label> 
          
           <label class="col-lg-6 text-center"><p class="btn-danger pt-2 pb-2">Fecha de apertura</p>
             <input type="date"  name="fechaa" id="apertura" placeholder="Apertura" class="form-control">
           </label>

           <label class="col-lg-6 text-center"><p class="btn-danger pt-2 pb-2">Fecha de culminación</p>
             <input type="date"  name="fechac" id="culmi" placeholder="culminación" class="form-control">
           </label>

           <label class="col-lg-6 text-center"><p class="btn-danger pt-2 pb-2">Hora del evento</p>
             <input type="time"  name="hora" id="hora" placeholder="hora" class="form-control">
           </label>

           <label class="col-lg-6 text-center"><p class="btn-danger pt-2 pb-2">Imagen para el evento</p>
             <input type="file"  name="img" id="img" placeholder="Apertura" class="form-control">
           </label> 

           <label class="col-lg-12 text-center"><p class="btn-danger pt-2 pb-2">Información extra del evento</p>
             <textarea type="text"  name="contenido" id="comentario" placeholder="" class="form-control"></textarea>
           </label>



      </div>

      <div class="row justify-content-center mt-2">
          <button type="submit" id="enviarevento" class="btn btn-danger mb-3 ml-1">Crear</button>
          <button type="reset" id="limpiarevento" class="btn btn-danger mb-3 ml-1">Limpiar</button>
      </div>

  </form>




  <footer class="contaier-fluid mt-3 h-25 pb-5 bg-success">
        <p>Derechos Recerbados</p>
  </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script type="text/javascript" src="Vista/js/jquery-3.4.1.min.js"></script>
    <script src="Vista/js/popper.min.js"></script>
    <script src="Vista/js/bootstrap.min.js"></script>
    <scripts type="text/javascript" src="Vista/js/eventos.js"></script>
  </body>
</html>