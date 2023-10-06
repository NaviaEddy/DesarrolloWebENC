<?php
include("conexion.php");

echo "<h1>BASE DE DATOS HABITACION</h1>";

echo "<form action='read.php' method='GET'>";

echo "<div class='buscador'>";
    echo "<label for='buscar'></label>";
    echo "<input type='text' name='buscar' >";
    echo "<input type='submit' value='Buscar'>";
echo "</div>";

echo "</form>";

$sql = "SELECT id, nro, id_tipo_habitacion, bano_privado, espacio, precio FROM habitacion";

if (isset($_GET['buscar']))
{
    $buscar=$_GET['buscar'];
    $sql .=" WHERE id_tipo_habitacion like '%$buscar%' ";
}

$result = $con->query($sql);

if ($result->num_rows > 0) {

    echo "<table>";
    echo "<tr>
            <th>Nro</th>
            <th>tipo_habitacion</th>
            <th>bano_privado</th>
            <th>espacio</th>
            <th>precio</th>
            <th>operacion</th>
         </tr>";   

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["nro"] . "</td>";
        echo "<td>" . $row["id_tipo_habitacion"] . "</td>";
        echo "<td>" . $row["bano_privado"] . "</td>";
        echo "<td>" . $row["espacio"] . "</td>";
        echo "<td>" . $row["precio"] . "</td>";
        echo "<td>";
            echo "<div class='container_1'>";
                echo "<div class='button_1'>";
                    echo "<a href='editar_habitaciones.php?id=$row[id]&id2=$row[id_tipo_habitacion]'>Editar</a>";
                echo "</div>";
                echo "<div class='button_1'>";
                    echo "<a href='eliminar_habitaciones.php?id= $row[id];'>Eliminar</a>";
                echo "</div>";
                echo "<div class='button_1'>";
                    echo "<a href='ver_habitaciones.php?id=$row[id_tipo_habitacion];'>Ver fotografias</a>";
                echo "</div>";
            echo "</div>";
        echo "</td>";
        echo "</tr>";
    }

    echo "</table>";

    echo "<div class='container_2'>";
        echo "<div class='button_2'>";
            echo "<a href='ingresar_habitaciones.php'>Añadir habitaciones</a>";
        echo "</div>";
    echo "</div>";



} else {
    echo "No se encontraron registros en la tabla tipo_habitacion.";
}


$con->close();
?>


<style>
    body {
        margin: 0;
        padding: 0;
        text-align: center;
    }

    h1 {
        margin-top: 50px;
    }

    table {
        border-collapse: collapse;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    tr td {
        border: 1px solid black;
        width: 200px;
    }

    tr th {
        border: 1px solid black;
        background-color: blue;
        color: white;
    }

    .container_1 {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 5px;
    }

    .button_1 {
        border: 1px solid black;
        padding: 3px;
        border-radius: 3px;
        background-color: green;
        width: 200px;
        margin: 3px;
    }

    .button_1 a, .button_2 a {
        color: white;
    }

    .button_1:hover {
        background-color: rgb(4, 187, 4);
        cursor: pointer;
    }

    .container_2 {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 5px;
    }

    .button_2 {
        border: 1px solid black;
        padding: 3px;
        border-radius: 3px;
        background-color: rgb(2, 2, 187);
        width: 200px;
        margin: 3px;
    }

    .button_2:hover {
        background-color: rgb(6, 6, 225);
        cursor: pointer;
    }

    .buscador{
        padding: 3px;
        margin-top: -15px;
        margin-bottom: 15px;
    }
</style>