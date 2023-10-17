<?php
include("conexion.php");
$nro = $_POST['numero'];
$tipo = $_POST['tipo'];
$bano = $_POST['bano'];
$espacio = $_POST['espacio'];
$precio = $_POST['precio'];
$id = $_POST['id'];
$sql = "";

foreach ($_FILES as $key => $file){

    /*echo "Contenido $key";
    echo "<pre>";
    print_r($file); 
    echo "</pre>";*/
    $id_fotos = $_POST["id_fotos_$key[11]"];
    
    if($file['error'] === 0 ){

        $archivo_original = $_FILES[$key]['name'];
        $arreglo = explode(".", $archivo_original);
        $extension = $arreglo[1];
        $fotografia = uniqid() . '.' . $extension;
    
        copy($_FILES[$key]['tmp_name'], 'imagenes/' . $fotografia);

        $sql .= "UPDATE fotos_habitacion set id_habitacion=$tipo, fotografia='$fotografia' WHERE id=$id_fotos;"; 
        $sql .= "UPDATE habitacion set nro=$nro, id_tipo_habitacion=$tipo, bano_privado=$bano, espacio=$espacio, precio=$precio WHERE  id=$id; ";
    
    } else {

        $sql .= "UPDATE habitacion set nro=$nro, id_tipo_habitacion=$tipo, bano_privado=$bano, espacio=$espacio, precio=$precio WHERE  id=$id; ";
        $sql .= "UPDATE fotos_habitacion set id_habitacion=$tipo WHERE id=$id_fotos;";  
        
    }
}

//echo $sql;  
//echo "<br>";
if ($con->multi_query($sql) === TRUE) {
    echo "Se actualizo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close();
?>
<meta http-equiv="refresh" content="3; url=read.php" />
