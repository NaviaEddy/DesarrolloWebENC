<?php
if (isset($_GET["n"]) && isset($_GET["mayor"]) && isset($_GET["arr"])) {
    $n = intval($_GET["n"]);
    $mayor = intval($_GET["mayor"]);
    $arr = array_map("intval", explode(",", $_GET["arr"]));

    function eliminar_mayores($arr, $mayor) {
        $result = array();
        foreach ($arr as $num) {
            if ($num <= $mayor) {
                $result[] = $num;
            }
        }
        return $result;
    }

    $resultado = eliminar_mayores($arr, $mayor);

    echo "<h1>Resultado</h1>";
    echo "<p>Arreglo: " . implode(", ", $arr) . "</p>";
    echo "<p>Valor mayor: $mayor</p>";
    echo "<p>Arreglo después de eliminar mayores: " . implode(", ", $resultado) . "</p>";
} else {
    echo "<p>Error: Faltan parámetros.</p>";
}
?>






