p<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ministerio de agricultira y tierra">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
   <!--estilo de css -->
    </style>  
 <title>Ministerio de agricultura y tierra</title>
</head> 
<body>

    <header class="container mb-5 "> 
      
        <header class="row justify-content-between bg-success fixed-top">
              
              <p class="col-sm-12 col-md-6 col-lg-6"><img class="imgHeade mt-3" src="img/logoministerio.png"></p>
              <p class="d-none col-sm-12 d-md-block col-md-3 col-lg-6"><img class="imgHeader mt-3 mr-1 float-right " src="img/logo.png"></p>
          
        </header>

    </header>
    <!-- fin del sintillo de la pagina-->

<nav class="navbar justify-content-center mt-5">
  <ul class="nav nav-pills row mt-5">

      <li class="nav-item">
      <a class="col-sm-12 btn btn-danger" href="index.php">Inicio</a>
      </li>

      <li class="nav-item">
      <a class="btn btn-danger" href="ministerio.php">Ministerio</a>
      </li>

      <li class="nav-item">
      <a class="btn btn-danger" href="registro.php">Registrate</a>
      </li>

      <li class="nav-item dropdown">
          <a class=" dropdown-toggle btn btn-danger" data-toggle="dropdown"href="#">Consultar</a>
      <div class="dropdown-menu">
          <a class="dropdown-item btn-danger" href="consultarProductor.php">Consultar productor</a>
          <a class="dropdown-item" href="consultarProduccion.php">Consultar producción</a>
      </div>
      </li>
  </ul>
</nav>
<!--final del menu de navegacion-->

<div class="container mt-3">

  <h2 class="display-4 text-center">Respuesta de la consulta productor</h2>
  
 <table class="table table-dark table-hover ">
      <tr class="btn-success">
        <td class="text-center table-hover">NOMBRE</td>
        <td class="text-center table-hover">APELLIDO</td>
        <td class="text-center table-hover">CEDULA</td>
        <td class="text-center table-hover">FECHA</td>
        <td class="text-center table-hover">CORREO</td>
        <td class="text-center table-hover">TELEFONO</td>
      </tr>
      <?php
            require_once '../controlador/controladorConsultaProductor.php';

          foreach ($resultado as $resul) {

            echo "<tr>
              <td class='text-center table-hover'> {$resul['nombre_p']} </td>
              <td class='text-center table-hover'>{$resul['apellido_p']}</td>
              <td class='text-center table-hover'>{$resul['cedula_p']}</td>
              <td class='text-center table-hover'>{$resul['fecha_p']}</td>
              <td class='text-center table-hover'>{$resul['correo_p']}</td>
              <td class='text-center table-hover'>{$resul['telefono']}</td>
            </tr>";

          }

      ?>

 </table>
</div>




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