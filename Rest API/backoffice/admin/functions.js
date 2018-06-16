$(document).ready(function(){
	consulta();



function consulta(){

	$.ajax({
	  method: "POST",
	  url: "consulta.php",
	  success: function(data){
	  	$("#contenido").html(data);
	  }
	});

}

function altaModi(){

	if ($("#id_fecha").val() != ''){
		$("#accionButton").html("Modificar");
		$.ajax({
		  method: "POST",
		  url: "modi.php",
		  data:{
		  	//sub indice de post con cual se van a recibir los datos en alta
		  	codigo: $("#id_fecha").val(), //.val() equivalente a .value() js
		  	curso: $("#id_curso").val(), //.val() equivalente a .value() js
		  	fecha: $("#fecha").val(),
		  	horario: $("#horario").val(),
		  	duracion: $("#duracion").val()
		  },
		  success: function(){
alert("Alta1");
		  }
		});
	}else {
		//alert("alta");
		$("#accionButton").html("Dar de alta");
		$.ajax({
		  method: "POST",
		  url: "alta.php",
		  data:{
		  	//sub indice de post con cual se van a recibir los datos en alta
		  	codigo: $("#id_fecha").val(), //.val() equivalente a .value() js
		  	curso: $("#id_curso").val(), //.val() equivalente a .value() js
		  	fecha: $("#fecha").val(),
		  	horario: $("#horario").val(),
		  	duracion: $("#duracion").val()
		  },
		  success: function(){
				alert("Alta");
		  }
		});
	}

}
}
/*function baja(cod){
	if (confirm("Confirma la baja")){
		$.ajax({
		  method: "POST",
		  url: "baja.php",
		  data:{
		  	codigo: cod
		  },
		  success: function(){
		  	consulta();
		  }
		});
	}
}
*/
