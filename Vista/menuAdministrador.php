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

    <header class="container mb-5">
      
        <header class="row justify-content-between bg-success fixed-top blanco mb-5">
              
              <p class="col-sm-12 col-md-6 col-lg-6"><img class="imgHeade mt-3" src="img/logoministerio.png"></p>
              <p class="d-none col-sm-12 d-md-block col-md-3 col-lg-6"><img class="imgHeader mt-3 mr-1 float-right " src="img/logo.png"></p>
          
        </header>

    </header>
    <!-- fin del sintillo de la pagina-->


 <div class="mb-5"><div class="row mb-5"></div></div>
<!--final del menu de navegacion-->

<div class="container border mt-5">
    <div class="col-lg-12"><a href="index.php" class="btn-danger mt-5 float-right">salir</a></div>
    <div class="row mt-3">
      <?php session_start(); ?>
        <div class="col">
             <p>Bienvenido admistrador:<?php echo " ".$_SESSION['nombre']." ".$_SESSION['apellido'];; ?></p>
             <p>Cedula:<?php echo " ".$_SESSION['cedula'] ?></p>

             <a href="eventos.php" class="btn btn-danger mb-3">Crear evento</a>
             <a href="respuestap.php" class="btn btn-danger mb-3">Consultar productor</a>
             <a href="consultarpduc.php" class="btn btn-danger mb-3">Consultar producción</a>
             <!--<a href="#" type="" class="btn btn-danger mb-3">Crear produccion</a>-->
             <?php   ?>
        </div>
    </div>

</div>