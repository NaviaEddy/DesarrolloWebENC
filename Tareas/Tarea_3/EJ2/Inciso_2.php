<!-- Genera un arreglo de números del 1 al 20. 
Luego, utiliza un ciclo foreach para separar los números en dos arreglos diferentes: 
uno para los números pares y otro para los números impares. Imprime ambos arreglos al final. -->

<?php

    $var1 = range(1, 20);
    $np = array();
    $ni = array();

    foreach ($var1 as $result) {
        ($result % 2 == 0) ? $np[]=$result : $ni[]=$result;
    }

    echo "Numeros pares del arreglo:";
    echo "<br>";
    foreach ($np as $indc => $rsp) {
        echo "[".$indc."] = ".$rsp;
        echo "<br>";
    }

    echo "<br>";
    echo "Numeros impares del arreglo: ";
    echo "<br>";
    foreach ($ni as $indc => $rsi) {
        echo "[".$indc."] = ".$rsi;
        echo "<br>";
    }

?>