<?php
class carrito{
	public $array_productos;

	public function __construct(){
		$this->array_productos = array();
	}

	public function introduce_producto($cod,$prod,$precio){
		for ($i=0;$i<count($this->array_productos);$i++){
			if ($this->array_productos[$i]->codigo == $cod) break;
		}

		if ($i<count($this->array_productos)){
			$this->array_productos[$i]->cantidad ++;
		}else{
			$producto = new itemCarrito($cod,$prod,$precio,1);
			$this->array_productos[]= $producto;
		}
		
	}

	public function eliminar_producto($item){
		unset($this->array_productos[$item]);
		$this->array_productos = array_values($this->array_productos);
	}

	public function sumar($item){
		$this->array_productos[$item]->cantidad ++;
	}

	public function restar($item){
		if ($this->array_productos[$item]->cantidad > 1){
			$this->array_productos[$item]->cantidad --;
		}else{
			unset($this->array_productos[$item]);
			$this->array_productos = array_values($this->array_productos);
		}
	}

	public function mostrar_productos(){
		//echo '<pre>'; var_dump($_SESSION['carrito']); echo '</pre>';

		if (count($this->array_productos)>0){
			echo '<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">Codigo</th>
			      <th scope="col">Producto</th>
			      <th scope="col">Precio unitario</th>
			      <th scope="col">Cantidad</th>
			      <th scope="col">Total</th>
			      <th scope="col"></th>
			      <th scope="col"></th>
			      <th scope="col"></th>
			    </tr>
			  </thead>';
			for ($i=0;$i<count($this->array_productos);$i++){

			echo'	 
				  <tbody>
				    <tr>
				      <th scope="row">'.$this->array_productos[$i]->codigo.'</th>
				      <td>'.$this->array_productos[$i]->producto.'</td>
				      <td>'. '$' .number_format($this->array_productos[$i]->precio,2).'</td>
				      <td>'.$this->array_productos[$i]->cantidad.'</td>
				      <td>'. '$' .number_format(($this->array_productos[$i]->precio * $this->array_productos[$i]->cantidad),2).'</td>
				      <td><button type="button" class="btn btn-primary" onclick="eliminar('.$i.');">Eliminar</button></td>
				      <td><button type="button" class="btn btn-primary" onclick="mas('.$i.');">+</button></td>
				      <td><button type="button" class="btn btn-primary" onclick="menos('.$i.');">-</button></td>
				    </tr>';
			}
			echo' </tbody>
				</table>';
		}else {
		
			echo 'Todavia no tiene ningun producto';
		}
	}

	public function vaciar_carrito(){
		unset($this->array_productos);	
	}

}
?>