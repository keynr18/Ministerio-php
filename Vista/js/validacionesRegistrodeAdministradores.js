
function validar(){

	var verificar = true;

	var expRegNombre = /^[a-zA-ZÑñÁáÉéÍíÓóÚú\s]+$/;
	var expRegEmail = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
    var expRegCedula = new RegExp("[0-9]{7,}");
    var expRegTele = new RegExp("[0-9]{11,}");
    var usuarioExp = new RegExp("[a-zA-ZÑñÁáÉéÍíÓóÚú\s]");
    var contraExp = new RegExp("[0-9a-zA-ZÑñÁáÉéÍíÓóÚú\s]");

	var formulario = document.getElementById("formulario");
	var nombre = document.getElementById("nombre");
	var apellido = document.getElementById("apellido");
	var fecha = document.getElementById("fecha");
	var cedula = document.getElementById("cedula");
    var telefono = document.getElementById("telefono");
    var email = document.getElementById("email");

    var usuario = document.getElementById("usuario");
    var clave1 = document.getElementById("clave1");
    var clave2 = document.getElementById("clave2");
    //var usuario1 = document.getElementById("usuario1");


    // validacion del nombre
    if (nombre.value=="") {

        
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]('el campo nombre es necesario');
       // alert("el campo nombre es necesario");
        nombre.focus();
        verificar = false;
    }
    else if (nombre.value.length < 3){

        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
         toastr["error"]('Nombre muy corto');
        //alert("Nombre muy corto");
        nombre.focus();
        verificar = false;
    }
    else if (nombre.value.length > 50){

        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]('Nombre muy largo');
        //alert("Nombre muy largo");
        nombre.focus();
        verificar = false;
    }
    else if (!expRegNombre.exec(nombre.value)) {

        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]('Este campo nombre acepta letras');
        //alert("Este campo nombre acepta letras");
        nombre.focus();
        verificar = false;
    }

     // validacion apellido
    else if (apellido.value=="") {

        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]('Este campo apellido es necesario');
        //alert("el campo apellido es necesario");
        apellido.focus();
        verificar = false;
    }
    else if (apellido.value.length < 3){

        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]('Apellido muy corto');
        //alert("Apellido muy corto");
        apellido.focus();
        verificar = false;
    }
    else if (apellido.value.length > 50){

        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]('Apellido muy largo');
        //alert("Apellido muy largo");
        apellido.focus();
        verificar = false;
    }
     else if (!expRegNombre.exec(apellido.value)) {

        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]('Este campo apellido acepta letras');
        //alert("Este campo apellido acepta letras");
        apellido.focus();
        verificar = false;
    }

     // validacion cedula
    else if (cedula.value=="") {

         toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]('el campo cedula es necesario');
        //alert("el campo cedula es necesario");
        cedula.focus();
        verificar = false;
    }
    else if (isNaN(cedula.value)) {

         toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("El campo cedula acepta numeros");
        //alert("El campo cedula acepta numeros");
        cedula.focus();
        verificar = false;
    }
     else if (cedula.value.length > 8){

        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("Cedula muy larga");
       // alert("Cedula muy larga");
        cedula.focus();
        verificar = false;
    }
     else if (!expRegCedula.exec(cedula.value)) {

        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("La cedula es invalida");
      //  alert("La cedula es invalida");
        cedula.focus();
        verificar = false;

    }


    // validacion fecha
    else if (fecha.value=="") {

        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("el campo fecha es necesario");
    //    alert("el campo fecha es necesario");
        fecha.focus();
        verificar = false;
    }
    


    // validacion telefono
    else if (telefono.value=="") {

        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("el campo telefono es necesario");
       // alert("el campo telefono es necesario");
        telefono.focus();
        verificar = false;
    }
     else if (isNaN(telefono.value)) {

         toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("El campo telefono acepta numeros");
        //alert("El campo telefono acepta numeros");
        cedula.focus();
        verificar = false;
    }
     else if (telefono.value.length > 11){

         toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("telefono muy largo");
      //  alert("telefono muy largo");
        telefono.focus();
        verificar = false;
    }
     else if (!expRegTele.exec(telefono.value)) {

         toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("El telefono es invalido");
   //     alert("El telefono es invalido");
        telefono.focus();
        verificar = false;

    }



    // validacion email
    else if (email.value=="") {

         toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("el campo email es necesario");
    //        alert("el campo email es necesario");
        email.focus();
        verificar = false;
    }
    else if (!expRegEmail.exec(email.value)) {

         toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("El correo no es valido");
    //    alert("El correo no es valido");
        email.focus();
        verificar = false;

    }


    // validacion usuario
    else if (usuario.value=="") {

         toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("el campo usuario es necesario");
   //     alert("el campo usuario es necesario");
        usuario.focus();
        verificar = false;
    }

    else if (usuario.value.length > 10) {

         toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("Usuario muy largo");
     //   alert("Usuario muy largo");
        usuario.focus();
        verificar = false;
    }

    else if (usuario.value.length < 5) {

         toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("Usuario muy corto");
        //alert("Usuario muy corto");
        usuario.focus();
        verificar = false;
    }
     else if (!usuarioExp.exec(usuario.value)) {

         toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("Este campo usuario acepta letras");
     //   alert("Este campo usuario acepta letras");
        usuario.focus();
        verificar = false;
    }

    // validacion contra1
    else if (clave1.value=="") {

         toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("el campo contraseña es necesario");
   //     alert("el campo contraseña es necesario");
        clave1.focus();
        verificar = false;
    }
     else if (clave1.value.length > 10) {

         toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("Contraseña muy larga");
   //     alert("Contraseña muy larga");
        clave1.focus();
        verificar = false;
    }

    else if (clave1.value.length < 5) {

         toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("Contraseña muy corta");
    //    alert("Contraseña muy corta");
        clave1.focus();
        verificar = false;
    }
     

    // validacion contra2
    else if (clave2.value=="") {

         toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("Es necesario rectificar contraseña");
//        alert("Es necesario rectificar contraseña");
        clave2.focus();
        verificar = false;
    }
    else if (clave1.value == clave2.value){

        verificar = true;
    }

    else if(clave1.value != clave2.value){

         toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("No coninciden las contraseñas");
  //      alert("No coninciden las contraseñas");
        clave2.focus();
        verificar = false;
    }
    

    if (verificar==true){

        if (confirm('Se guardaran estos datos')) {

        toastr.success('Tus datos seran enviados y guardados')
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        //alert('Tus datos seran enviados');
        document.getElementById("formulario").submit();
    }

    }
}

function limpiarform(){

        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
    toastr.info('Limpiando');
    //alert("limpiado");
    document.getElementById("formulario").reset();
}


window.onload = function()
{
    var BotonEnviar, BotonLimpiar;

    BotonLimpiar = document.getElementById("limpiar");
    BotonEnviar = document.getElementById("enviar");

    BotonLimpiar.onclick = limpiarform;
    BotonEnviar.onclick = validar;

}