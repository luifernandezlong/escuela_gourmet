<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
	
include('autoload.php');

$base = new BasedeDatosmysqli(SERVIDOR, USUARIO, PASSWORD, BASE);
$usuarioLogin = new Usuario($base); 

//Creamos el usuario con los datos del formulario via post y validamos los datos a ver si son correctos para redirigirlo
if($usuarioLogin->validarUsuario($_POST['usuario'],md5($_POST['password']))){
	
	$_SESSION['usuario'] = $_POST['usuario'];

	header('Location:inicio.php');
	//echo '<script>window.location="inicio.php"</script>'};
}else{
	echo '  <script type="text/javascript">
                alert("Para acceder a este contenido tiene que estar logueado");
                window.location="index.php"
            </script>';
}

?>
</body>
</html>