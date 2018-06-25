$(document).ready(function(){
	consulta();
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

function cambiarorden(columna){
 	//alert (columna);
 	//alert($(".columna").attr("value"));
 	//alert($(".columna").attr("class"));
 	$.ajax({
	  method: "POST",
	  url: "consulta.php",
	  data: {
	  	orden: columna,
	  	tipo: $(".columna").attr("value") 
	  },
	  success: function(data){
	  	$("#contenido").html(data);
	  	if ($(".columna").attr("value") == "asc"){
	  		$(".columna").removeClass("asc") 
	  		$(".columna").addClass("desc")
	  		$(".columna").attr({"value": "desc"}) 
	  	}else{
	  	 if ($(".columna").attr("value") == "desc"){
	  		$(".columna").removeClass("desc") 
	  		$(".columna").addClass("asc")
	  		$(".columna").attr({"value": "asc"}) 
	  	}}
	  		 
	  }
	});
}

function mostrar(){
 	$("#carrito").toggle();
}

function agregar(id_fechas,id_curso,fecha,horario,duracion,sena){
	
	$.ajax({
	  method: "POST",
	  url: "admincarrito.php",
	  data:{
	  	id_fechas: id_fechas,
	  	id_curso: id_curso,
	  	fecha: fecha,
	  	horario: horario,
	  	duracion: duracion,
	  	sena: sena,
	  	accion: 'agregar'
	  },
	  success: function(data){
	  	$("#carrito").html(data);
	  }
	});

}

function vaciar(){
 	$.ajax({
	  method: "POST",
	  url: "admincarrito.php",
	  data:{
	  	accion: 'vaciar'
	  },
	  success: function(data){
	  	$("#carrito").html(data);
	  }
	});
}

function eliminar(item){
 	$.ajax({
	  method: "POST",
	  url: "admincarrito.php",
	  data:{
	  	item: item,
	  	accion: 'eliminar'
	  },
	  success: function(data){
	  	$("#carrito").html(data);
	  }
	});
}

function mas(item){
 	$.ajax({
	  method: "POST",
	  url: "admincarrito.php",
	  data:{
	  	item: item,
	  	accion: 'mas'
	  },
	  success: function(data){
	  	$("#carrito").html(data);
	  }
	});
}

function menos(item){
 	$.ajax({
	  method: "POST",
	  url: "admincarrito.php",
	  data:{
	  	item: item,
	  	accion: 'menos'
	  },
	  success: function(data){
	  	$("#carrito").html(data);
	  }
	});
}
