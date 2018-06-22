<?php

	include('autoload.php');

	$base = new BasedeDatosmysqli(SERVIDOR, USUARIO, PASSWORD, BASE);
	$productos = new Producto($base);

	$productos = $productos->altaProductos($_POST['id_curso'], $_POST['fecha'], $_POST['horario'], $_POST['duracion']);

	if($productos){

		echo 'Fecha dada de alta';

	}
/*	error_log($_POST['id_fechas'], $_POST['id_curso'], $_POST['fecha'], $_POST['horario'], $_POST['duracion']);*/

?>
