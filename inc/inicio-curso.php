<?php
			include('inc/conexion.php');
			$sql = "SELECT *  FROM `curso` WHERE id_curso=".$id;
			$result = $conexion->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							echo '
									<div style="background:url('.$row['bg'].') no-repeat center;background-size:cover" class="inicio-curso container-fluid">
										<div class="contenido-inicio-curso">
											<h1><span>CURSO DE</span>'.$row['h1'].'</h1>
											<p>'.utf8_encode($row['descripcion']).'</p>
											<div class="cert">
												<img src="img/certificados.png" alt="Certificados oficiales" title="certificados-oficiales" />
												<span>CERTIFICADOS OFICIALES</span>
												<p>Brindamos dos certificados, uno avalado por el Ministerio de Educación y otro privado con validez internacional.</p>
											</div>
											<div class="precio">
												<span class="cant-cuota">'.$row['cantidad_cuotas'].'</span>
												<span>$'.$row['cuota'].'</span>
												<a class="btn btn-primary btn-lg">Contacto</a>
												<a class="btn btn-primary btn-lg" href="inscripcion/inscripcion.php?id='.$row['id_curso'].'">Inscribirme</a>
											</div>
										</div>
									</div>

										<h2 style="color:'.$row['color'].';"  class="titulos">Inicios del '.$row['title'].'</h2>



							'
					;
					}
					} else{
								echo 'Ha habido un error, por favor vuelva a cargar la página.';
							}



				?>