<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    $tipoCola = $_SESSION['tipoCola'];

    if ($tipoCola === 'Normal') {

        echo '<h2>Cola Normal</h2>';

        echo '<ul>';

        echo '<li><a href="cola_normal/insertar.html">Insertar</a></li>';
        echo '<li><a href="mostrar_normal.php">Mostrar</a></li>';
        echo '<li><a href="eliminar_normal.php">Eliminar</a></li>';

        echo '</ul>';

    }

    if ($tipoCola === 'DobleEntrada') {

        echo '<h2>Cola de Doble Entrada</h2>';

        echo '<ul>';

        echo '<li><a href="/Laboratorios/EJER_PRIMER_PARCIAL/Practica_1/Ejercicio_3/cola_normal/insertar.html">Insertar</a></li>';
        echo '<li><a href="mostrar_normal.php">Mostrar</a></li>';
        echo '<li><a href="eliminar_delante.php">Eliminar delante</a></li>';
        echo '<li><a href="eliminar_detras.php">Eliminar detras</a></li>';

        echo '</ul>';
    }

    ?>



</body>

</html>