<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      include('conexion.php');
    ?>
    <div>
<?php
$resultado = mysql_query("SELECT * FROM curso");

while ($fila = mysql_fetch_array($resultado, MYSQL_ASSOC)) {
   /*printf("ID: %s  Nombre: %s", $fila["id"], $fila["nombre"]);*/
  echo 'hola';
}

mysql_free_result($resultado);

/*$resultPendientes = mysql_query("SELECT * FROM cursos");
         if ($rowPendientes = mysql_fetch_array($resultPendientes)){
         do {
           echo 'hola';


         echo '<a id="ped-pendiente" style="cursor:pointer;">';
         echo '<strong>N&ordm;</strong><input type="hidden" value="'.$rowPendientes["id_pedido_trafico"].'" id="idpedido">'.$rowPendientes["id_pedido_trafico"].'<br>';
         echo '<strong>Hora:</strong> '.$rowPendientes["horaservicio"].'<br>';
         echo '<strong>Cliente:</strong> '.$rowPendientes["id_cliente"].' - '.$rowPendientes["razonsocial"].'<br>';
         echo '<strong>Direcci&oacute;n:</strong> '.$rowPendientes["direccion"].'<br>';
         echo '<strong>Solicitante:</strong> '.$rowPendientes["solicitante"].'<br>';
         echo '</a>';

         }
         while ($rowPendientes = mysql_fetch_array($resultPendientes));
         } else {
         echo 'No hay Pedidos Pendientes.';
         }
*/
?>

</div>

<div id="detallesdepedido">

</div>
  </body>
</html>
