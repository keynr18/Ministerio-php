<?php 

  require_once 'vista-menusuperadministrador.php';
  

  require_once 'Controlador/controladorconsultareventos.php';
  
 ?> 


       


<?php 

  foreach ($respuesta as $re) {
  
  if ($re["titulo_e"]=="" && $re["direccion_e"]==""&& $re["fecha_a"]==""&& $re["fecha_c"]==""&& $re["imagen"]==""&& $re["contenido_e"]=="") {
    
    }
    else{
  
  
echo "


<form class='container' method='post' class='' id='formeventos' action='?url=controladoractualizareventos' name='' enctype='multipart/form-data'> 

    <h2 class='display-4 text-center'>Actualiza tus eventos</h2>

      <div class='row mt-3'>

                  
      <input type='hidden'  name='ide'  value='{$_GET['ide']}'> 


           <label class='col-lg-6 text-center'><p class='btn-danger pt-2 pb-2'>Titulo del evento</p>
             <input type='text'  name='titulo' id='titu' placeholder='Titulo' class='form-control' value='{$re["titulo_e"]}'>
          
           </label> 
          
          <label class='col-lg-6 text-center'><p class='btn-danger pt-2 pb-2'>Dirección del evento</p>
             <input type='text'  name='direc' id='lugar' placeholder='lugar' class='form-control' value='{$re['direccion_e']} '>
 
           </label>


             <label class='col-lg-6 text-center'><p class='btn-danger pt-2 pb-2'>Fecha de culminación</p>
             <input type='date'  name='fechaa' id='apertura'  class='form-control'
             value='{$re["fecha_a"]}'>
          
          
           </label>

           <label class='col-lg-6 text-center'><p class='btn-danger pt-2 pb-2'>Fecha de culminación</p>
             <input type='date'  name='fechac' id='culmi'  class='form-control'
             value='{$re["fecha_c"]}'>
          
           </label>

        <label class='col-lg-6 text-center'><p class='btn-danger pt-2 pb-2'>Hora del evento</p>
           
             <input type='time'  name='hora' id='hora' placeholder='hora' class='form-control'
             value='{$re["hora"]}'>
           </label>

        <label class='col-lg-6 text-center'><p class='btn-danger pt-2 pb-2'>Imagen para el evento</p>
           
             <input type='file'  name='img' id='img' class='form-control'
            value='{$re["imagen"]}'>

           </label> 

        <label class='col-lg-12 text-center'><p class='btn-danger pt-2 pb-2'>Información extra del evento</p>
            
             <textarea type='text'  name='contenido' id='comentario' placeholder='descripcion' class='form-control' value='{$re["contenido_e"]} '></textarea >

           </label>

  </div>
           


";

}
}
?> 
                <div class="row justify-content-center mt-2">
          <button type="submit" id="enviarevento" class="btn btn-danger mb-3 ml-1" name="btn" value="Modificar">Actualizar</button>
          <button type="reset" id="limpiarevento" class="btn btn-danger mb-3 ml-1">Limpiar</button>
          <a href="?url=vista-administrador"><button class="btn btn-danger mb-3 ml-1">Atrás</button></a>
      </div>


 
  </form>


  <footer class="contaier-fluid mt-3 h-25 pb-5 bg-success">
        <p>Derechos Recerbados</p>
  </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="Vista/js/jquery-3.3.1.slim.min.js"></script>
    <script src="Vista/js/popper.min.js"></script>
    <script src="Vista/js/bootstrap.min.js"></script>
    <scripts src="Vista/js/eventos.js"></script>
  </body>
</html>

