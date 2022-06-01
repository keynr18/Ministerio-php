<?php 

  require_once 'vista-menuProductor.php';

 ?>


  <form class="container" method="POST" class="" id="formularioX" action="?url=controladorProduccion" name="" enctype="application/x-wwww-urlencoded">

     <h2 class="display-4 text-center">Registra tu producción</h2>
      
      <div class="row mb-3">
          <label class="col-lg-6"><p class="btn-danger text-center pt-2 pb-2">Grupos agricolas</p>
            <select class="col-lg-12 mb-2 form-control" id="grupo">
                
            </select>
          </label>

          <label class="col-lg-6"><p class="btn-danger text-center pt-2 pb-2">Cultivos</p>
            <select class="col-lg-12 mb-2 form-control" name="cultivo" id="cultivo">
               
            </select>
          </label>
           
           <label class="col text-center"><p class="btn-danger pt-2 pb-2">Fecha de siembra</p>
             <input type="date"  name="fechaS" id="fechaS" placeholder="dia/mes/año" class="form-control">
           </label> 
          
           <label class="col text-center"><p class="btn-danger pt-2 pb-2">Fecha de cosecha</p>
             <input type="date"  name="fechaC" id="fechaC" placeholder="dia/mes/año" class="form-control">
           </label>

           <label class="col text-center"><p class="btn-danger pt-2 pb-2">Hacienda</p>
             <select class="form-control" name="hacienda" id="hacienda">
 
              <?php 

                  require_once 'Controlador/controladorimprehacienda.php';

                  echo "<option value='0'>elige una hacienda</option>";
                  foreach ($haciendas as $h) {
                    
                    echo "<option value='{$h['id_hacienda']}'>{$h['nombre_h']} </option>";
                  }

               ?>
               
             </select>
           </label> 

      </div>

      <div class="row justify-content-center mt-2">
          <button type="submit" id="enviar" class="btn btn-danger mb-3 ml-1">Registrar</button>
          <button type="reset" id="limpiar" class="btn btn-danger mb-3 ml-1">Limpiar</button>
      </div>

  </form>




  <footer class="contaier-fluid mt-3 h-25 pb-5 bg-success">
        <p>Derechos Recerbados</p>
  </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="Vista/js/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="Vista/js/index2.js"></script>
    <script src="Vista/js/popper.min.js"></script>
    <script src="Vista/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="Vista/js/toastr.min.js"></script>
    <scripts type="text/javascript" src="Vista/js/validarrProduccion.js"></script>
  </body>
</html>