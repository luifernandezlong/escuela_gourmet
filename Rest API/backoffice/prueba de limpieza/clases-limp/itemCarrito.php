<?php
class itemCarrito{
	public $codigo;
	public $producto;
	public $precio;
	public $cantidad;

	public function __construct($codigo, $producto, $precio, $cantidad){
		$this->codigo = $codigo;
		$this->producto = $producto;
		$this->precio = $precio;
		$this->cantidad = $cantidad;
	}
}
?>