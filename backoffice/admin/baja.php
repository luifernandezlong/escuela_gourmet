<?php

	include('autoload.php');

	$base = new BasedeDatosmysqli(SERVIDOR, USUARIO, PASSWORD, BASE);
	$fechas = new Producto($base);

	$fechas = $fechas->bajaProducto($_POST['id_fechas'], $_POST['id_curso'], $_POST['fecha'], $_POST['horario'], $_POST['duracion']);

	if($fechas){

		echo 'Producto modificado';

	}

?>
