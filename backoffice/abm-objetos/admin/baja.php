<?php
	
	include('autoload.php');

	$base = new BasedeDatosmysqli(SERVIDOR, USUARIO, PASSWORD, BASE);
	$productos = new Producto($base); 

	$productos = $productos->bajaProducto($_POST['codigo']);

	if($productos){

		echo 'Producto modificado';

	}

?>