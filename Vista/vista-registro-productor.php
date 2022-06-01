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


<!-- inicio del formulario de registro-->

<article class="container mt-5 pt-5">
      <p class="display-4 text-center mt-">Registrate como productor</p>
</article>

<div class="container mt-3">
 
      <div class="row justify-content-center ">
        <div class="col-sm-11 col-lg-8 borde bg-success">

          <?php 

          if (isset($mensaje) && $mensaje != "") {
            
            echo "<p class='text-center display-5'>$mensaje</p>";
          }
          else{

          }

         ?>

          <form for="" action="?url=controladorRegistrarProductor" method="post" enctype="application/x-wwww-urlencoded" onsubmit="" name="form" id="formulario" class="formulario needs-validation">
            <fieldset class="text-center display-5"></fieldset>
            
            <p>Datos personales</p>
            <hr>
              
              <div class="row">
                <div class="form-group col-lg-6">
                  <label for="validationDefault01">Primer nombre:</label>
                  <input type="text" name="nombre" placeholder="Nombre" id="nombre" class="form-control">
                </div>

                <div class="form-group col-lg-6">
                  <label>Primer apellido:</label>
                  <input type="text" name="apellido"  placeholder="Apellido" id="apellido" class="form-control">
                </div>
              </div>

              <div class="row">

                <div class="form-group col-lg-6">
                  <label>Cedula de identidad:</label>
                  <input type="text" name="cedula" placeholder="Cedula" id="cedula" class="form-control">
                </div>

                <div class="form-group col-lg-6">
                  <label>Fecha de nacimiento:</label>
                  <input type="date" name="fecha" placeholder="Dia/mes/año" id="fecha" class="form-control">
                </div>
              </div>

              <p>Datos de contacto</p>
              <hr>
            
              <div class="row">

                <div class="form-group col-lg-6">
                  
                    <label>telefono:</label>
                      
                          <input type="text" name="tele" placeholder="telefono"  id="telefono" class="form-control">                    
            
                </div>
        
                <div class="form-group col-lg-6">
                  <label>Email:</label>
                  <input type="text" name="correo" placeholder="Email" id="email" class="form-control">
                </div>
              </div>


             <p>Datos para crear el usuario</p>
             <hr>
              <div class="row">

                <div class="form-group col-lg-6">
                  <label>Nombre de usuario: </label>
                    <input type="text" name="usuario" placeholder="Usuario" id="usuario" class="form-control">
                </div>

                <div class="form-group col-lg-6">
                  <label>Contraseña: </label>
                    <input type="password" name="clave1" placeholder="Contraseña" id="clave1" class="form-control">
                </div>

                <div class="form-group col-lg-12">
                  <label>Rectifica Contraseña:</label>
                    <input type="password" name="clave2" placeholder="Rectifica Contraseña" id="clave2" class="form-control">
                </div>
              </div>
             

              <div class="d-flex justify-content-center">
                 <div class="form-group ">
                  <button type="button" class="btn btn-danger " id="enviar" name="enviar">Enviar</button> 
                 </div>

                 <div class="form-group">
                  <button type="button" class="btn btn-danger ml-2" id="limpiar" value="limpiar">Limpiar</button>
                 </div>

                 <div class="form-group">
                  <a href="?url=vista-iniciosesion"><button type="button" class="btn btn-danger ml-2">Atrás</button></a>
                 </div>
              </div>
          </form>
        </div>
      </div>
</div>


<!--fin del formulario de registro-->
  <footer class="contaier-fluid mt-3 h-25 pb-5 bg-success">
        <p>Derechos Recerbados</p>


  </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="Vista/js/jquery-3.4.1.min.js"></script>
    <script src="Vista/js/popper.min.js"></script>
    <script src="Vista/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="Vista/js/validacionesDelRegistro.js"></script>
    <script type="text/javascript" src="Vista/js/toastr.min.js"></script>
  </body>
</html>