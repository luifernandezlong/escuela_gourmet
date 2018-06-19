<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title></title>
	 <link rel="shortcut icon" href="img/favicon.png" />
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/styles-curso.css">
</head>
<body>

	<?php
		include('inc/nav.php');
	?>

		<?php
			include('inc/conexion.php');
			$sql = "SELECT *  FROM `curso`";
					$result = $conexion->query($sql);
					if ($result -> num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							echo '
									<div style="background:url('.$row['bg'].') no-repeat center;background-size:cover" class="inicio-curso container-fluid">
										<div class="contenido-inicio-curso">
											<h1><span>CURSO DE</span>'.$row['h1'].'</h1>
											<p>'.mb_convert_encoding($row['descripcion'], "UTF-8").'</p>
											<div class="cert">
												<img src="img/certificados.png" alt="Certificados oficiales" title="certificados-oficiales" />
												<span>CERTIFICADOS OFICIALES</span>
												<p>Brindamos dos certificados, uno avalado por el Ministerio de Educación y otro privado con validez internacional.</p>
											</div>
											<div class="precio">
												<span class="cant-cuota">'.$row['cantidad_cuotas'].'</span>
												<span>$'.$row['cuota'].'</span>
												<a class="btn btn-primary btn-lg">Contacto</a>
												<a class="btn btn-primary btn-lg">Inscribirme</a>
											</div>
										</div>
									</div>
									<div class="fechas contenido container-fluid">
										<h2 style="color:'.$row['color'].';">Inicios del '.$row['title'].'</h2>
										<a class="btn btn-primary btn-lg" src="#">INSCRIBIRME</a>
									</div>
									<div class="form" style="background-color:'.$row['color'].';">
									<form action="form_procesador.php" method="post" name="formulario" id="section_formulario">
										<h5>¡CONSULTANOS!</h5>
											    <input type="text" class="izq" placeholder="NOMBRE" required  id="nombre">
											    <input type="text" class="der" placeholder="EMAIL" required  id="email">
										      <input type="text" class="izq" placeholder="TELÉFONO" required  id="telefono">
										      <input type="text" class="der" placeholder="'.$row['title'].'" readonly  id="curso">
													<input type="submit" value="Enviar" class="boton1" />
										</form>
									</div>
							'
					;
					}
					} else{
								echo 'Ha habido un error, por favor vuelva a cargar la página.';
							}



				?>



	<script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>
