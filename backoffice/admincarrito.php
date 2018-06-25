<?php
include ('autoload.php');
session_start();

if (!isset($_SESSION['carrito'])){
	$_SESSION['carrito'] = new carrito();
}

switch ($_POST['accion']) {
	case 'agregar':
		$_SESSION['carrito']->introduce_producto($_POST['id_fechas'],$_POST['id_curso'],$_POST['fecha'],$_POST['duracion'],$_POST['horario'],$_POST['sena']);
		$_SESSION['carrito']->mostrar_productos();
		break;
	case 'vaciar':
		$_SESSION['carrito']->vaciar_carrito();
		$_SESSION['carrito']->mostrar_productos();
		break;
	case 'mas':
		$_SESSION['carrito']->sumar($_POST['item']);
		$_SESSION['carrito']->mostrar_productos();
		break;
	case 'menos':
		$_SESSION['carrito']->restar($_POST['item']);
		$_SESSION['carrito']->mostrar_productos();
		break;
	case 'eliminar':
		$_SESSION['carrito']->eliminar_producto($_POST['item']);
		$_SESSION['carrito']->mostrar_productos();
		break;
	default:
		# code...
		break;
}
?>