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
	<link rel="stylesheet" type="text/css" href="css/styles-index.css">
</head>
<body>

	<?php
		include('inc/nav.php');
	?>
	<div class="container-fluid iconos">
	<?php
			include('inc/conexion.php');
			$sql = "SELECT *  FROM curso";
					$result = $conexion->query($sql);
					if ($result -> num_rows > 0) {
						while($row = $result->fetch_assoc())
						{
							echo '
							<a href="curso.php?id='.$row['title'].'">

								<a href="curso.php?id='.$row['id_curso'].'"><div style=" no-repeat center;background-size:cover" class="home-icono col-xs-6"></div></a>

							';
						}
					}
	?>
	</div>
	<script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>
