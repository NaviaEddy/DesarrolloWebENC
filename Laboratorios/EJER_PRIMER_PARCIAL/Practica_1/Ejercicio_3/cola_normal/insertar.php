<?php
include('/Laboratorios/EJER_PRIMER_PARCIAL/Practica_1/Ejercicio_3/cola.php');

session_start();

if (!isset($_SESSION['p'])) {
    $_SESSION['p'] = new Pila();
}

$valor = $_GET['valor'];
$_SESSION['p']->insertar($valor);

?>
<meta http-equiv="refresh" content="4; url=/Laboratorios/EJER_PRIMER_PARCIAL/Practica_1/Ejercicio_3/operaciones.php">