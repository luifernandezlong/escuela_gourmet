<?php

$usuario = $_POST['nombre'];
$pass = $_POST['password'];

if(empty($usuario) || empty($pass)){
header("Location: login.html");
exit();
}

mysqli_connect('localhost','root','', 'backoffice_eg') or die("Error al conectar " . mysqli_error());

$result = mysqli_query("SELECT * from usuarios where Username='" . $usuario . "'");

if($row = mysqli_fetch_array($result)){
if($row['Password'] == $pass){
session_start();
$_SESSION['usuario'] = $usuario;
header("Location: contenido.php");
}else{
header("Location: login.html");
exit();
}}

?>
