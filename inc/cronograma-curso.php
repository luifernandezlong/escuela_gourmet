<?php
	include('inc/conexion.php');
	$sql = "SELECT *  FROM `curso` WHERE id_curso=".$id;
			$result = $conexion->query($sql);
			if ($result -> num_rows > 0)
			{
				while($row = $result->fetch_assoc())
				{
					echo'
					<h3 style="color:'.$row['color'].';" class="titulos">Cronograma del '.$row['title'].'</h3>'
					;
				}
			}
?>
<div class="cronograma">

	<?php
		include('inc/conexion.php');
		$sql = "SELECT *  FROM `clases`  WHERE id_curso=".$id;
				$result = $conexion->query($sql);
				if ($result -> num_rows > 0)
				{
					while($row = $result->fetch_assoc())
					{
							echo'	
							<div class="item-cronograma">
							<span>'.utf8_encode($row['nombre']).'</span>
							<button type="button" class="btn btn-primary btn-cronograma" data-toggle="modal" data-target="#'.$row['id_clase'].'">
								  Detalle
								</button>
								<!-- Modal -->
								<div class="modal fade" id="'.$row['id_clase'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								  <div class="modal-dialog modal-dialog-centered" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
										    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
										    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										      <span aria-hidden="true">&times;</span>
										    </button>
									   </div>
										<div class="modal-body">
										    '.utf8_encode($row['texto']).'
									  	</div>
									   <div class="modal-footer">
										    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
									   </div>
								    </div>
								</div>
							</div>
					</div>
					';
				}
			}
	?>
</div>