<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
    
        $a=[];
        $a["nombre"]="juan";
        $a["apellido"]="perez";
        $a["edad"]=30;
        $a["telefono"]="45487941";

        foreach($a as $indice=>$element){
            echo $indice." => ".$element;
            echo "<br>";
        }


    ?>

</body>
</html>