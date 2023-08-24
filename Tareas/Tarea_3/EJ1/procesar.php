<?php
include("F_palabra.php");

    $cadena=$_GET['cadena'];

    echo "La palabra mas larga de la cadena '$cadena' es: ".PalabraMasLarga($cadena);

?>