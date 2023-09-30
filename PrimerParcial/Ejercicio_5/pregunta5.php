<?php
include("conexion.php");

$sql = "SELECT correo, nombre, rol FROM usuario";
$result = $con->query($sql);

echo "<h1>BASE DE DATOS ALUMNOS</h1>";

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>
                <th>Correo</th>
                <th>Nombre</th>
                <th>Rol</th>
                <th>Operación</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["correo"] . "</td>";
        echo "<td>" . $row["nombre"] . "</td>";
        echo "<td>" . ($row["rol"] == "Administrador" ? "Administrador" : "Usuario") . "</td>";
        echo "<td>";
        if ($row["rol"] == "Administrador") {
            echo "<form action='cambiar_nivel.php' method='POST'>";
            echo "<input type='hidden' name='correo' value='" . $row["correo"] . "'>";
            echo "<input type='hidden' name='nuevo_nivel' value='Usuario'>";
            echo "<input type='submit' class='button_1' value='Cambiar a Usuario'>";
            echo "</form>";
        } else {
            echo "<form action='cambiar_nivel.php' method='POST'>";
            echo "<input type='hidden' name='correo' value='" . $row["correo"] . "'>";
            echo "<input type='hidden' name='nuevo_nivel' value='Administrador'>";
            echo "<input type='submit' class='button_2' value='Cambiar a Administrador'>";
            echo "</form>";
        }
        echo "</td>";
        echo "</tr>";
    }

    echo "</table>";

} else {
    echo "No se encontraron registros en la tabla usuarios.";
}


$con->close();
?>

<style>
    body{
        margin: 0;
        padding: 0;
        text-align: center;
    }

    h1{
        margin-top: 100px;
    }

    table{
        border-collapse: collapse;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    tr td{
        border: 1px solid black;
        width: 200px;
    }

    tr th{
        border: 1px solid black;
        background-color: blue;
        color: white;
    }

    .button_1, .button_2{
        position: relative;
        top: 8px;
    }

    .button_1{
        background-color: green;
        color: white;
    }

    .button_2{
        background-color: red;
        color: white;
    }
</style>