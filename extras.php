			// $sql="SELECT title, bg, h1, descripcion, cantidad_cuotas, cuota, video, divisor  FROM `curso` WHERE tipo='curso'";





/////////////////////////////////////////////
/*$host="localhost";
$usuario="root";
$contraseña="";
$base="escuela_gourmet";

$conexion= new mysqli($host, $usuario,$contraseña,$base);
if($conexion -> connect_errno){
	die("Falló la conexión:(".$conexion -> mysqli_connect_errno().")".$conexion -> mysqli_connect_eror());
}
/*define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BASE','escuela_gourmet');
*/
/*
*/

//localhost= servidor
//root =usuario
// = pass
//escuela_gourmet= base de datos





						<?php
								include('inc/conexion.php');
								$sql = "SELECT *  FROM `curso` AS c JOIN `clases` AS d ON c.id_curso=d.id_curso WHERE c.id_curso=".$id;
										$result = $conexion->query($sql);
										if ($result -> num_rows > 0)
										{
											while($row = $result->fetch_assoc())
											{
												echo'
												
													<div class="container-fluid">
																<div class="col-xs-6" style="float:left;" >
																	<span> '.utf8_encode($row['id_clase']).''.utf8_encode($row['nombre']).'</span>
																</div>

																<div class="col-xs-6" style="float:left;">
																	<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Detalle</button>

																	<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
																	  <div class="modal-dialog modal-lg">
																	    <div class="modal-content">
																	      '.utf8_encode($row['texto']).'
																	    </div>
																	  </div>
																	</div>
																</div>
													</div>
													';
											}
										}

						?>





							<div class="container">
 
  <div class="panel-group" id="accordion">
						<?php
								include('inc/conexion.php');
								$sql = "SELECT *  FROM `clases`  WHERE id_curso=".$id;
										$result = $conexion->query($sql);
										if ($result -> num_rows > 0)
										{
											while($row = $result->fetch_assoc())
											{
												echo'	
												   <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse">'.utf8_encode($row['nombre']).'</a>
        </h4>
      </div>
      <div id="collapse" class="panel-collapse collapse in">
        <div class="panel-body">'.utf8_encode($row['texto']).'</div>
      </div>
													
														 
													';
											}
										}

						?>
</div></div>

				<?php
								include('inc/conexion.php');
								$sql = "SELECT *  FROM `clases`  WHERE id_curso=".$id;
										$result = $conexion->query($sql);
										if ($result -> num_rows > 0)
										{
											while($row = $result->fetch_assoc())
											{
												echo'	
												<div>
													<button type="button" class="btn btn-info" data-toggle="collapse" data-target="'.$row['id_clase'].'">'.utf8_encode($row['nombre']).'</button>
  <div id="'.$row['id_clase'].'" class="collapse">
    '.utf8_encode($row['texto']).'
  </div></div>
														 
													';
											}
										}

						?>
						<?php
								include('inc/conexion.php');
								$sql = "SELECT *  FROM `clases`  WHERE id_curso=".$id;
										$result = $conexion->query($sql);
										if ($result -> num_rows > 0)
										{
											while($row = $result->fetch_assoc())
											{
												echo'	
												<div>
													<button type="button" class="btn btn-info" data-toggle="collapse" data-target="prueba">'.utf8_encode($row['nombre']).'</button>
  <div id="prueba" class="collapse">
    '.utf8_encode($row['texto']).'
  </div></div>
														 
													';
											}
										}

						?>