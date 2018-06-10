$(document).ready(function(){
	consulta();

	$('#exampleModal').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget) // Button that triggered the modal
	  var codigo = button.data('codigo')
	  var producto = button.data('producto')
	  var descripcion = button.data('descripcion')
	  var precio = button.data('precio')
	  var boton = button.data('boton')
	  var modal = $(this)
	  modal.find('#codigo').val(codigo)
	  modal.find('#nombre').val(producto)
	  modal.find('#descripcion').val(descripcion)
	  modal.find('#precio').val(precio)
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

	if ($("#codigo").val() != ''){
		//alert("modi");
		$("#accionButton").html("Modificar");
		$.ajax({
		  method: "POST",
		  url: "modi.php",
		  data:{
		  	//sub indice de post con cual se van a recibir los datos en alta
		  	codigo: $("#codigo").val(), //.val() equivalente a .value() js 
		  	nombre: $("#nombre").val(), //.val() equivalente a .value() js 
		  	descripcion: $("#descripcion").val(),
		  	precio: $("#precio").val() 
		  },
		  success: function(){
		  	$('#exampleModal').modal('hide');
		  	consulta();
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
		  	nombre: $("#nombre").val(), //.val() equivalente a .value() js 
		  	descripcion: $("#descripcion").val(),
		  	precio: $("#precio").val() 
		  },
		  success: function(){
		  	$('#exampleModal').modal('hide');
		  	consulta();
		  }
		});	
	}

}

function baja(cod){
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



