<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $a=$_GET['a'];
        $b=$_GET['b'];
    ?>

    <ul>
        <li><a href="operaciones.php?operacion=Sumar&a=<?php echo $a?>$b=<?php echo $b?>">Sumar</a></li>
        <li><a href="operaciones.php?operacion=Restar&a=<?php echo $a?>$b=<?php echo $b?>">Restar</a></li>
        <li><a href="operaciones.php?operacion=Multiplicarsuma&a=<?php echo $a?>$b=<?php echo $b?>">Multiplicar</a></li>
        <li><a href="operaciones.php?operacion=Dividir&a=<?php echo $a?>$b=<?php echo $b?>">Dividir</a></li>
    </ul>
</body>
</html>