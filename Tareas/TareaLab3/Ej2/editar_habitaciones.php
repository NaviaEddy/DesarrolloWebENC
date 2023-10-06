<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include("conexion.php");
    $id=$_GET['id'];
    $sql="SELECT id, nro, id_tipo_habitacion, bano_privado, espacio, precio FROM habitacion where id=$id";
    $resultado=$con->query($sql);
    $row = $resultado->fetch_assoc();
    
    ?>
    <form action="update.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="numero">Nro</label>
            <input type="text" name="numero" value="<?php echo $row['nro']?>">
        </div>
        <div>
            <label for="tipo">tipo_habitacion</label>
            <input type="text" name="tipo" value="<?php echo $row['id_tipo_habitacion']?>">
        </div>
        <div>
            <label for="bano">bano_privado</label>
            <input type="text" name="bano" value="<?php echo $row['bano_privado']?>">
        </div>
        <div>
            <label for="espacio">espacio</label>
            <input type="text" name="espacio" value="<?php echo $row['espacio']?>">
        </div>
        <div>
            <label for="precio">precio</label>
            <input type="text" name="precio" value="<?php echo $row['precio']?>">
        </div>
       
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input type="submit" value="Editar">


    </form>

</body>

</html>