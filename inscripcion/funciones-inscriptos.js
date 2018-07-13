$(document).ready(function(){

	$('#exampleModal').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget) // Button that triggered the modal
	  var id_inscripto = button.data('id_inscripto')
	  var curso = button.data('curso')
	  var id_fechas = button.data('id_fechas')
	  var fecha = button.data('fecha')
	  var nombre= button.data('nombre')
	  var apellido= button.data('apellido')
	  var dni = button.data('dni')
	  var telefono = button.data('telefono')
	  var email = button.data('email')
	  var conocio = button.data('conocio')
	  var boton = button.data('boton')
	  var modal = $(this)
	  modal.find('#id_inscripto').val(id_inscripto)
	  modal.find('#curso').val(curso)
	  modal.find('#id_fechas').val(id_fechas)
	  modal.find('#fecha').val(fecha)
	  modal.find('#nombre').val(nombre)
	  modal.find('#apellido').val(apellido)
	  modal.find('#dni').val(dni)
	  modal.find('#telefono').val(telefono)
	  modal.find('#email').val(email)
	  modal.find('#conocio').val(conocio)
	  modal.find('#accionButton').html(boton)
	})
	});



function altaAlumno(){

	if ($("#id_inscripto").val() != ''){
		$("#accionButton").html("Dar de alta");

		$.ajax({
		  method: "POST",
		  url: "alta.php",
		  data:{
				id_inscripto: $("#id_inscripto").val(),
				curso: $("#curso").val(),
				id_fechas: $("#id_fechas").val(),
				fecha: $("#fecha").val(),
				nombre: $("#nombre").val(),
				apellido: $("#apellido").val(),
				dni: $("#dni").val(),
				telefono: $("#telefono").val(),
				email: $("#email").val(),
				conocio: $("#conocio").val()
		  },
		  success: function(){
		  	$('#exampleModal').modal('hide');
		  }
		});
		alert("alta");
	}else {
		alert("no se puede");

	}

}

