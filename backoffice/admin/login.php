<?php
session_start();
if (isset ($_SESSION["usuario"])) {
	echo '<script type="text/javascript">window.location="backoffice2.php";</script>';
}
?>
<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8">
<!--[if lt IE 9]>Identifican el primer organismo eucariota sin mitocondrias capaz de vivir sin oxígeno
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
</script>
<![endif]-->
<title>Backoffice</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/backoffice.css">
<link href="http://fonts.googleapis.com/css?family=Asap:400,700" rel="stylesheet" type="text/css">
</head>

<body>

<div class="container">

	<h3>Iniciar sesión</h3><br/><br/>
	<div id="login">
		<form method="post" action="validar.php">
			<input type="text" name="usuario" value="" placeholder="Usuario: 'admin'"/><br /><br />
			<input type="password" name="password" value="" placeholder="Contraseña: 'admin'"/><br /><br />
			<input type="submit" name="" class="btn btn-primary" value="Ingresar" />

		</form>
		<br /><br />
	</div>

<footer><div class="panel-footer">Este es el pié de página - Copyright &copy; <?php echo date('Y'); ?></div></footer>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>
