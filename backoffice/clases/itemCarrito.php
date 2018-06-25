<?php
class itemCarrito{
	public $id_fechas;
	public $id_curso;
	public $fecha;
	public $horario;
	public $duracion;
	public $sena;

	public function __construct($id_fechas, $id_curso, $fecha, $horario, $duracion, $sena){
		$this->id_fechas = $id_fechas;
		$this->id_curso = $id_curso;
		$this->fecha = $fecha;
		$this->horario = $horario;
		$this->duracion = $duracion;
		$this->sena = $sena;
	}
}
?>