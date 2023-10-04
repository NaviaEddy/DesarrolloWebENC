<?php

if(!isset($_COOKIE['contador'])){
    setcookie("contador", 1, time()+3600*60);
    $valor = 1;
}else{
    $valor = $_COOKIE['contador'];
    $valor++;
    setcookie("contador", $valor, time()+3600*60);
}

echo 'Esta es la '.$valor.' vez que visita este sitio';

?>