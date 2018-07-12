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
		<div class="contenido_contacto contacto">
		<?php
			include('inc/conexion.php');
      $curso=$_POST['curso'];
      $fecha=$_POST['fecha'];
      echo $fecha[0];
      $nombre=$_POST['nombre'];
      $apellido=$_POST['apellido'];
      $dni=$_POST['dni'];
      $telefono=$_POST['telefono'];
      $email=$_POST['email'];
      $conocio=$_POST['conocio'];
			$resultado=mysqli_query($conexion, "INSERT INTO inscriptos VALUES (NULL, 'fecha','$nombre','$apellido',
				 '$telefono', '$email', '$conocio')");
			$remitente="From: $nombre <$email>";
			$destino='lu@escuelagourmet.com.ar';
			$asunto=$nombre . ' envió una inscripción a traves de la web';
			$contenido ="Nombre: " . $nombre ."\r\n";
      $contenido ="Apellido: " . $apellido ."\r\n";
      $contenido ="DNI/Pasaporte: " . $dni ."\r\n";
			$contenido.="Telefono: " . $telefono . "\r\n";
			$contenido.="Mail: " . $email . "\r\n";
			$contenido.="Cómo nos conoció: " . $conocio;
			mail($destino,utf8_decode($asunto),utf8_decode($contenido),utf8_decode($remitente));
			header('location:gracias-alumno.php');
			echo 'Tu inscripción se ha enviado correctamente'
				// <button onclick="myFunction()">Show Snackbar</button>
				// <div id="snackbar">Tu mensaje se ha enviado correctamente</div>
			?>
</body>
</html>
