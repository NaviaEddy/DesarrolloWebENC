<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/DesarrolloWebENC/Tareas/Tarea_4/Estilos_bd/read.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet" />
    <title>Document</title>
</head>

<body>
    <?php include('conexion.php');

    $sql = "SELECT a.id,nombres,apellidos,CU,c.nombre as carrera FROM alumno a
    LEFT JOIN carrera c on a.idcarrera=c.id ";

    //echo $sql;
    $resultado = $con->query($sql);
    if ($resultado->num_rows > 0) {
    ?>
        <div class="container_3">
            <div class="title3">
                <h1>BASE DE DATOS</h1>
                <h2>LISTA ALUMNOS</h2>
            </div>
            <table class="table">
                <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>CU</th>
                    <th>Carrera</th>
                    <th>Operaciones</th>
                </tr>
                <?php while ($row = $resultado->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $row['nombres']; ?></td>
                        <td><?php echo $row['apellidos']; ?></td>
                        <td><?php echo $row['CU']; ?></td>
                        <td><?php echo $row['carrera']; ?></td>

                        <td>
                            <div class="buttons">
                                <div class="button_2">
                                    <a href="form_update_alumno.php?id=<?php echo $row['id']; ?>">Editar</a>
                                </div>
                                <div class="button_3">
                                    <a href="delete.php?id=<?php echo $row['id']; ?>">Eliminar</a>
                                </div>
                            </div>
                        </td>

                    </tr>

                <?php } ?>
            </table>
            <div class="button_1">
                <a href="formu_alumno.php">Crear Alumno</a>
            </div>
        </div>

    <?php
    } else {
    ?> <div>No existen registros que mostrar</div>
        <div class="button_1">
            <a href="formu_alumno.php">Crear Alumno</a>
        </div>
    <?php }
    ?>

</body>

</html>