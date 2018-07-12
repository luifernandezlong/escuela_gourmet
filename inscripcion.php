<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Inscripción</title>
	 <link rel="shortcut icon" href="img/favicon.png" />
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/styles-curso.css">
<!--	<script>var pathname = window.location.pathname.split( '/' );
	var path_id = pathname[1];
	var path_controller = pathname[2];
	var path_action = pathname[3];

</script>-->
</head>
<body>
<?php
		$id=$_GET['id'];
		include('inc/nav.php');
		include('inc/conexion.php');
	?>
	<div style="height: 10%;width: 100%;"></div>
	<?php
						$sql = "SELECT * FROM `curso` WHERE id_curso=".$id;
						$result = $conexion->query($sql);
						if ($result -> num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								echo '

								 		<h2 style="color: '.$row['color'].'">¡Hola!</h2>
										<p>

										</p>
								<div class="form-inscripcion" style="background-color: '.$row['color'].'">
								<form action="alumno.php" method="post" name="formulario" id="section_formulario">

									<span class="titulo-inscripcion">	Realicemos tu inscripción al <b> '.utf8_encode($row['title']).'</b></span><br />
									<input type="text" class="form-control" placeholder="'.$row['title'].'" name="curso" readonly  id="curso">
										'
										;
										}
									}else{
										echo 'not';
									}
		?>

	<select  class="form-control">
		<option>
			Fecha de inicio
		</option>
		<?php
						$sql = "SELECT *  FROM `fechas` WHERE id_curso=".$id;
						$result = $conexion->query($sql);
						if ($result -> num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								echo '
							   		<option><span class="id-fecha">'.$row['id_fechas'].'  </span>'.utf8_encode($row['fecha']).', '.utf8_encode($row['horario']).','.utf8_encode($row['duracion']).'</option>



										'
											;


										}
									}else{
										echo 'not';
									}
		?>
		</select>
		<div class="form-row">
			<div class="form-group col-xs-6">
				<input class="form-control" type="text" name="nombre" placeholder="Nombre">
			</div>
			<div class="form-group col-xs-6">
				<input class="form-control" type="text" name="apellido"  placeholder="Apellido" />
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-xs-6">
				<input class="form-control" type="text" name="dni" placeholder="DNI o Pasaporte">
			</div>
			<div class="form-group col-xs-6">
				<input class="form-control" type="tel" name="telefono" placeholder="Teléfono">
			</div>
		</div>
		<div class="form-row">
			<input class="form-control" type="email" name="mail" placeholder="Mail">
		</DIV>
		<div class="form-row">
			<div class="form-group col-xs-12">
			<select class="form-control" class="" name="secundario">¿Cómo nos conociste?
					<option value="google">Google</option>
					<option value="facebook">Facebook</option>
					<option value="instagram">Instagram</option>
					<option value="referido">Referencia</option>
					<option value="alumno">Ya cursé</option>
					<option value="otro">Otro</option>
				</select>
			</div>
		</div>
		<button type="submit" class="btn btn-primary btn-lg">Inscribite</button>

	</form>
	</div>
	<script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>
