<?php

	include('loadFecha.php');

	$base = new BasedeDatosmysqli(SERVIDOR, USUARIO, PASSWORD, BASE);
	$fechas = new Producto($base);

	$fechas = $fechas->altaProductos($_POST['id_fechas'], $_POST['id_curso'], $_POST['fecha'], $_POST['horario'], $_POST['duracion']);

	if($fechas){

		echo 'Fecha dada de alta';

	}

?>
