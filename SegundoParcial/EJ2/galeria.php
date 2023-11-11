<?php
include("conexion.php");


$sql = "SELECT id, imagen FROM libros";

$result = $con->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='img'>";
            echo "<button class='img' onclick=\"cargarImagen('$row[imagen]')\"><img src='http://localhost/DesarrolloWebENC/SegundoParcial/images/$row[imagen]' width='50px' height='75px'></button>";
            echo "</div>";
            
            
        }
    } else {
        echo "No hay imágenes disponibles.";
    }
    $con->close();
    ?>
</div>


</body>
</html>
