<?php
include("pregunta_2.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if (!isset($_SESSION['p'])) {
    $_SESSION['l'] = new ListaAlumnos();
    }

    $_SESSION['l']->mostrarLista();
    ?>    

    <li><a href="javascript:agregar('../EJ2/alumnos.html')">Insertar</a></li>

    <script>
        function agregar(abrir) {
          
          contenido = document.getElementById('contenido');
          contenido.innerHTML = "";

          var ajax = new XMLHttpRequest() //crea el objetov ajax 
          ajax.open("get", abrir, true);
          ajax.onreadystatechange = function () {
              if (ajax.readyState == 4) {
                    contenido.innerHTML = ajax.responseText;
              }
          }
          ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
          ajax.send();
        }
    </script>
</body>
</html>
