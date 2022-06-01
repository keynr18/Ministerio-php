function validareventos(){

	var verificar = true;



}


function limpiareventos(){

    alert("limpiado");
    document.getElementById("formeventos").reset();
}


window.onload = function()
{
    var Enviarevento, Limpiareventos;

    Limpiareventos = document.getElementById("limpiarevento");
    Enviarevento = document.getElementById("enviarevento");

    Limpiareventos.onclick = limpiareventos;
    Enviarevento.onclick = validareventos;

}