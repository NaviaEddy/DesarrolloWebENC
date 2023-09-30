<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>

</head>

<body>
    <?php
    $mes = $_POST['mes'];
    $year = $_POST['year'];

    $meses = [
        "Enero" => 1,
        "Febrero" => 2,
        "Marzo" => 3,
        "Abril" => 4,
        "Mayo" => 5,
        "Junio" => 6,
        "Julio" => 7,
        "Agosto" => 8,
        "Septiembre" => 9,
        "Octubre" => 10,
        "Noviembre" => 11,
        "Diciembre" => 12
    ];
    $mes_num = $meses[$mes];

    $fecha = "$year-$mes_num-1";
    $numeroDiaSemana = date("w", strtotime($fecha));
    echo "El día de la semana de $fecha es $numeroDiaSemana";

    echo "<h2>Mes: $mes</h2>";

    echo "<table>";
    echo "<tr>";
    echo "<th>Lunes</th>";
    echo "<th>Martes</th>";
    echo "<th>Miercoles</th>";
    echo "<th>Jueves</th>";
    echo "<th>Viernes</th>";
    echo "<th>Sabado</th>";
    echo "<th>Domingo</th>";
    echo "</tr>";


    for($i = 0; $i<=5; $i++) {
        echo "<tr>";
        for($j = 0; $j<=6; $j++){
            echo "<th></th>";
        }
        echo "</tr>";
    }
    echo "</table>";

    ?>
</body>

<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid black;
        text-align: center;
        height: 30px;
    }
</style>

</html>