<?php
session_start();
if (!isset($_SESSION['usuario'])){
	echo '  <script type="text/javascript">
                alert("Para acceder a este contenido tiene que estar logueado");
                window.location="login.php"
            </script>';
}
?>
<?php ini_set("log_errors", 1); ini_set("error_log", "./php-error.log"); error_log( "Hello, errors!" ); ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Backoffice - Escuela Gourmet</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="shortcut icon" href="../../img/favicon.png" />
 <link rel="stylesheet" type="text/css" href="../boot/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/backoffice.css">
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
<nav class="navbar navbar-inverse" role="navigation">
	<div class="container-fluid">
			<a href="salir.php" class="btn btn-primary" style="margin-top:7px; float:right;">Cerrar Sesion</a>
	</div>
</nav>

<div class="contenido-backoffice">

		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Nuevo Producto</button>

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Nuevo inicio de curso o carrera</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="" method="post">
	          <div class="form-group">
			    <label for="id_fechas">Codigo</label>
			    <input type="text" class="form-control" name="id_fechas" id="id_fechas" readonly="readonly">
			  </div>
			  <div class="form-group">
			    <label for="id_curso">Curso</label>
			<select class="form-control form-control-md" name="id_curso" id="id_curso">
					  <option>1</option>
						<option>2</option>
						<option>3 - Cata de Vino</option>
						<option>4 - Cocina</option>
						<option>5 - Pasteleria</option>
						<option>6 - Panaderia</option>
						<option>7 - Curso de Cerveza</option>
						<option>8 - Tea sommelier</option>
						<option>9 - Tea blender</option>
						<option>10 - Bar Manager</option>
						<option>11 - Sommelier de Café</option>
						<option>12 - Sommelier de vino</option>
						<option>13 - Carrera de cerveza</option>
					</select>
			    <!--<input type="text" class="form-control" name="id_curso" id="id_curso" placeholder="Escriba nombre del producto">-->
			  </div>
			  <div class="form-group">
			    <label for="fecha">Fecha de inicio</label>
			    <input placeholder="¿Cuándo empieza?" class="form-control" name="fecha" id="fecha" type="text">
			  </div>
			  <div class="form-group">
					<label for="horario">Horario</label>
			    <input type="text" class="form-control" name="horario" id="horario" placeholder="¿Qué días y horarios tendrá el curso/carrera?">
					<label for="duracion">Duración</label>
		 		 <input type="text" class="form-control" name="duracion" id="duracion" placeholder="¿Cuánto dura?">
		 		<label for="sena">Seña</label>
		 		 <input type="text" class="form-control" name="sena" id="sena" placeholder="¿Cuánto es la seña?">
		 		<label for="sena">Cupo</label>
		 		 <input type="text" class="form-control" name="cupo" id="cupo" placeholder="¿Cuánto asientos hay?">
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

</div>
<footer>Este es el pié de página - Copyright &copy; <?php echo date('Y'); ?></footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="funciones.js"></script>
<script src="../boot/js/bootstrap.min.js"></script>
</body>
</html>
