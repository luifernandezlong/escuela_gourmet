<?php
	
	include('autoload.php');

	$base = new BasedeDatosmysqli(SERVIDOR, USUARIO, PASSWORD, BASE);
	$productos = new Producto($base); 

	$productos = $productos->modificarProducto($_POST['codigo'],$_POST['nombre'], $_POST['descripcion'], $_POST['precio']);

	if($productos){

		echo 'Producto modificado';

	}

?>