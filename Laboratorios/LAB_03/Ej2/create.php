<?php

include("conexion.php");
$nro=$_POST['nro'];
$tipo=$_POST['tipo'];
$bano=$_POST['bano'];
$espacio=$_POST['espacio'];
$precio=$_POST['precio'];


$sql="INSERT INTO habitacion(nro, id_tipo_habitacion, bano_privado, espacio, precio) values 
('$nro','$tipo', '$bano', '$espacio', '$precio') ";

 //echo $sql;
 if ($con->query($sql) === TRUE) {
    echo "Se creo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close()
?>
<meta http-equiv="refresh" content="3; url=read.php" />


