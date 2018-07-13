<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Inscripción</title>
	 <link rel="shortcut icon" href="img/favicon.png" />
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<link rel="stylesheet" type="text/css" href="../css/styles-curso.css">
<!--	<script>var pathname = window.location.pathname.split( '/' );
	var path_id = pathname[1];
	var path_controller = pathname[2];
	var path_action = pathname[3];

</script>-->
</head>
<body>
<?php
		$id=$_GET['id'];
		include('../inc/nav.php');
		include('../inc/conexion.php');
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
								<form action="" method="post" name="formulario" id="section_formulario">

									<span class="titulo-inscripcion">	Realicemos tu inscripción al <b> '.utf8_encode($row['title']).'</b></span><br />
									<input type="text" class="form-control" id="curso" name="curso" value="'.$row['title'].'"  id="curso">'.$row['title'].'</input>
										'
										;
										}
									}else{
										echo 'not';
									}
		?>
		<input type="text" class="form-control" id="id_fechas" name="id_fechas"  id="id_fechas">'.$row['title'].'</input>
		<span>¿En qué fecha te gustaría comenzar?</span>
	<select  class="form-control" name="fecha" id="fecha">
		
		<?php
						$sql = "SELECT *  FROM `fechas` WHERE id_curso=".$id;
						$result = $conexion->query($sql);
						if ($result -> num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								echo '
							   		<option> <span class="id-fecha">'.$row['id_fechas'].'  </span>'.utf8_encode($row['fecha']).', '.utf8_encode($row['horario']).','.utf8_encode($row['duracion']).'</option>



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
				<input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre" required>
			</div>
			<div class="form-group col-xs-6">
				<input class="form-control" type="text" id="apellido" name="apellido"  placeholder="Apellido" required />
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-xs-6">
				<input class="form-control" type="text" id="dni" name="dni" placeholder="DNI o Pasaporte" required>
			</div>
			<div class="form-group col-xs-6">
				<input class="form-control" type="tel" id="telefono" name="telefono" placeholder="Teléfono" required>
			</div>
		</div>
		<div class="form-row">
			<input class="form-control" type="email" id="email" name="email" placeholder="Mail" required>
		</DIV>
		<div class="form-row">
			<div class="form-group col-xs-12">
				<span>¿Cómo nos conociste?</span>
			<select class="form-control" class="" id="conocio" name="conocio">
					<option value="google">Google</option>
					<option value="facebook">Facebook</option>
					<option value="instagram">Instagram</option>
					<option value="referido">Referencia</option>
					<option value="alumno">Ya cursé</option>
					<option value="otro">Otro</option>
				</select>
			</div>
		</div>
		<button type="button" class="btn btn-primary btn-lg" onclick="altaAlumno();" id="accionButton">Inscribirme</button>

	</form>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="funciones-inscriptos.js"></script>
	<script src="../bootstrap/js/jquery.js"></script>
	<script src="../bootstrap/js/bootstrap.js"></script>
</body>
</html>
