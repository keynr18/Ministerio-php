<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ministerio de agricultira y tierra">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Vista/css/toastr.min.css">
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


 <div class="mb-5"><div class="row mb-5"></div></div>
<!--final del menu de navegacion-->

<div class="container border mt-5">
    <div class="col-lg-12"><a href="?url=controlador-cerrar-session" class="mt-5 float-right"><img src="Vista/img/exit.svg" class="iconos pb-4" title="Cerrar sesion"></a></div>
    <div class="row mt-3"> 
      
        <div class="col">
             <p>Bienvenido Productor:<?php echo " ".$_SESSION['nombre']." ".$_SESSION['apellido']; ?></p>

             <a href="?url=vista-productor" class="btn btn-danger mb-3">Producciones</a>
             <a href="?url=vista-haciendas-productor" class="btn btn-danger mb-3">haciendas</a>
             <a href="?url=vista-registrarhacienda-productor" class="btn btn-danger mb-3">Registrar hacienda</a>
             <a href="?url=vista-registrarProduccion-productor" class="btn btn-danger mb-3">Registrar producción</a>
             <a href="?url=vista-datos-personales&idpro=<?php  echo ' '.$_SESSION['id']?>" class="btn btn-danger mb-3">Ver mis datos</a>
             
        </div>
    </div>

</div>