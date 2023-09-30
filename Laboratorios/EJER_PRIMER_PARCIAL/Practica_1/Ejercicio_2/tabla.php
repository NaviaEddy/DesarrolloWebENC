<!DOCTYPE html>
<html>

<head>
    <title>Resultado</title>
    <link rel="stylesheet" href="http://localhost/DesarrolloWebENC/Laboratorios/EJER_PRIMER_PARCIAL/Practica_1/Ejercicio_2/styles_2.css">
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <?php

    $filas = $_POST['filas'];
    $columnas = $_POST['columnas'];
    $matriz = array();
    $contador = 0;
    $contador2 = 1;

    for ($i = 0; $i <= $columnas; $i++) {
        for ($j = 0; $j <= $filas; $j++) {

            $matriz[$i][$j] = $contador;

            if ($matriz[$i][0] >= 1) {
                $contador = $matriz[$i][0] * $contador2;
                $contador2++;
            } else {
                $contador++;
            }

        }
        $contador = $i + 1;
        $contador2 = 1;
    }

    echo "<table border='1'>";
    foreach ($matriz as $fila) {
        echo "<tr>";
        foreach ($fila as $valor) {
            echo "<td>" . $valor . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";


    ?>
</body>

</html>