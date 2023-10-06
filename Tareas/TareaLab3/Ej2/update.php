<?php
include("conexion.php");
$nro = $_POST['numero'];
$tipo = $_POST['tipo'];
$bano = $_POST['bano'];
$espacio = $_POST['espacio'];
$precio = $_POST['precio'];
$id = $_POST['id'];


$sql = "UPDATE habitacion set nro=$nro, id_tipo_habitacion=$tipo, bano_privado=$bano, espacio=$espacio, precio=$precio WHERE  id=$id ";

// echo $sql;
if ($con->query($sql) === TRUE) {
    echo "Se actualizo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close()
?>
<meta http-equiv="refresh" content="3; url=read.php" />