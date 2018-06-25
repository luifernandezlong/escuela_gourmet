$(document).ready(function(){
	consulta();

	$('#exampleModal').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget) // Button that triggered the modal
	  var id_fechas = button.data('id_fechas')
	  var id_curso = button.data('id_curso')
	  var fecha = button.data('fecha')
	  var horario = button.data('horario')
	  var duracion = button.data('duracion')
	  var sena = button.data('sena')
	  var cupo = button.data('cupo')
	  var boton = button.data('boton')
	  var modal = $(this)
	  modal.find('#id_fechas').val(id_fechas)
	  modal.find('#id_curso').val(id_curso)
	  modal.find('#fecha').val(fecha)
	  modal.find('#horario').val(horario)
	  modal.find('#duracion').val(duracion)
	  modal.find('#sena').val(sena)
	  modal.find('#cupo').val(cupo)
	  modal.find('#accionButton').html(boton)
	})
	});

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

	if ($("#id_fechas").val() != ''){
		$("#accionButton").html("Modificar");
		$.ajax({
		  method: "POST",
		  url: "modi.php",
		  data:{
		  	id_fechas: $("#id_fechas").val(),
		  	id_curso: $("#id_curso").val(),
		  	fecha: $("#fecha").val(),
		  	horario: $("#horario").val(),
		  	duracion: $("#duracion").val(),
		  	sena: $("#sena").val(),
		  	cupo: $("#cupo").val()
		  },
		  success: function(){
		  	$('#exampleModal').modal('hide');
		  	consulta();
		  }

		});

			alert("modi");
	}else {
		$("#accionButton").html("Dar de alta");

		$.ajax({
		  method: "POST",
		  url: "alta.php",
		  data:{
				id_fechas: $("#id_fechas").val(),
				id_curso: $("#id_curso").val(),
				fecha: $("#fecha").val(),
				horario: $("#horario").val(),
				duracion: $("#duracion").val(),
				sena: $("#sena").val(),
				cupo: $("#cupo").val()
		  },
		  success: function(){
		  	$('#exampleModal').modal('hide');
		  	consulta();
		  }
		});
		alert("alta");

	}

}

function baja(id_fechas){
	if (confirm("Confirma la baja")){
		$.ajax({
		  method: "POST",
		  url: "baja.php",
		  data:{
		  	id_fechas: $("#id_fechas").val()
		  },
		  success: function(){
		  	consulta();
		  }
		});
		alert("baja");
	}
}
