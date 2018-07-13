<?php

	//include('../conexion.php');
	include('autoload.php');

	$base = new BasedeDatosmysqli(SERVIDOR, USUARIO, PASSWORD, BASE);
	$alumno = new Alumno($base);

	$alumno = $alumno->altaAlumnos($_POST['curso'], $_POST['id_fechas'], $_POST['fecha'], $_POST['nombre'], $_POST['apellido'], $_POST['dni'], $_POST['telefono'], $_POST['email'], $_POST['conocio']);

	if($alumno){

		echo 'Alumno dada de alta';

	}
/*	error_log($_POST['id_fechas'], $_POST['id_curso'], $_POST['fecha'], $_POST['horario'], $_POST['duracion']);*/

?>
