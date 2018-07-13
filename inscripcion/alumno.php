<?php
class Alumno {
	private $db;

	public function __construct($base) {
		$this->db = $base;
		}

	public function getAlumnos(){
		$respuesta = $this->db->enviarQuery("SELECT * FROM inscriptos");
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

	public function altaAlumnos($curso, $id_fechas, $fecha, $nombre, $apellido, $dni, $telefono, $email, $conocio){
			$respuesta = $this->db->enviarQuery("INSERT INTO inscriptos VALUES (NULL,'$curso', '$id_fechas', '$fecha','$nombre','$apellido','$dni', '$telefono', '$email', '$conocio')");

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


}
?>
