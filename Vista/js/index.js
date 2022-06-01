$(document).ready(function(){

	$.ajax({
		type:'POST',
		url:'Controlador/controladorcargarmunicipios.php',
		//data:{'peticion': 'cargarlista'}
	})
	.done(function(municipios){  

		$('#municipio').html(municipios) 
	})
	.fail(function(){
		alert('hubo un error fatal') 
	})



	$('#municipio').on('change', function(){

		var id = $('#municipio').val()
		
        $.ajax({
		type:'POST',
		url:'Controlador/controladorcargarparroquia.php',
		data:{'id': id}
		})

		.done(function(parroquia){

			$('#parroquia').html(parroquia)
		})
		.fail(function(){
			alert('hubo un error fatal')
		})

	})
	
})
