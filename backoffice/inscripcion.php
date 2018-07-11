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

	<?php

	include('conexion.php');

	$base = new BasedeDatosmysqli(SERVIDOR, USUARIO, PASSWORD, BASE);
	$productos = new producto($base);

	$productos = $productos->getProductos();
	if($productos){

		echo '<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">Codigo</th>
			      <th scope="col">Curso</th>
			      <th scope="col">Fecha</th>
			      <th scope="col">Horario</th>
			      <th scope="col">Duración</th>
			      <th scope="col">Seña</th>
			      <th scope="col">Cupo</th>
			      <th scope="col">Modificar</th>
			      <th scope="col">Eliminar</th>
			    </tr>
			  </thead>';
	/*	echo'hola';*/
		for($i = 0; $i < count($productos); $i++){
	/*	echo'chau';*/

		echo '
			  <tbody>
			    <tr>
			      <th scope="row">'. $productos[$i]['id_fechas'].'</th>
			      <td>'. $productos[$i]['id_curso'].'</td>
			      <td>'. $productos[$i]['fecha'].'</td>
			      <td>'. $productos[$i]['horario'].'</td>
			      <td>'. $productos[$i]['duracion'].'</td>
			      <td>$'. $productos[$i]['sena'].'</td>
			      <td>'. $productos[$i]['cupo'].'</td>
			      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-id_fechas="'. $productos[$i]['id_fechas'].'" data-id_curso="'. $productos[$i]['id_curso'].'" data-fecha="'. $productos[$i]['fecha'].'" data-horario="'. $productos[$i]['horario'].'" data-duracion="'. $productos[$i]['duracion'].'" data-sena="'. $productos[$i]['sena'].'" data-cupo="'. $productos[$i]['cupo'].'" data-boton="Modificar">Editar</button></td>
			      <td><button type="button" class="btn btn-primary" onclick="baja('. $productos[$i]['id_fechas'].');">Baja</button></td>
			    </tr>';
		}

		echo' </tbody>
			</table>';
			}

?>


</div>
<footer>Este es el pié de página - Copyright &copy; <?php echo date('Y'); ?></footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="funciones.js"></script>
<script src="../boot/js/bootstrap.min.js"></script>
</body>
</html>
