<?php 

  require_once 'header.php';
  
 ?>


<div class="container border mt-5">
    <div class="col-lg-12"><a href="index.php" class="btn-danger mt-5 float-right">salir</a></div>
    <div class="row ">
      
        <div class="col">
             <p>Bienvenido administrador: ELY COLMENAREZ</p>
             <p>Cedula:</p>

             <a href="eventos.php" class="btn btn-danger mb-3">Crear evento</a>
             <a href="consultarP.php" class="btn btn-danger mb-3">Consultar productor</a>
             <a href="consultarpduc.php" class="btn btn-danger mb-3">Consultar producción</a>
             <!--<a href="#" type="" class="btn btn-danger mb-3">Crear produccion</a>-->
        </div>
    </div>

</div>



  <form class="container" method="get" class="" id="formPro" action="" name="" enctype="application/x-wwww-urlencoded">

     <h2 class="display-4 text-center">consultar productor</h2>

      </div>

      <div class="row">
          
           <label class="col-lg-6 text-center "><p class="btn-danger pt-2 pb-2">Municipio</p>
             <select class="form-control" id="exampleFormControlSelect2">
                      <option>Iribaren</option>
                      <option>Morán</option>
                      <option>Jiménez</option>
                      <option>Palavecino</option>
                      <option>Crespo</option>
                      <option>Andrés Eloy Blanco</option>
                      <option>Urdaneta</option>
                      <option>Torres</option>
                      <option>Simón Planas</option>
                    </select>
             <!--<input type="text"  name="DierecciónCultivo" id="DierecciónCultivo" placeholder="Municipio" class="form-control">-->
           </label>

           <label class="col-lg-6 text-center "><p class="btn-danger pt-2 pb-2">Parroquia</p>
            <select class="form-control" id="exampleFormControlSelect2">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                      <option>9</option>
                    </select>
             <!--<input type="text"  name="DierecciónCultivo" id="DierecciónCultivo" placeholder="Parroquia" class="form-control">-->
           </label> 

      </div>

      <div class="row justify-content-center mt-2">
          <button type="" id="" class="btn btn-danger mb-3 ml-1"><a href="respuestap.php">Consultar</a></button>
          <button type="button" id="" class="btn btn-danger mb-3 ml-1">Limpiar todo</button>
          <button class="btn btn-danger mb-3 ml-1"><a href="administracion.php">Atrás</a></button>
      </div>

  </form>




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