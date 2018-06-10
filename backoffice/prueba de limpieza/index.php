<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8">
<!--[if lt IE 9]>Identifican el primer organismo eucariota sin mitocondrias capaz de vivir sin oxígeno
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
</script>
<![endif]-->
<title>Carrito de Compras</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
<link href="http://fonts.googleapis.com/css?family=Asap:400,700" rel="stylesheet" type="text/css">
</head>

<style type="text/css">
html, body {
	height:100%;
}
body {
	height:100%;
}
  .container {height:100%;
	border-radius:3px;
	}
  #carrito{display: none; }
</style>
</head>
<body>
<div id="wrap">
<div id="main"> 
<div class="container">
<nav class="navbar navbar-inverse" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#acolapsar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar">1</span>
				<span class="icon-bar">2</span> 
				<span class="icon-bar">3</span>
				<span class="icon-bar">4</span>
			</button>
			<a href="./" class="navbar-brand">Carrito de compras</a>
		</div>
		
	</div>
</nav>
	
<!--contenido del carrito de compras-->
<div id="carrito">Todavía no has agregado ningún producto a tu carrito	<br /><br /></div>

<!--creamos los botones para ver y vaciar el carrito-->
<button type="button" class="btn btn-primary" onClick="mostrar();">Ver carrito</button>
<button type="button" class="btn btn-primary" onClick="vaciar();">Vaciar carrito</button>	

<!--lista de la consulta.php-->
<div id="contenido"></div>

<footer><div class="panel-footer">Este es el pié de página - Copyright &copy; <?php echo date('Y'); ?></div></footer>
</div>
</div> 
<div id="push"></div>
</div> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="funciones.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>