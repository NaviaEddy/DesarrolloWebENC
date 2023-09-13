<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/DesarrolloWebENC/Tareas/Tarea_4/Estilos_bd/form_update.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet" />
</head>

<body>
    <?php include("conexion.php");
    $id = $_GET['id'];
    $sql = "SELECT nombres,apellidos,CU,idcarrera from alumno where id=$id";
    $sql1 = "SELECT id,nombre from  carrera";
    $resultado1 = $con->query($sql1);
    $resultado = $con->query($sql);
    $row = $resultado->fetch_assoc();

    ?>
    <form action="update.php" method="post">
        <div class="container_2">
            <div class="title2">
                <h1>BASE DE DATOS</h1>
                <h2>EDITAR ALUMNO</h2>
            </div>
            <div class="form_2">

                <div class="label_1">
                    <label for="nombres">Nombres:</label>
                    <input type="text" name="nombres" value="<?php echo $row['nombres'] ?>">
                </div>
                <div class="label_2">
                    <label for="apellidos">Apellidos:</label>
                    <input type="text" name="apellidos" value="<?php echo $row['apellidos'] ?>">
                </div>
                <div class="label_3">
                    <label for="idcarrera">Carrera:</label>
                    <select name="idcarrera">
                        <?php while ($row_carrera = $resultado1->fetch_assoc()) { ?>
                            <option value="<?php echo $row_carrera['id'] ?>" <?php echo $row_carrera['id'] == $row['idcarrera'] ? "selected" : "";  ?>><?php echo $row_carrera['nombre'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="label_4">
                    <label for="CU">CU:</label>
                    <input type="text" name="CU" value="<?php echo $row['CU'] ?>">
                </div>

            </div>

            <div>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" value="Editar" class="button_2">
            </div>

        </div>


    </form>

</body>

</html>

<style>

body{
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: 'Roboto Slab', serif;
    margin: 0;
    padding: 0;
    background: linear-gradient(135deg, #333, #222, #111);
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
}


.container_2{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top: 16%;
    padding: 50px;
    background-color: rgb(245, 245, 245);
    border: 5px solid #999;
    border-radius: 45px;
    box-shadow: 5px 5px 10px rgba(255, 255, 255, 1);
}

.title2{
    display: flex;
    flex-direction: column;
    color: black;
    text-align: center;
    margin-bottom: 5%;
}

.title2 h2{
    margin-top: -8%;
}

.form_2{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    margin-top: 5%;
    margin-left: 25%;
}

.label_1, .label_2, .label_3, .label_4{
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.label_1 input, .label_2 input, .label_4 input{
    border-radius: 5px;
    height: 17px;
    position: absolute;
    right: 44%;
    max-width: 15%;
}

.label_3 select{
    position: relative;
    max-width: 44%;
    left: 7.5%;
    border: 1.8px solid black;
    border-radius: 5px;
}

.label_1 label, .label_2 label, .label_3 label, .label_4 label{
    flex: 0;
    text-align: right;
    margin-right: 4px;
}

.button_2{
    padding: 0px auto;
    margin: 25px;
    border-radius: 4px;
    width: 50%;
    height: 15%;
    cursor: pointer;
    transition: 0.3s;
}

.button_2:hover{
    border-color: black;
}

</style>