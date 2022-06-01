$(document).ready(function(){

	$.ajax({
		type:'POST',
		url:'Controlador/controladorcargargrupo.php',
		//data:{'peticion': 'cargarlista'}
	})
	.done(function(grupo){

		$('#grupo').html(grupo)
	})
	.fail(function(){
		alert('hubo un error fatal')
	})



	$('#grupo').on('change', function(){

		var id = $('#grupo').val()
		
        $.ajax({
		type:'POST',
		url:'Controlador/controladorcargarcultivo.php',
		data:{'id': id}
		})

		.done(function(cultivo){

			$('#cultivo').html(cultivo)
		})
		.fail(function(){
			alert('hubo un error fatal')
		})

	})
	
})
