<?php 
session_start();
if (isset ($_SESSION["usuario"])) {
//	echo '<script type="text/javascript">window.location="inicio.php";</script>';
} 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
		Login
	</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container">
	
	<h3>Iniciar sesión</h3><br /><br />
	<div id="login">
		<form method="post" action="validar.php">
			<input type="text" name="usuario" value="" placeholder="Usuario"/><br /><br />
			<input type="password" name="password" value="" placeholder="Contraseña"/><br /><br />
			<input type="submit" name="" value="Ingresar" />
		</form>	
		<br /><br />		
	</div>
	
</div>
</div> 
<div id="push"></div>
</div> 
<footer><div class="container">Este es el pie de página</div></footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>