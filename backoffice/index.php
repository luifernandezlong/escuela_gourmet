<!DOCTYPE html>
<html lang="en">
<head>
	<title>Carrito de Compras</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<link rel="stylesheet" type="text/css" href="boot/css/bootstrap.min.css">
	<link href="http://fonts.googleapis.com/css?family=Asap:400,700" rel="stylesheet" type="text/css">
	<style type="text/css">
		#carrito{
			display: none;
		}
		.asc::before{
			content: "▲";
		}
		.desc::before{
			content: "▼";
		}
	</style>
</head>
<body>
<div id="wrap">  <div id="main"> 
<div class="container">
<nav class="navbar navbar-inverse" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#acolapsar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="./" class="navbar-brand">Carrito de compras</a>
		</div>
		
	</div>
</nav>
	

<div id="carrito"></div>
<button type="button" class="btn btn-primary" onclick="mostrar();">Ver carrito</button>
<button type="button" class="btn btn-primary" onclick="vaciar();">Vaciar carrito</button>	

<div id="contenido"></div>

</div>
</div> 
<div id="push"></div>
</div> 
<footer><div class="container">Este es el pie de página</div></footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="funciones.js"></script>
<script src="boot/js/bootstrap.min.js"></script>
</body>
</html>