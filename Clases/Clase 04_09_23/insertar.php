<?php
include ('Pila.php');
$p = new Pila(5);
$valor = $_GET['valor'];
$p->push($valor);
echo 'El valor '.$valor.' fue ingresado correctamente a la pila'
?>