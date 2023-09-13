<?php

    $filas = $_POST["filas"];
    $columnas = $_POST["columnas"];
    $color = $_POST["color"];
    
    function imprimirTablero($filas, $columnas, $color) {
        echo '<table border="1" cellpadding="10">';
        for ($i = 1; $i <= $filas; $i++) {
            echo '<tr>';
            for ($j = 1; $j <= $columnas; $j++) {
                $celdaColor = ($i + $j) % 2 === 0 ? $color : 'white';
                echo '<td style="background-color: ' . $celdaColor . ';"></td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }
    
    imprimirTablero($filas, $columnas, $color);

?>




