<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php echo "Hola mundo";
        for($i=0; $i<=10; $i++){
            echo "linea".$i, "<br>";
        }    
    
        $n=6;
        $a=1;

        for($i=1; $i<=$n; $i++){
            $a*=$i;
        }
        echo "el factorial de".$n." es ".$a;
    ?>


</body>
</html>