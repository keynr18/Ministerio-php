<?php 

  require_once 'vista-menusuperadministrador.php'; 
  
 ?>

<!-- inicio del formulario de registro administrador-->

<article class="container mt-3">
      <p class="display-4 text-center mt-">Registrar administrador</p>
</article>

<div class="container mt-3">
 
      <div class="row justify-content-center ">
        <div class="col-sm-11 col-lg-8 borde bg-success">

          <form for="" action="?url=controlador-Registrar-administrador" method="post" enctype="application/x-wwww-urlencoded" onsubmit="" name="form" id="formulario" class="formulario">
            <fieldset class="text-center display-5"></fieldset>
            
            <p>Datos personales</p>
            <hr>
              
              <div class="row">
                <div class="form-group col-lg-6">
                  <label>Primer nombre:</label>
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
                  
                          <label>Telefono</label> 
                          <input type="text" name="tele" placeholder="telefono"  id="telefono" class="form-control">
        
                </div>
        
                <div class="form-group col-lg-6">
                  <label>Correo:</label>
                  <input type="text" name="correo" placeholder="Correo" id="email" class="form-control">
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
    <script type="text/javascript" src="Vista/js/validacionesRegistrodeAdministradores.js"></script>
    <script type="text/javascript" src="Vista/js/toastr.min.js"></script>
  </body>
</html>