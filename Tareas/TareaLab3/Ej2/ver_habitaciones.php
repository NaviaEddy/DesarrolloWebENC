<?php 
include("conexion.php");
$id=$_GET['id'];

$sql = "SELECT fotografia FROM fotos_habitacion where id_habitacion=$id ";

$result=$con->query($sql);
    
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        echo "<img src='http://localhost/DesarrolloWebENC/Laboratorios/LAB_03/Ej2/imagenes/$row[fotografia]' width='300px' >";
    }
    echo "<form action='ingresar_fotografias.php' method='post' enctype='multipart/form-data'>";
    echo "<div>";
        echo "<label for='fotografia'>Añadir fotografias</label>";
        echo "<input type='file' name='fotografia'>";
    echo "</div>";
    echo "<input type='hidden' name='id' value='$id'>";

    echo "<div class='button_1'>";
        echo "<input type='submit' value='Agregar fotografia'>";
    echo "</div>";

    echo "</form>";

} else {

    echo "No se encontraron fotografias de la habitacion";

    echo "<form action='ingresar_fotografias.php' method='post' enctype='multipart/form-data'>";
        echo "<div>";
            echo "<label for='fotografia'>Añadir fotografias</label>";
            echo "<input type='file' name='fotografia'>";
        echo "</div>";
        echo "<input type='hidden' name='id' value='$id'>";

        echo "<div class='button_1'>";
            echo "<input type='submit' value='Agregar fotografia'>";
        echo "</div>";

    echo "</form>";
}

?>
