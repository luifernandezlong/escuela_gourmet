<?php
  include('conexion.php');

  $query = "SELECT area FROM cursos";
  $resultado = mysqli_query($conexion, $query);

    if( $resultado ){
      while ( $data = mysqli_fetch_assoc( $resultado )){
       /*$arreglo ["data"][] = $data;*/
       $array["data"] = [];
      echo 'hola';
      }
      echo json_encode($array);
    }else{
      echo 'error';
    }
    /*
      if( !$resultado ){
        die("Error");
      }else{
        while ( $data= mysqli_fetch_assoc($resultado)){
        /*  $arreglo ["data"][] = $data;
        echo 'hola';
        }
        echo json_encode($arreglo);
      }*/
  /*mysqli_free_result($resultado);*/
?>
