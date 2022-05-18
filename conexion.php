<?php

$servidor="mysql-5603.dinaserver.com";
$root="carlos1";
$clave="Super_100";
$baseDeDatos="sugar";

$conn = mysqli_connect($servidor, $root, $clave, $baseDeDatos);

if(!$conn){
echo"Error en la conexion con el servidor";
}  


?>