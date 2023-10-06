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
    $id2=$_GET['id2'];
    $sql="SELECT id, nro, id_tipo_habitacion, bano_privado, espacio, precio FROM habitacion where id=$id";
    $sql1="SELECT id, fotografia FROM fotos_habitacion where id_habitacion=$id2";
    $resultado=$con->query($sql);
    $resultado1=$con->query($sql1);
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

        <div>
            <label for="idhabitacion">Fotografias:</label> <br>
             <?php
                $contador = 0; 
                while ($row_fotos = $resultado1->fetch_assoc()) {
                $contador++; 
            ?>
                <img src="http://localhost/DesarrolloWebENC/Tareas/TareaLab3/Ej2/imagenes/<?php echo $row_fotos['fotografia']; ?>" width="300px">
                    <div>
                    <label for="fotografia"></label>
                    <input type="file" name="fotografia_<?php echo $contador; ?>">
                    <input type="hidden" name="id_fotos_<?php echo $contador; ?>" value="<?php echo $row_fotos['id']?>">
                    <?php //echo "id_fotos_".$contador; ?>
                </div>

            <?php } ?>
        </div>

        <br>
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input type="submit" value="Editar">


    </form>

</body>

</html>