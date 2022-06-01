<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ministerio de agricultira y tierra">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Vista/css/toastr.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    
   <!--estilo de css -->
    </style> 
 <title>Ministerio de agricultura y tierra</title>
</head> 
<body>

    <header class="container mb-5">
      
        <header class="row justify-content-between bg-success fixed-top blanco">
              
              <p class="col-sm-12 col-md-6 col-lg-6"><img class="imgHeade mt-3" src="img/logoministerio.png"></p>
              <p class="d-none col-sm-12 d-md-block col-md-3 col-lg-6"><img class="imgHeader mt-3 mr-1 float-right " src="img/logo.png"></p>
          
        </header>

    </header>

<?php 

  require_once 'vista-menuProductor.php';

 ?>

 <?php 

  foreach ($haciendas as $h) {
      
       if ($h['nombre_h']=="" && $h['direccion_h']=="" && $h['telefono_h']=="" && $h['hectaria']=="" && $h['nombre_parroquia']=="") {

            
          } else{
            
          
  ?>

<form action="?url=ControladorActualizarhacienda" class="container" method="POST" id="formPro" name="" enctype="application/x-wwww-urlencoded">

  <h2 class="display-4 text-center">Modificar Hacienda</h2>
 
    <div class="row mb-3">



      <label class="col-lg-6 text-center"><p class="btn-danger pt-2 pb-2">Nombre de la hacienda</p>
            <input type="text"  name="nombreh" value="<?php echo $h['nombre_h'] ?>" id="nombreh" placeholder="nombre de hacienda" class="form-control">
      </label> 

      <label class="col-lg-6 text-center"><p class="btn-danger pt-2 pb-2">Direccion de la hacienda</p>
            <input type="text"  name="direccionh" value="<?php echo $h['direccion_h'] ?>" id="direc" placeholder="Direccion de hacienda" class="form-control">
      </label>


            <input type="hidden"  name="idhac"  value="<?php echo $h["id_hacienda"]?>">

      <label class="col-lg-6 text-center"><p class="btn-danger pt-2 pb-2">Telefono</p>
             <input type="text"  name="telefonoh" value="<?php echo $h['telefono_h'] ?>" id="tele" placeholder="telefono" class="form-control">
      </label>  
          
      <label class="col-lg-6 text-center"><p class="btn-danger pt-2 pb-2">Hectaria de la hacienda</p>
             <input type="number"  name="hectariah" value="<?php echo $h['hectaria'] ?>" id="hectaria" placeholder="hectaria" class="form-control">
      </label> 

      <label class="col-lg-6"><p class="btn-danger text-center pt-2 pb-2">Municipio</p>
          <select id="municipio" name="municipio" class="form-control">
            <!--<option value="0">--------selecciona municipio</option>
            <option value="1">irribaren</option>
            <option value="2">moran</option>
            <option value="3">jimenez</option>-->
          </select>
      </label>


      
      <label class="col-lg-6"><p class="btn-danger text-center pt-2 pb-2">parroquia</p>
            <select id="parroquia" name="parroquia" class="form-control"> 
            <!--<option value="0">--------selecciona municipio</option>
            <option value="1">irribaren</option>
            <option value="2">moran</option>
            <option value="3">jimenez</option>-->
            </select> 
      </label> 
    </div>

     <div class="row justify-content-center mt-2">
          <button type="button" id="enviar" class="btn btn-danger mb-3 ml-1" name="">Modifica</button>
          <button type="button" id="limpiar" class="btn btn-danger mb-3 ml-1">Limpiar todo</button>
          <!--<a href="?url=vista-haciendas-productor"><button class="btn btn-danger mb-3 ml-1">Atrás</button></a>-->
      </div>

</form>

<?php 

        }
      }

 ?>

  <footer class="contaier-fluid mt-3 h-25 pb-5 bg-success">
        <p>Derechos Recerbados</p>
  </footer>

     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script type="text/javascript" src="Vista/js/jquery-3.4.1.min.js"></script> 
    <script type="text/javascript" src="Vista/js/index.js"></script>
    <script src="Vista/js/popper.min.js"></script>
    <script src="Vista/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="Vista/js/validarRegistrodeHacienda.js"></script>
     <script type="text/javascript" src="Vista/js/toastr.min.js"></script>
  </body>



</html>

