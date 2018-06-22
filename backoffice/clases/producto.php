<?php
class Producto {
	private $db;

	public function __construct($base) {
		$this->db = $base;
		}

	public function getProductos(){
		$respuesta = $this->db->enviarQuery("SELECT * FROM fechas");
		if($respuesta) {
			return $respuesta;
			} else {
			if(!$respuesta && $this->db->error != '') {
				echo $this->db->error;
				return false;
			} else {
				//si no muestro falso
				return false;
				}
			}
	}

	public function altaProductos($curso, $fecha, $hor, $dur){
			$respuesta = $this->db->enviarQuery("INSERT INTO fechas VALUES (null, '$curso', '$fecha', '$hor', '$dur')");

			if($respuesta){
				return $respuesta;

			}else{

				if(!$respuesta && $this->db->error != ''){
					echo $this->db->error;
					return false;

				}else{
					return false;
				}
			}

		}


	public function modificarProducto($id,$curso, $fecha, $hor, $dur){

		$respuesta = $this->db->enviarQuery("UPDATE fechas SET '$curso','$fecha','$hor', '$dur' WHERE id_fechas = '$id'");

		if($respuesta){
			return $respuesta;

		}else{
			echo $this->db->error;
			return false;
		}
	}

	public function bajaProducto($id){

		$respuesta = $this->db->enviarQuery("DELETE FROM fechas WHERE id_fechas = '$id'");

		if($respuesta){
			return $respuesta;

		}else{
			echo $this->db->error;
			return false;
		}
	}

}
?>
