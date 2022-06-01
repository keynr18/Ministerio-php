<?php 
  //require_once 'cintillo.php';
  require_once 'Vista/vista-menuProductor.php';

 ?>

<div class="container mt-3 ">

  <h2 class="display-4 text-center">Datos personales</h2>

</div>

<?php 

foreach ($res as $r) {
  
if ($r["nombre_p"]=="" && $r["apellido_p"]=="" && $r["cedula_p"]=="" && $r["fecha_p"]=="" && $r["correo_p"]=="" && $r["telefono"]=="" && $r["usuario_p"]=="" && $r["clave_p"]=="" ) {
  # code...
}else{

?>
<div class="container-fluid row justify-content-center">
      
 <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
  <div class="card-header"><p>Cedula:<?php echo " ".$r["cedula_p"] ?></p></div>
  <div class="card-body">
    <h5 class="card-title">Nombre y Apellido: <?php echo " ".$r['nombre_p']." ".$r['apellido_p']; ?></h5>

    <p class="card-text">Fecha de nacimineto: <?php echo " ".$r['fecha_p']?> </p>

    <p class="card-text">Telefono: <?php echo " ".$r['telefono']?> </p>

    <p class="card-text">Email: <?php echo " ".$r['correo_p']?> </p>

    <p class="card-text">Usuario: <?php echo " ".$r['usuario_p']?> </p>

    <p class="card-text">Contraseña: <?php echo " ".$r['clave_p']?> </p>

    <div class="container text-center" >
        <a href='?url=vista-modificar-productor&idpro=<?php  echo ' '.$r['id_productor']?>' ><img src="Vista/img/editarB.png" class="icono2 " title="editar datos personales"></a>
    </div>
  </div>
</div>

</div>

<?php  

      }//cierre del else

    }//cierre del foreach

?>



  <footer class="contaier-fluid mt-3 h-25 pb-5 bg-success">
        <p>Derechos Recerbados</p>
  </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="Vista/js/jquery-3.3.1.slim.min.js"></script>
    <script src="Vista/js/popper.min.js"></script>
    <script src="Vista/js/bootstrap.min.js"></script>
  </body>
</html>