<?php
class producto {
	private $db;

	public function __construct($base) {
		$this->db = $base;
		}

	public function getProductos(){
		$respuesta = $this->db->enviarQuery("SELECT * FROM fechas");
		if($respuesta) {
			//si la query esta ok devuelvo respuesta
			return $respuesta;
			} else {
			if(!$respuesta && $this->db->error != '') {
				//si falla algo muestro el error
				echo $this->db->error;
				return false;
			} else {
				//si no muestro falso
				return false;
				}
			}
	}
/*	public function getProductosa(){
		$respuesta = $this->db->enviarQuery("SELECT * FROM fechas ORDER BY fecha ASC");
		if($respuesta) {
			//si la query esta ok devuelvo respuesta
			return $respuesta;
			} else {
			if(!$respuesta && $this->db->error != '') {
				//si falla algo muestro el error
				echo $this->db->error;
				return false;
			} else {
				//si no muestro falso
				return false;
				}
			}
	}

	public function getProductosd(){
		$respuesta = $this->db->enviarQuery("SELECT * FROM fechas ORDER BY fecha DESC");
		if($respuesta) {
			//si la query esta ok devuelvo respuesta
			return $respuesta;
			} else {
			if(!$respuesta && $this->db->error != '') {
				//si falla algo muestro el error
				echo $this->db->error;
				return false;
			} else {
				//si no muestro falso
				return false;
				}
			}
	}

	public function getCodigoa(){
		$respuesta = $this->db->enviarQuery("SELECT * FROM fechas ORDER BY id_curso ASC");
		if($respuesta) {
			//si la query esta ok devuelvo respuesta
			return $respuesta;
			} else {
			if(!$respuesta && $this->db->error != '') {
				//si falla algo muestro el error
				echo $this->db->error;
				return false;
			} else {
				//si no muestro falso
				return false;
				}
			}
	}

	public function getCodigod(){
		$respuesta = $this->db->enviarQuery("SELECT * FROM fechas ORDER BY id_curso DESC");
		if($respuesta) {
			//si la query esta ok devuelvo respuesta
			return $respuesta;
			} else {
			if(!$respuesta && $this->db->error != '') {
				//si falla algo muestro el error
				echo $this->db->error;
				return false;
			} else {
				//si no muestro falso
				return false;
				}
			}
	}

	public function getPrecioa(){
		$respuesta = $this->db->enviarQuery("SELECT * FROM  fechas ORDER BY horario ASC");
		if($respuesta) {
			//si la query esta ok devuelvo respuesta
			return $respuesta;
			} else {
			if(!$respuesta && $this->db->error != '') {
				//si falla algo muestro el error
				echo $this->db->error;
				return false;
			} else {
				//si no muestro falso
				return false;
				}
			}
	}

	public function getPreciod(){
		$respuesta = $this->db->enviarQuery("SELECT * FROM  fechas ORDER BY horario DESC");
		if($respuesta) {
			//si la query esta ok devuelvo respuesta
			return $respuesta;
			} else {
			if(!$respuesta && $this->db->error != '') {
				//si falla algo muestro el error
				echo $this->db->error;
				return false;
			} else {
				//si no muestro falso
				return false;
				}
			}
	}

*/


	public function altaProductos($curso, $fecha, $hor, $dur){
		$respuesta = $this->db->enviarQuery("INSERT INTO fechas VALUES (null,  id_curso = '$curso', fecha = '$fecha', horario = '$hor', duracion = '$dur')");

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

	public function modificarProducto($curso, $fecha, $hor, $dur){

		$respuesta = $this->db->enviarQuery("UPDATE fechas SET id_curso = '$curso', fecha = '$fecha', horario = '$hor', duracion = '$dur' WHERE id_fechas = '$id'");

		if($respuesta){
			//si la query esta ok devuelvo respuesta
			return $respuesta;

		}else{
			echo $this->db->error;
			return false;
		}
	}

	public function bajaProducto($id){

		$respuesta = $this->db->enviarQuery("DELETE FROM fechas WHERE id_fechas = '$id'");

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
