<?php

    $operacion=$_GET['operacion'];
    $a=$_GET['a'];
    $b=$_GET['b'];


    switch ($operacion) {
        case 'Sumar':
            $c=$a+$b;
            break;
        case 'Restar':
            $c=$a-$b;
            break;
        case 'Multiplicar':
            $c=$a*$b;
            break;
        case 'Dividir':
            $c=$a/$b;
            break;
    }

    echo "El resultado es: ".$c;


?>