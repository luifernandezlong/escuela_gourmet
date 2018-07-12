<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php
	include('inc/conexion.php');
	$sql = "SELECT *  FROM `curso` WHERE id_curso=".$id;
	$result = $conexion->query($sql);
			if ($result->num_rows > 0) {
				echo ''.utf8_encode($row['title']).''
				;}
	?></title>
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
	?>
	<?php
		include('inc/nav.php');
	?>

	<?php
		include('inc/inicio-curso.php');
	?>

	<div class="fechas">
		<?php
			include('inc/fechas.php');
		?>
	</div>
	<?php
		include('inc/form.php');
	?>


	<div class="container-fluid beneficios">
		<?php
			include('inc/beneficios.php');
		?>
    </div>

	<?php
		include('inc/cronograma-curso.php');
	?>


	<script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>https://www.elserver.com/ayuda/como-envio-correos-con-php-por-smtp-phpmailer/
