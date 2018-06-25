<?php
class itemCarrito{
	public $id_fechas;
	public $id_curso;
	public $fecha;
	public $horario;
	public $duracion;
	public $sena;
	public $cantidad;

	public function __construct($id_fechas, $id_curso, $fecha, $horario, $duracion, $sena, $cantidad){
		$this->id_fechas = $id_fechas;
		$this->id_curso = $id_curso;
		$this->fecha = $fecha;
		$this->horario = $horario;
		$this->duracion = $duracion;
		$this->sena = $sena;
		$this->cantidad = $cantidad;
	}
}
?>
