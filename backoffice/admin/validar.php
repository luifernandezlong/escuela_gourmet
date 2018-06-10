<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8">
<!--[if lt IE 9]>Identifican el primer organismo eucariota sin mitocondrias capaz de vivir sin oxígeno
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
</script>
<![endif]-->
<title>Validar</title>
</head>

<body>
<?php

include("autoload.php");

$base = new basedeDatosmysqli(SERVIDOR, USUARIO, PASSWORD, BASE);
$usuarioLogin = new Usuario($base);

//Creamos el usuario con los datos del formulario via post y validamos los datos a ver si son correctos para redirigirlo
if ($usuarioLogin->validarUsuario($_POST['usuario'],md5($_POST['password']))) {

	$_SESSION['usuario'] = $_POST['usuario'];

	echo "<script>window.location='backoffice.php'</script>";

	} else {
	echo "<script type='text/javascript'> alert('Para acceder a este contenido tiene que estar logueado');           window.location='login.php' </script>";
	}

?>
</body>
</html>
