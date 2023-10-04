<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include('conexion.php');
    $sql = "SELECT id, nro, id_tipo_habitacion, bano_privado, espacio, precio from  habitacion";
    $resultado = $con->query($sql);
    ?>

    <form action="create.php" method="post" enctype="multipart/form-data">

        <div>
            <label for="nro">Numero de la habitacion</label>
            <input type="text" name="nro">
        </div>
        <div>
            <label for="tipo">id de habitacion</label>
            <input type="text" name="tipo">
        </div>
        <div>
            <label for="bano">Numero de baño privados</label>
            <input type="text" name="bano">
        </div>
        <div>
            <label for="espacio">Espacio</label>
            <input type="text" name="espacio">
        </div>
        <div>
            <label for="precio">Precio</label>
            <input type="text" name="precio">
        </div>

        <input type="submit" value="Agregar habitacion">

    </form>

</body>

</html>