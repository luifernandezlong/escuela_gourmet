<?php
	include('inc/conexion.php');
	$sql = "SELECT *  FROM `beneficios`  WHERE tipo='grande' and id_curso=".$id;
	$result = $conexion->query($sql);
	if ($result -> num_rows > 0) {
	while($row = $result->fetch_assoc()) {
			echo '
				<div class="beneficio">
					<img src="	'.$row['icono'].'" class="icono-benef"/>
					<button type="button" class="btn titulo-beneficio dropdown-toggle" data-toggle="dropdown"><span class="mas-benef">+</span>
						'.utf8_encode($row['titulo']).'
					</button>

					<div class="dropdown-menu">
						'.utf8_encode($row['texto']).'
					</div>
				 </div>
			';
		}
	 }
?>


<div style="height: 10px; clear:both; width: 100%;"></div>


<?php
	include('inc/conexion.php');
	$sql = "SELECT *  FROM `beneficios` WHERE tipo='chico' and id_curso=".$id;
	$result = $conexion->query($sql);
	if ($result -> num_rows > 0) {
	while($row = $result->fetch_assoc()) {
			echo '
				<div class="beneficio">
					<img src="	'.$row['icono'].'" class="icono-benef"/>
					<button type="button" class="btn titulo-beneficio dropdown-toggle" data-toggle="dropdown"><span class="mas-benef">+</span>
						'.utf8_encode($row['titulo']).'
					</button>

					<div class="dropdown-menu">
						'.utf8_encode($row['texto']).'
					</div>
				 </div>
			';
		}
	 }
?>