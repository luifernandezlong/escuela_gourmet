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
 	$("#carrito").toggle();
}
