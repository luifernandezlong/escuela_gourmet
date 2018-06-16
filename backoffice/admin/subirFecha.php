<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Backoffice - Escuela Gourmet</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="shortcut icon" href="../../img/favicon.png" />
<link rel="stylesheet" type="text/css" href="../css/backoffice.css">
<link href="http://fonts.googleapis.com/css?family=Asap:400,700" rel="stylesheet" type="text/css">
</head>

<body>
<nav class="navbar navbar-inverse" role="navigation">
	<div class="container-fluid">
			<a href="salir.php" class="btn btn-primary" style="margin-top:7px; float:right;">Cerrar Sesion</a>

	</div>
</nav>
<div class="container">

  <form action="" method="post">
    <div class="form-group">
        <label for="nombre">Codigo</label>
        <input type="text" class="form-control" name="id_fecha" id="id_fecha" readonly="readonly">
    </div>
    <div class="form-group">
      <label for="nombre">Curso/carrera</label>
      <ul>
        <li>1 = Curso de Bartender</li>
        <li>2 = Carrera de Bar Manager</li>
      </ul>
      <input type="text" class="form-control" name="id_curso" id="id_curso" placeholder="1">
    </div>
    <div class="form-group">
      <label for="nombre">Fecha</label>
      <input type="text" class="form-control" name="fecha" id="fecha" placeholder="Ej: 20 de junio">
    </div>
    <div class="form-group">
      <label for="descripcion">Horario</label>
      <input type="text" class="form-control" name="horario" id="horario" placeholder="Ej: Martes y jueves de 10 a 13 hs.">
    </div>
    <div class="form-group">
      <label for="precio">Precio</label>
      <input type="text" class="form-control" name="duracion" id="duracion" placeholder="Ej:1 mes - 8 clases">
    </div>
  </form>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" >Cancelar</button>
    <button type="button" class="btn btn-primary" onclick="altaModi();" id="accionButton">Dar de Alta</button>
  </div>

  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="../boot/js/bootstrap.min.js"></script>
<script src="funciones.js"></script>
</body>
</html>
