<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
} else {
   echo "Esta pagina es solo para usuarios registrados.<br>";
   echo "<br><a href='login.html'>Login</a>";
   echo "<br><br><a href='index.html'>Registrarme</a>";
exit;
}
$now = time();
if($now > $_SESSION['expire']) {
session_destroy();
echo "Su sesion a terminado,
<a href='login.html'>Necesita Hacer Login</a>";
exit;
}
?>
<!DOCTYPE html>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
<head>
<title>Panel de Control</title>
</head>
<body>
<h1>Panel de Control</h1>

<ul>
  <li>Editar Preferencias</li>
  <li>Editar Configuracion</li>
  <li>etc.</li>
</ul>
<br><br>
<a href=logout.php>Cerrar Sesion X </a>
</body>
</html>
