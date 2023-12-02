<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

</head>

<body>
    <?php session_start();
    include("conexion.php");
    $sql = "SELECT hora FROM horarios WHERE materia = '{$_SESSION["materia"]}'";
    //echo $sql;
    $cont1 = 8; $cont2 = 9;

    echo "<table>";
    echo "<tr>";
    echo "<th>Hora</th>";
    echo "<th>Lunes</th>";
    echo "<th>Martes</th>";
    echo "<th>Miercoles</th>";
    echo "<th>Jueves</th>";
    echo "<th>Viernes</th>";
    echo "</tr>";


    for ($i = 0; $i <= 9; $i++) {
        echo "<tr>";
        for ($j = 0; $j <= 5; $j++) {
            if($j == 0){
                echo "<th>" . $cont1 . "-". $cont2 . "</th>";
            }
            else{
                echo "<th> </th>";
            }
        }
        $cont1++; $cont2++;
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>