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

	public function altaProductos($curso, $fecha, $hor, $dur, $sena, $cupo){
			$respuesta = $this->db->enviarQuery("INSERT INTO fechas VALUES (null, '$curso', '$fecha', '$hor', '$dur','$sena','$cupo')");

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


	public function modificarProducto($id_fechas,$curso, $fecha, $horario, $duracion, $sena, $cupo){

		$respuesta = $this->db->enviarQuery("UPDATE fechas SET id_curso = '$curso', fecha = '$fecha', horario = '$horario', duracion = '$duracion', sena = '$sena', cupo = '$cupo' WHERE id_fechas = '$id_fechas'");

		if($respuesta){
			return $respuesta;

		}else{
			echo $this->db->error;
			return false;
		}
	}

	public function bajaProducto($id_fechas){

		$respuesta = $this->db->enviarQuery("DELETE FROM fechas WHERE id_fechas = '$id_fechas'");

		if($respuesta){
			return $respuesta;

		}else{
			echo $this->db->error;
			return false;
		}
	}

}
?>
