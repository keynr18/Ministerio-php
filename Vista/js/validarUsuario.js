function validarUsuario(){

	var verificar = true;
    var usuarioExp = new RegExp("[a-zA-ZÑñÁáÉéÍíÓóÚú\s]");
    var contraExp = new RegExp("[0-9a-zA-ZÑñÁáÉéÍíÓóÚú\s]");

	var formulario = document.getElementById("formulario1");
    var usuario = document.getElementById("usuario1");
    var contra1 = document.getElementById("contra11");
    var tipousera = document.getElementById("tipousera");
    var tipouserp = document.getElementById("tipouserp");

    // validacion usuario
    if (usuario.value=="") { 
    
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("Inserte nombre de usuario");
       // alert("Inserte nombre de usuario");
        usuario.focus();
        verificar = false;
    }
    /*else if (usuario.value.length > 10) {

        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("Usuario muy largo");
       // alert("Usuario incorrecto");
        usuario.focus();
        verificar = false;
    }
    else if (usuario.value.length < 5) {

        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("Usuario muy corto");
       // alert("Usuario incorrecto");
        usuario.focus();
        verificar = false;
    }
     else if (!usuarioExp.exec(usuario.value)) {

        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("Nombre de usuario acapta letras y nuer");
       // alert("Usuario incorrecto");
        usuario.focus();
        verificar = false;
    }*/

    // validacion contra1
    else if (contra1.value=="") {

        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("Inserte su contraseña");
       // alert("Inserte su contraseña");
        contra1.focus();
        verificar = false;
    }
    /* else if (contra1.value.length > 10) {

        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("Contraseña invalida");
        //alert("Contraseña invalida");
        contra1.focus();
        verificar = false;
    }
    else if (contra1.value.length < 5) {

        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("Contraseña invalida");
        //alert("Contraseña invalida");
        contra1.focus();
        verificar = false;
    }
     else if (!contraExp.exec(contra1.value)) {

        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("Contraseña invalida");
        //alert("Contraseña invalida");
        contra1.focus();
        verificar = false;
    }*/

    if (tipousera.checked == true || tipouserp.checked == true) {

    }else{


        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr["error"]("Selecciona administrador o productor");
        //alert("Contraseña invalida");
        verificar = false;
    }


    if (verificar==true){

        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.success('Iniciando session');
        //alert('Iniciando session');
        document.getElementById("formulario1").submit();

    }
}

function limpiarform1(){

    toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.info("limpiado");
    //alert("limpiado");
    document.getElementById("formulario1").reset();
}



window.onload = function()
{
    var EntrarUser, LimpiarUser;

    LimpiarUser = document.getElementById("limpiarUser");
    EntrarUser = document.getElementById("entrarUser");

    LimpiarUser.onclick = limpiarform1;
    EntrarUser.onclick = validarUsuario;
}