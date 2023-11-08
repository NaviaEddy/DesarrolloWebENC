<?php

    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    if ($usuario === 'admin' && $contrasena === '123') {
 
        session_start();
        $_SESSION['nivel'] = 'usuario_admin';
        
        echo "autenticado";
    } else {
        exit();
    }

?>
