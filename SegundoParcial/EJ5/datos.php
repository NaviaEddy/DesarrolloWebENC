<?php
include("conexion.php");

$sql = "SELECT id, titulo, imagen FROM libros";
$result = $con->query($sql);

$libros = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $libros[] = array(
            'id' => $row['id'],
            'titulo' => $row['titulo'],
            'imagen' => "http://localhost/DesarrolloWebENC/SegundoParcial/images/$row[imagen]",
        );
    }
    echo json_encode($libros);
} else {
    echo json_encode(array('message' => 'No hay resultados'));
}

$con->close();
?>
