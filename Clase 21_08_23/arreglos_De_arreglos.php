<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php

        $matriz[0][0]=1;
        $matriz[0][1]=2;
        $matriz[0][2]=3;
        $matriz[1][0]=4;
        $matriz[1][1]=5;
        $matriz[1][2]=6;
        $matriz[2][0]=7;
        $matriz[2][1]=7;
        $matriz[2][2]=9;

        echo "<br>";
        foreach($matriz as $indice=>$fila){
            foreach($fila as $indice2=>$elemento){
                echo "[".$indice.",".$indice2."]=".$elemento;
                echo "<br>";
            }
            echo "<br>";

        }




    ?>

</body>
</html>