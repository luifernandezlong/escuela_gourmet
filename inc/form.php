<?php
	include('inc/conexion.php');
	$sql = "SELECT *  FROM `curso` WHERE id_curso=".$id;
			$result = $conexion->query($sql);
			if ($result -> num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo '
					<div class="form" style="background-color:'.$row['color'].';">
								<form action="form_procesador.php" method="post" name="formulario" id="section_formulario">
									<h5>¡CONSULTANOS!</h5>

									<div class="form-row">
										<div class="form-group col-xs-6">
											<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
										</div>
										
										<div class="form-group col-xs-6">
											<input type="email" class="form-control" id="email" name="email" placeholder="Email">
										</div>
									</div>
										<div class="form-row">
											<div class="form-group col-xs-6">
												<input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono">
											</div>
											<div class="form-group col-xs-6">
													<input type="text" class="form-control" placeholder="'.$row['title'].'" name="curso" readonly  id="curso">
											</div>
										</div>
	 									<button type="submit" class="btn btn-primary btn-lg">Consultanos</button>

								</form>
							</div>
							<div class="video">
									'.$row['video'].'
							</div>

						';}
					}else{
						echo 'error2';
				}
?>