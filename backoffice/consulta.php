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
			      <th value="asc" class="columna asc" scope="col" onclick="cambiarorden(\'id_fechas\')">ID</th>
			      <th value ="asc" class="columna asc" scope="col" onclick="cambiarorden(\'id_curso\')">Curso</th>
			      <th value ="asc" class="columna asc" scope="col" onclick="cambiarorden(\'fecha\')">Fecha</th>
			      <th value ="asc" class="columna asc" scope="col" onclick="cambiarorden(\'horario\')">Horario</th>
			      <th value ="asc" class="columna asc" scope="col" onclick="cambiarorden(\'duracion\')">Duración</th>
			      <th value ="asc" class="columna asc" scope="col" onclick="cambiarorden(\'sena\')">Seña</th>
			      <th value ="asc" class="columna asc" scope="col" onclick="cambiarorden(\'cupo\')">Cupo</th>
			      <th scope="col"></th>
			    </tr>
			  </thead>';

		for($i = 0; $i < count($productos); $i++){

		echo'	 
			  <tbody>
			    <tr>
			      <th scope="row">'. $productos[$i]['id_fechas'].'</th>
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