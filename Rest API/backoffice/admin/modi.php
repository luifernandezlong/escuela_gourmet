<?php

	include('loadFecha.php');

	$base = new BasedeDatosmysqli(SERVIDOR, USUARIO, PASSWORD, BASE);
	$fechas = new Producto($base);
	
	$fechas = $fechas->modificarProductos($_POST['id_fechas'], $_POST['id_curso'], $_POST['fecha'], $_POST['horario'], $_POST['duracion']);
	if($fechas){

		echo 'Fecha modificada';

	}

?>
