<?php
class Usuario{
	private $db;

	public function __construct($base){
		$this->db = $base;
	}
	
	public function validarUsuario($usuario, $pass){
		
		$respuesta = $this->db->enviarQuery("SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$pass'");

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
	
}
?>