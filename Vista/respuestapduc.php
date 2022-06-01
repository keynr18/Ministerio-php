<!doctype html>
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

    <header class="container mb-5  "> 
      
        <header class="row justify-content-between bg-success fixed-top">
              
              <p class="col-sm-12 col-md-6 col-lg-6"><img class="imgHeade mt-3" src="img/logoministerio.png"></p>
              <p class="d-none col-sm-12 d-md-block col-md-3 col-lg-6"><img class="imgHeader mt-3 mr-1 float-right " src="img/logo.png"></p>
          
        </header>

    </header>

    <nav class="navbar justify-content-center mt-5">
  <!--<ul class="nav nav-pills row mt-5">

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
  </ul>-->
  <!--<div class="col-lg-12"><a href="index.php" class="btn-danger mt-5 float-right">salir</a></div>-->
</nav>

<div class="container border mt-5">
    <div class="col-lg-12"><a href="index.php" class="btn-danger mt-5 float-right">salir</a></div>
    <div class="row ">
      
        <div class="col">
             <p>Bienvenido administrador: ELY COLMENAREZ</p>
             <p>Cedula:</p>

             <a href="eventos.php" class="btn btn-danger mb-3">Crear evento</a>
             <a href="consultarp.php" class="btn btn-danger mb-3">Consultar productor</a>
             <a href="consultarpduc.php" class="btn btn-danger mb-3">Consultar producción</a>
             <!--<a href="#" type="" class="btn btn-danger mb-3">Crear produccion</a>-->
        </div>
    </div>

</div>


<div class="container mt-3 ">

  <h2 class="display-4 text-center">Respuesta de la consulta producción</h2>
  
 <table class="table table-dark table-hover">
      <tr class="btn-success">
        <td class="text-center table-hover">GRUPO AGRICOLAS</td>
        <td class="text-center table-hover">CULTIVO</td>
        <td class="text-center table-hover">HECTARIAS</td>
        <td class="text-center table-hover">HACIENDA</td>
        <td class="text-center table-hover">FECHA DE SIEMBRA</td>
        <td class="text-center table-hover">FECHA DE COSECHA</td>
        <td colspan="2" class="text-center table-hover">OPCIONES</td>
      </tr>

      <tr>
        <td class="text-center table-hover">cereales</td>
        <td class="text-center table-hover">arroz</td>
        <td class="text-center table-hover">100 metros</td>
        <td class="text-center table-hover">Santa teresa</td>
        <td class="text-center table-hover">12/08/2019</td>
        <td class="text-center table-hover">12/08/2019</td>
        <td class="text-center table-hover">modificar</td>
        <td class="text-center table-hover">Eliminar</td>
      </tr>

       <tr>
        <td class="text-center table-hover">horticultura</td>
        <td class="text-center table-hover">cebolla</td>
        <td class="text-center table-hover">300 metros</td>
        <td class="text-center table-hover">Santa teresa</td>
        <td class="text-center table-hover">26/09/2019</td>
        <td class="text-center table-hover">12/08/2019</td>
        <td class="text-center table-hover">modificar</td>
        <td class="text-center table-hover">Eliminar</td>
      </tr>
 </table>

 <div class="row justify-content-center mt-2">
          <button type="button" id="" class="btn btn-danger mb-3 ml-1">Imprimir</button>
          <button class="btn btn-danger mb-3 ml-1"><a href="administracion.php">Atrás</a></button>
      </div>

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