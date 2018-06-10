<?php
	
	include('autoload.php');

	$base = new BasedeDatosmysqli(SERVIDOR, USUARIO, PASSWORD, BASE);
	$productos = new producto($base); 

	$productos = $productos->getProductos();

	if($productos){

		/*echo '<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">Codigo</th>
			      <th scope="col">Producto</th>
			      <th scope="col">Descripcion</th>
			      <th scope="col">Precio</th>
			      <th scope="col">Modificar</th>
			      <th scope="col">Eliminar</th>
			    </tr>
			  </thead>';*/
		echo'hola';
		for($i = 0; $i < count($productos); $i++){
		echo'chau';

		/*echo'	 
			  <tbody>
			    <tr>
			      <th scope="row">'. $productos[$i]['codigo'].'</th>
			      <td>'. $productos[$i]['producto'].'</td>
			      <td>'. $productos[$i]['descripcion'].'</td>
			      <td>'. '$' . $productos[$i]['precio'].'</td>
			      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-codigo="'. $productos[$i]['codigo'].'" data-producto="'. $productos[$i]['producto'].'" data-descripcion="'. htmlspecialchars($productos[$i]['descripcion']).'" data-precio="'. $productos[$i]['precio'].'" data-boton="Modificar">Editar</button></td>
			      <td><button type="button" class="btn btn-primary" onclick="baja('. $productos[$i]['codigo'].');">Baja</button></td>
			    </tr>';*/
		}

	/*	echo' </tbody>
			</table>';
*/	}

?>