<?php

	include('autoload.php');

	$base = new BasedeDatosmysqli(SERVIDOR, USUARIO, PASSWORD, BASE);
	$productos = new Producto($base);

	$productos = $productos->bajaProducto($_POST['id_curso'], $_POST['fecha'], $_POST['horario'], $_POST['duracion'], $_POST['sena'], $_POST['cupo']);

	if($productos){

		echo 'Producto eliminado';

	}

?>
