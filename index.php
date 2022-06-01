<?php
  
  
  if (!empty($_GET['url'])){
        $direccion=$_GET['url'];
      } 
  
  else{
        $direccion="principal";
      }

  if (is_file("Controlador/".$direccion.".php")){
        include_once("Controlador/".$direccion.".php");
      }

  else{
    
    echo "pagina no existe";
    echo $direccion;
       //include_once("Controlador/controlador-error.php");
     }

?>