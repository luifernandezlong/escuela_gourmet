<?php

	include('autoload.php');

	$base = new BasedeDatosmysqli(SERVIDOR, USUARIO, PASSWORD, BASE);
	$productos = new Producto($base);

	if (isset($_POST['orden'])){
		$query = "SELECT * FROM fechas ORDER BY ".$_POST['orden']." ".$_POST['tipo'];
	}else{
		$query = "SELECT * FROM fechas";
	}

	$productos = $productos->getProductos($query);

	if($productos){

		echo '<table class="table">
			  <thead>
			    <tr>
			      <th class="columna " scope="col">Curso</th>
			      <th class="columna " scope="col">Fecha</th>
			      <th class="columna " scope="col">Horario</th>
			      <th class="columna " scope="col">Duración</th>
			      <th class="columna " scope="col">Seña</th>
			      <th class="columna " scope="col">Cupo</th>
			      <th scope="col"></th>
			    </tr>
			  </thead>';

		for($i = 0; $i < count($productos); $i++){

		echo'
			  <tbody>
			    <tr>
			      <td>'. $productos[$i]['id_curso'].'</td>
			      <td>'. $productos[$i]['fecha'].'</td>
			      <td>' . $productos[$i]['horario'].'</td>
			      <td>' . $productos[$i]['duracion'].'</td>
			      <td>$' . $productos[$i]['sena'].'</td>
			      <td><button type="button" class="btn btn-primary" onclick="agregar('. $productos[$i]['id_fechas'].','. $productos[$i]['id_curso'].',\''. $productos[$i]['fecha'].'\',\''. $productos[$i]['horario'].'\',\''. $productos[$i]['duracion'].'\',\''. $productos[$i]['sena'].'\',\''. $productos[$i]['cupo'].'\');">Agregar al carrito</button></td>
			    </tr>';
		}

		echo' </tbody>
			</table>';
	}

?>
