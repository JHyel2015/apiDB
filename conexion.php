<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

// DATOS DE CONEXION A LA BASE DE DATOS
function conexion() {
    $servidor = "31.193.228.111";    //Servidor
    $usuario = "x8cq9t23_richard_heredia";          //Usuario
    $clave = "Austincito22";             //Clave
    $bd = "x8cq9t23_richard_heredia_db";		            //Base de datos
  
    $conexion = mysqli_connect($servidor,$usuario,$clave, $bd);
    
    if (mysqli_connect_errno($conexion)) {
      die("Failed to connect:" . mysqli_connect_error());
    }
  
    mysqli_set_charset($conexion, "utf8");

    return $conexion;
  }

$con = conexion();

?>