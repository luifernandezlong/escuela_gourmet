<?php

	include('autoload.php');

	$base = new BasedeDatosmysqli(SERVIDOR, USUARIO, PASSWORD, BASE);
	$productos = new producto($base);

	$productos = $productos->getProductos();

	if($productos){

		echo '<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">Codigo</th>
			      <th scope="col">Curso</th>
			      <th scope="col">Fecha</th>
			      <th scope="col">Horario</th>
			      <th scope="col">duracion</th>
			      <th scope="col">Modificar</th>
			      <th scope="col">Eliminar</th>
			    </tr>
			  </thead>';
	/*	echo'hola';*/
		for($i = 0; $i < count($productos); $i++){
	/*	echo'chau';*/

		echo '
			  <tbody>
			    <tr>
			      <th scope="row">'. $productos[$i]['id_fechas'].'</th>
			      <td>'. $productos[$i]['id_curso'].'</td>
			      <td>'. $productos[$i]['fecha'].'</td>
			      <td>'. $productos[$i]['horario'].'</td>
			      <td>'. $productos[$i]['duracion'].'</td>
			      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-id_fechas="'. $productos[$i]['id_fechas'].'" data-id_curso="'. $productos[$i]['id_curso'].'" data-fecha="'. $productos[$i]['fecha'].'" data-horario="'. $productos[$i]['horario'].'" data-duracion="'. $productos[$i]['duracion'].'" data-boton="Modificar">Editar</button></td>
			      <td><button type="button" class="btn btn-primary" onclick="baja('. $productos[$i]['id_fechas'].');">Baja</button></td>
			    </tr>';
		}

		echo' </tbody>
			</table>';
			}

?>
