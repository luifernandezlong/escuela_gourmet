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
		$sql = "SELECT *  FROM `fechas` AS f JOIN `curso` AS c WHERE id_curso=".$id;
	?>
	<div style="height: 10%;width: 100%;"></div>
	<?php
						$result = $conexion->query($sql);
						if ($result -> num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								echo '
								
							   		<span>¡Hola!</span>
Realicemos tu inscripción a 

		'
											;
										}
									}else{
										echo 'not';
									}


		?>

	<select>
		<?php
						$result = $conexion->query($sql);
						if ($result -> num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								echo '
								
							   		<option>'.utf8_encode($row['fecha']).', '.utf8_encode($row['horario']).','.utf8_encode($row['duracion']).'</option>

		'
											;
										}
									}else{
										echo 'not';
									}


		?>
		</select>

<script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>