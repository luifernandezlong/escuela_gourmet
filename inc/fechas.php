<?php
		include('inc/conexion.php');
		$sql = "SELECT *  FROM `fechas` WHERE id_curso=".$id;
				$result = $conexion->query($sql);
				if ($result -> num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo '

								   		<div class="col-xs-6 ">
								    		<span class="fecha"> '.utf8_encode($row['fecha']).'</span></br>
										    <span class="horario"> '.utf8_encode($row['horario']).'</span></br>
										    <span class="duracion">'.utf8_encode($row['duracion']).'</span>
										</div>'
									;
								}
							}else{
								echo 'not';
							}


			$conexion->close();
	?>