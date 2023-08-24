<?php

    $numero = $_GET['int'];
        
    $tamanoCelda = 80;
    $ancho = $numero * $tamanoCelda;
    $alto = $numero * $tamanoCelda;
    $imagen = imagecreatetruecolor($ancho, $alto);
        
    $colorBlanco = imagecolorallocate($imagen, 255, 255, 255);
    $colorNegro = imagecolorallocate($imagen, 0, 0, 0);
        
     for ($fila = 0; $fila < $numero; $fila++) {
        for ($columna = 0; $columna < $numero; $columna++) {
            $colorCelda = ($fila + $columna) % 2 === 0 ? $colorBlanco : $colorNegro;
            imagefilledrectangle($imagen, $columna * $tamanoCelda, $fila * $tamanoCelda, ($columna + 1) * $tamanoCelda, ($fila + 1) * $tamanoCelda, $colorCelda);
         }
    }
        
    header('Content-Type: image/png');
    imagepng($imagen);

?>