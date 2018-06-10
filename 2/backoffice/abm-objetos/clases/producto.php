<?php
class Producto{
	private $db;

	public function __construct($base){
		$this->db = $base;
	}
	
	public function getProductos($query){
		
		$respuesta = $this->db->enviarQuery($query);

		if($respuesta){
			//si la query esta ok devuelvo respuesta
			return $respuesta;
		
		}else{
			
			if(!$respuesta && $this->db->error != ''){
				//si falla algo muestro el error
				echo $this->db->error;
				return false; 
			
			}else{
				//si no muestro falso
				return false;
			}
		}

	}

	public function altaProductos($nom,$des,$precio){
		
		$respuesta = $this->db->enviarQuery("INSERT INTO productos VALUES (null, '$nom', '$des', '$precio')");

		if($respuesta){
			//si la query esta ok devuelvo respuesta
			return $respuesta;
		
		}else{
			
			if(!$respuesta && $this->db->error != ''){
				//si falla algo muestro el error
				echo $this->db->error;
				return false; 
			
			}else{
				//si no muestro falso
				return false;
			}
		}

	}

	public function modificarProducto($cod,$nom,$des,$precio){
		
		$respuesta = $this->db->enviarQuery("UPDATE productos SET producto = '$nom', descripcion = '$des', precio = $precio WHERE codigo = $cod");

		if($respuesta){
			//si la query esta ok devuelvo respuesta
			return $respuesta;
		
		}else{
			echo $this->db->error;
			return false; 			
		}
	}

	public function bajaProducto($cod){
		
		$respuesta = $this->db->enviarQuery("DELETE FROM productos WHERE codigo = $cod");

		if($respuesta){
			//si la query esta ok devuelvo respuesta
			return $respuesta;
		
		}else{
			echo $this->db->error;
			return false; 			
		}
	}
	
}
?>