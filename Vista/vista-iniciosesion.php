<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ministerio de agricultira y tierra">

    <link rel="stylesheet" href="Vista/css/toastr.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Vista/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Vista/css/styles.css">
    
   <!--estilo de css -->
    </style> 
 <title>Ministerio de agricultura y tierra</title> 
</head> 
<body>

    <header class="container mb-5">
      
        <header class="row justify-content-between bg-success fixed-top blanco mb-5">
              
              <p class="col-sm-12 col-md-6 col-lg-6"><img class="imgHeade mt-3" src="Vista/img/logoministerio.png"></p>
              <p class="d-none col-sm-12 d-md-block col-md-3 col-lg-6"><img class="imgHeader mt-3 mr-1 float-right " src="Vista/img/logo.png"></p>
          
        </header>

    </header>
    <!-- fin del sintillo de la pagina-->
  <!--card-->


<!-- formulario de session para los productores y administradores--> 

<article class="container mt-5 pt-5">
      <p class="display-4 text-center mt-">Iniciar sesión</p>
</article>

<div class="container mt- mb-5">

      <div class="row justify-content-center mt-">
        <div class="col-6 borde bg-success mt-">

        <?php 

          if (isset($mensaje) && $mensaje != "") {
            
            echo "<p class='text-center display-5'>$mensaje</p>";
          }
          else{

          }

         ?>

          <form for="" action="?url=controladorSesion" id="formulario1" method="post" enctype="application/x-wwww-urlencoded">
            <fieldset class="text-center mb-2"></fieldset>

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
                    <input type="radio" name="tipouser[]" id="tipousera" value="administrador" >
                 </label>

                 <label>Productor
                    <input type="radio" name="tipouser[]" id="tipouserp" value="productor" >
                 </label>

              </div>

              <div class="d-flex justify-content-center">
                 <div class="form-group ">
                  <button  type="button" id="entrarUser" class="btn btn-danger">Iniciar</button>
                  <button  type="button" id="limpiarUser" class="btn btn-danger">Limpiar</button>
                  <a href="?url=principal"><button  type="button" class="btn btn-danger">Atras</button></a>
                 </div>
              </div>

              <?php 
               if (isset($_GET['m'])) {
                 
                   if($_GET['m'] == $_GET['m']){

                    echo "<p class='text-center bg-danger' >Usuario o contraseña incorectos</p>";
                  } 

               }else{

                 

               }
               
               ?>

              <div class="d-flex justify-content-center">
               <p class=""><a href="?url=vista-registro-productor" class="linkr">Registrate como productor.</a></p>
              </div>

              <?php 


               ?>
          </form>
        </div>
      </div>
</div>

  <footer class="contaier-fluid mt-3 h-25 pb-5 bg-success">
        <p>Derechos Recerbados</p>
  </footer>

 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="Vista/js/jquery-3.4.1.min.js"></script> 
    <script src="Vista/js/popper.min.js"></script>
    <script src="Vista/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="Vista/js/validarUsuario.js"></script>
     <script type="text/javascript" src="Vista/js/toastr.min.js"></script>
  </body>
</html>