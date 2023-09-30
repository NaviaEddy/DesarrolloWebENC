<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $cadena1 = $_POST["cadena1"];
    $cadena2 = $_POST["cadena2"];

    $palabras_cadena2 = explode(" ", $cadena2);

    $contiene_palabra = false;
    foreach ($palabras_cadena2 as $palabra) {
        if (stripos($cadena1, $palabra) !== false) {
            $contiene_palabra = true;
            break;
        }
    }

    echo "<div class='container_1'>";
    echo "<h1>Resultado</h1>";
    if ($contiene_palabra) {
        echo strtoupper($cadena1) . " contiene la palabra " . strtoupper($cadena2);
    } else {
        echo strtoupper($cadena1) . " no contiene las palabras " . strtoupper($cadena2);
    }
    echo "</div>";
    ?>
</body>

</html>

<style>
    body{
        margin: 0;
        padding: 0;
    }
    
    .container_1{
        display: flex;
        flex-direction: column;
        text-align: center;
        background-color: aquamarine;
        position: relative;
        top: 250px;
        width: 500px;
        height: 120px;
        left: 550px;
        border: 1px solid black;
    }
</style>