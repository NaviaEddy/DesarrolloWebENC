<?php
include('calculadora.php');


$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
$operacion = $_GET['operacion'];

$calculadora = new Calculadora($numero1, $numero2);

switch ($operacion) {
    case 'sumar':
        $resultado = $calculadora->sumar();
        break;
    case 'restar':
        $resultado = $calculadora->restar();
        break;
    case 'multiplicar':
        $resultado = $calculadora->multiplicar();
        break;
    case 'dividir':
        $resultado = $calculadora->dividir();
        break;
    default:
        $resultado = "Operación no válida";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1 style="color: black;">Resultado</h1>
        <p>El resultado de la operación es:
            <?php echo $resultado; ?>
        </p>
    </div>

</body>

<style>
    .body {
        margin: 0;
        padding: 0;
    }

    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color: rgb(98, 98, 98);
        position: relative;
        top: 200px;
        margin-left: 500px;
        margin-right: 500px;
        border: 2px solid black;
        color: white;
    }
</style>

</html>