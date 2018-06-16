<?php
	
	include('autoload.php');

	$base = new BasedeDatosmysqli(SERVIDOR, USUARIO, PASSWORD, BASE);
	$productos = new Producto($base); 

	if (isset($_POST['orden'])){
		$query = "SELECT * FROM productos ORDER BY ".$_POST['orden']." ".$_POST['tipo'];
	}else{
		$query = "SELECT * FROM productos";	
	}
	
	$productos = $productos->getProductos($query);

	if($productos){

		echo '<table class="table">
			  <thead>
			    <tr>
			      <th value="asc" class="columna asc" scope="col" onclick="cambiarorden(\'codigo\')">Codigo</th>
			      <th value ="asc" class="columna asc" scope="col" onclick="cambiarorden(\'producto\')">Producto</th>
			      <th value ="asc" class="columna asc" scope="col" onclick="cambiarorden(\'descripcion\')">Descripcion</th>
			      <th value ="asc" class="columna asc" scope="col" onclick="cambiarorden(\'precio\')">Precio</th>
			      <th scope="col"></th>
			    </tr>
			  </thead>';

		for($i = 0; $i < count($productos); $i++){

		echo'	 
			  <tbody>
			    <tr>
			      <th scope="row">'. $productos[$i]['codigo'].'</th>
			      <td>'. $productos[$i]['producto'].'</td>
			      <td>'. $productos[$i]['descripcion'].'</td>
			      <td>'. '$' . $productos[$i]['precio'].'</td>
			      <td><button type="button" class="btn btn-primary" onclick="agregar('. $productos[$i]['codigo'].',\''. $productos[$i]['producto'].'\','. $productos[$i]['precio'].');">Agregar al carrito</button></td>
			    </tr>';
		}

		echo' </tbody>
			</table>';
	}

?>