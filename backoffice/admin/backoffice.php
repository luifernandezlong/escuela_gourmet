<?php
session_start();
if (!isset($_SESSION['usuario'])){
	echo '  <script type="text/javascript">
                alert("Para acceder a este contenido tiene que estar logueado");
                window.location="login.php"
            </script>';
}
?>
<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Backoffice - Escuela Gourmet</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="shortcut icon" href="../../img/favicon.png" />
<link rel="stylesheet" type="text/css" href="../css/backoffice.css">
<link href="http://fonts.googleapis.com/css?family=Asap:400,700" rel="stylesheet" type="text/css">
</head>

<body>
<nav class="navbar navbar-inverse" role="navigation">
	<div class="container-fluid">
			<a href="salir.php" class="btn btn-primary" style="margin-top:7px; float:right;">Cerrar Sesion</a>

	</div>
</nav>

<div class="container">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Nuevo Producto</button>
<a class="btn btn-primary" href="subirFecha.php">Subir fecha</a>

</div>


<footer>Este es el pié de página - Copyright &copy; <?php echo date('Y'); ?></footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="funciones.js"></script>
<!--<script src="../bootstrap/js/bootstrap.min.js"></script>-->
</body>
</html>
