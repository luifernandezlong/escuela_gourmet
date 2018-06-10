<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title></title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/styles-curso.php">
</head>
<body>

	<?php
		include('conexion.php');
		$sql = "SELECT *  FROM `curso`";
		$result = $conexion->query($sql);
		if ($result -> num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo ' <duv style="background:url('.$row['bg'].') no-repeat center;background-size:cover" class="inicio-curso">
				<h1>'.$row['title'].'</h1>
				<h2>'.mb_convert_encoding($row['title'], "UTF-8").'</h2>
				<p>'.$row['descripcion'].'</p>
				<div class="precio">
					<span>'.$row['cantidad_cuotas'].'</span>
					<span>'.$row['cuota'].'</span>
					<button>Contacto</button>
					<button type="">Comprar</button>

				</div>

			</div>';


			}



		} else{
					echo 'Ha habido un error, por favor vuelva a cargar la página.';
				}



	?>

</body>
</html>
