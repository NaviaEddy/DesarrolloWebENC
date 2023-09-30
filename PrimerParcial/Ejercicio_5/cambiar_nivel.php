<?php
include("conexion.php");

$correo = $_POST["correo"];
$nuevo_nivel = $_POST["nuevo_nivel"];

$sql = "UPDATE usuario SET rol = '$nuevo_nivel' WHERE correo = '$correo'";
if ($con->query($sql) === TRUE) {
    echo "actualizado correctamente";
} else {
    echo "Error al actualizar el nivel: " . $con->$error;
}
header("Location:pregunta5.php");
?>
