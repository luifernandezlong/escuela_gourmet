<?php
	
	include('autoload.php');

	$base = new BasedeDatosmysqli(SERVIDOR, USUARIO, PASSWORD, BASE);
	$productos = new producto($base); 
	$productos = $productos->getProductos();

	

		echo '<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">C&oacute;digo</th>
			      <th scope="col">Producto</th>
			      <th scope="col">Descripci&oacute;n</th>
			      <th scope="col">Precio</th>
			      <th scope="col"></th>
			    </tr>
			  </thead>';
			  
		if($productos){

		for($i = 0; $i < count($productos); $i++) {

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