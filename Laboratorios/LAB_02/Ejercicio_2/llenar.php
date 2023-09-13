<?php
    $n = $_POST["numero1"];
    $mayor = $_POST["mayor"];

    $arr = array();
    for ($i = 0; $i < $n; $i++) {
        $arr[] = rand(1, 100); 
    }

    header("Location: eliminar.php?n=$n&mayor=$mayor&arr=".implode(",", $arr));
    exit;
?>