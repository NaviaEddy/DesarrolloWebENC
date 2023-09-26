<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <h1>Resultado</h1>

        <?php
            $cantidad = floatval($_POST["numero"]);
            $unidad_origen = $_POST["unidad1"];
            $unidad_destino = $_POST["unidad2"];

            $conversion_factors = [
                'mm' => 1,
                'cm' => 0.1,
                'dm' => 0.01,
                'm' => 0.001,
                'km' => 0.000001
            ];

            if (array_key_exists($unidad_origen, $conversion_factors) && array_key_exists($unidad_destino, $conversion_factors)) {
                $resultado = $cantidad * ($conversion_factors[$unidad_origen] / $conversion_factors[$unidad_destino]);
                echo "<div class='resultado'><p>{$resultado} {$unidad_destino}</p></div>";
            } else {
                echo "<p>Unidades no válidas seleccionadas.</p>";
            }
        ?>

    </div>

</body>

<style>
    .resultado{
        display: flex;
        justify-content: center;
        border: 3px solid yellow;
        border-radius: 5px;
        background-color: gray;
        color: white;
        width: 5%;
        
    }
</style>

</html>