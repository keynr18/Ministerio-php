function validar(){

    alert('hola');

	var verificar = true;

	var expRegNombre = /^[a-zA-ZÑñÁáÉéÍíÓóÚú\s]+$/;
	var expRegEmail = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
    var expRegCedula = new RegExp("[0-9]{7,}");
    var expRegTele = new RegExp("[0-9]{11,}");

	//var formulario = document.getElementById("formPro");
    var sg = document.getElementById("grupo");
    var sc = document.getElementById("cultivo");
    var fechas = document.getElementById("fechaS");
    var fechac = document.getElementById("fechaC");

	/*var nombreh = document.getElementById("nombreh");
	var direccion = document.getElementById("direc");
    var telefono = document.getElementById("tele");
    var hectaria = document.getElementById("hectaria");
    var sm = document.getElementById("municipio");
    var sp = document.getElementById("parroquia");*/


    // validacion del nombre de hacienda
    if (sg.value == 0) {

         toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("seleccione grupo agricola");
        sg.focus();
        verificar=false;

    }
    else if (sc.value == 0) {

         toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("seleccione cultivo");
        sc.focus();
        verificar=false;

    }

    else if (fechas.value == "") {

        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("El campo fecha siembre es necesario");
        fechas.focus();
        verificar=false;

    }
/*
    else if (nombreh.value.length < 3){

        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
         toastr["error"]('Nombre de hacienda muy corto');
        //alert("Nombre muy corto");
        nombreh.focus();
        verificar = false;
    }

    else if (nombreh.value.length > 50){

        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]('Nombre de hacienda muy largo');
        //alert("Nombre muy largo");
        nombreh.focus();
        verificar = false;
    }

    else if (!expRegNombre.exec(nombreh.value)) {

        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]('Este campo hacienda acepta letras');
        //alert("Este campo nombre acepta letras");
        nombreh.focus();
        verificar = false;
    }

    // validar direccion de la hacienda
    //////////////////////////////////////

    else if(direccion.value == "") {

         toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("Ingrese direccion de la hacienda");
        direccion.focus();
        verificar=false;

    }

    else if (direccion.value.length < 5){

        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
         toastr["error"]('Direccion de hacienda muy corto');
        //alert("Nombre muy corto");
        direccion.focus();
        verificar = false;
    }

    else if (direccion.value.length > 60){

        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]('direccion de hacienda muy largo');
        //alert("Nombre muy largo");
        nombreh.focus();
        verificar = false;
    }

    //validacion del telefono de la hacienda
    ///////////////////////////////////////////////

    else if(telefono.value == "") {

         toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("Ingrese telefono de la hacienda");
        telefono.focus();
        verificar=false;

    }
      else if (isNaN(telefono.value)) {

         toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("El campo telefono acepta numeros");
        //alert("El campo telefono acepta numeros");
        telefono.focus();
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

    else if (telefono.value.length < 11){

         toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("telefono muy corto");
      //  alert("telefono muy largo");
        telefono.focus();
        verificar = false;
    }

    // validar hectaria
    //////////////////////////////////////////////////////////////
    
     else if(hectaria.value == "") {

         toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("Ingrese numero de hectaria");
        hectaria.focus();
        verificar=false;

    }
    else if(isNaN(hectaria.value)) {

         toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("El campo hectaria acepta numeros");
        //alert("El campo telefono acepta numeros");
        hectaria.focus();
        verificar = false;
    }

    else if(sm.value == 0){

         toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("seleccione municipio");
        //alert("El campo telefono acepta numeros");
        sm.focus();
        verificar = false;
    }

    else if(sp.value == 0){

         toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("seleccione parroquia");
        //alert("El campo telefono acepta numeros");
        sp.focus();
        verificar = false;
    }*/

    if (verificar==true){

            if (confirm('Se guardaran estos datos')) {

            toastr.success('Tus datos seran enviados y guardados')
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            //alert('Tus datos seran enviados');
            document.getElementById("formularioX").submit();
        }

    }


} //fin de la funcion validar


function limpiarform(){

        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
    toastr.info('Limpiando');
    //alert("limpiado");
    document.getElementById("formularioX").reset();
}


window.onload = function()
{

    var BotonEnviar, BotonLimpiar;

    BotonLimpiar = document.getElementById("limpiar");
    BotonEnviar = document.getElementById("enviar");

    BotonLimpiar.onclick = limpiarform;
    BotonEnviar.onclick = validar;

}