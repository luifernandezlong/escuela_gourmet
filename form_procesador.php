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


      $nombre=$_POST['nombre'];
      $email=$_POST['email'];
      $telefono=$_POST['telefono'];
      $curso=$_POST['curso'];
			$resultado=mysqli_query($conexion, "INSERT INTO formulario VALUES (NULL,'$nombre',
				'$email', '$telefono', '$curso')");
			$remitente="From: $nombre <$email>";
			$destino='lu@escuelagourmet.com.ar';
			$asunto=$nombre . ' envio una consulta a traves de la web';
			$contenido ="Nombre: " . $nombre ."\r\n";
			$contenido.="Mail: " . $email . "\r\n";
			$contenido.="Telefono: " . $telefono . "\r\n";
			$contenido.="Curso: " . $curso;
			mail($destino,utf8_decode($asunto),utf8_decode($contenido),utf8_decode($remitente));
			header('location:gracias.php');
			echo 'Tu mensaje se ha enviado correctamente'
				// <button onclick="myFunction()">Show Snackbar</button>
				// <div id="snackbar">Tu mensaje se ha enviado correctamente</div>
			?>
</body>
</html>
