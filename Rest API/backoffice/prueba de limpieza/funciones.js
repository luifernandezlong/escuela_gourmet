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

function mostrar(){

	$("#carrito").toggle(
	 	function(){
	 		$("#carrito").css({"display": "visible"});
	 	}
	);
}

function agregar(cod,prod,precio){
	
	$.ajax({
	  method: "POST",
	  url: "admincarrito.php",
	  data:{
	  	codigo: cod,
	  	producto: prod,
	  	precio: precio,
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
