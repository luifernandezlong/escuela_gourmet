<?php 
session_start();
if (!isset($_SESSION['usuario'])){
	echo '  <script type="text/javascript">
                alert("Para acceder a este contenido tiene que estar logueado");
                window.location="index.php"
            </script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Carrito de Compras</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link href="http://fonts.googleapis.com/css?family=Asap:400,700" rel="stylesheet" type="text/css">
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
			<a href="./" class="navbar-brand">ABM Productos</a>
			<a href="salir.php" class="navbar-brand">Cerrar Sesion</a>
		</div>
		
	</div>
</nav>

	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Nuevo Producto</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">        	
          <div class="form-group">
		    <label for="nombre">Codigo</label>
		    <input type="text" class="form-control" name="codigo" id="codigo" readonly="readonly">
		  </div>	
		  <div class="form-group">
		    <label for="nombre">Nombre</label>
		    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Escriba nombre del producto">
		  </div>
		  <div class="form-group">
		    <label for="descripcion">Descripcion</label>
		    <textarea placeholder="Escriba descripcion del producto" class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
		  </div>
		  <div class="form-group">
		    <label for="precio">Precio</label>
		    <input type="text" class="form-control" name="precio" id="precio" placeholder="Escriba precio del producto">
		  </div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="altaModi();" id="accionButton">Dar de Alta</button>
      </div>
    </div>
  </div>
</div>


<div id="contenido"></div>

</div>
</div> 
<div id="push"></div>
</div> 
<footer><div class="container">Este es el pie de página</div></footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="funciones.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>