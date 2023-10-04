<?php
include("conexion.php");

$nombre = $_post['nombres'];
$apellido = $_post['apellidos'];
$CU = $_post['CU'];

$sql = "INSERT INTO alumno(nombres, apellidos, cu) values ('$nombre', '$apellido', '$CU')";

echo $sql;

?>