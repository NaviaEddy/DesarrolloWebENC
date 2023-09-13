<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/DesarrolloWebENC/Tareas/Tarea_4/Estilos_bd/formu_alumno.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet" />
</head>

<body>
    <?php include('conexion.php');
    $sql = "SELECT id,nombre from  carrera";
    $resultado = $con->query($sql);
    ?>
    <form action="create.php" method="post">

        <div class="container_1">
            <div class="title">
                <h1>BASE DE DATOS</h1>
                <h2>CREAR ALUMNO</h2>
            </div>
            <div class="form_1">
                <div class="label_1">
                    <label for="nombres">Nombres:</label>
                    <input type="text" name="nombres">
                </div>
                <div class="label_2">
                    <label for="apellidos">Apellidos:</label>
                    <input type="text" name="apellidos">
                </div>
                <div class="label_3">
                    <label for="CU">CU:</label>
                    <input type="text" name="CU">
                </div>
                <div class="label_4">
                    <label for="idcarrera">Carrera:</label>
                    <select name="idcarrera">
                        <?php while ($row = $resultado->fetch_assoc()) { ?>
                            <option value="<?php echo $row['id'] ?>"><?php echo $row['nombre'] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div>
                <input type="submit" value="Crear" class="button_1">
            </div>
        </div>


    </form>
</body>

</html>