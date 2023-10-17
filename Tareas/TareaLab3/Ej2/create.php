<?php

include("conexion.php");
$nro=$_POST['nro'];
$tipo=$_POST['tipo'];
$bano=$_POST['bano'];
$espacio=$_POST['espacio'];
$precio=$_POST['precio'];
$sql = "";

if (empty($_FILES['fotografia'])) {

    $archivo_original = $_FILES['fotografia']['name'];
    $arreglo = explode(".", $archivo_original);
    $extension = $arreglo[1];
    $fotografia = uniqid() . '.' . $extension;
    copy($_FILES['fotografia']['tmp_name'],'images/'.$fotografia);

    $sql.="INSERT INTO habitacion(nro, id_tipo_habitacion, bano_privado, espacio, precio) values 
    ('$nro','$tipo', '$bano', '$espacio', '$precio') ";
    $sql.="INSERT INTO fotos_habitacion(id_tipo_habitacion, fotografia) values 
    ('$tipo', '$fotografia') ";

} else {
    $sql.="INSERT INTO habitacion(nro, id_tipo_habitacion, bano_privado, espacio, precio) values 
    ('$nro','$tipo', '$bano', '$espacio', '$precio') ";
}

 //echo $sql;
 if ($con->multi_query($sql) === TRUE) {
    echo "Se creo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close()
?>
<meta http-equiv="refresh" content="3; url=read.php" />


