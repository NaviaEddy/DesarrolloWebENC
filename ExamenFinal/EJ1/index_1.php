<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="cont1">
            <div class="img">
                <img src="http://localhost/DesarrolloWebENC/ExamenFinal/img/usfx.png" alt="logo_usfx.png" width="100%">
            </div>
            <div class="opciones" id="submenu">
                <h3>Materias</h3>
            </div>
        </div>
        <div class="cont2">
            <div class="menu" id="menu">
                <div><li><a href="index_1.php">Pregunta 1</a></li></div><div class="line">|</div>
                <div><li><a href="javascript:pregunta_2('../EJ2/pregunta_3.php')">Pregunta 2</a></li></div><div class="line">|</div>
                <div><li><a href="#" onclick="pregunta_3()">Pregunta 3</a></li></div><div class="line">|</div>
                <div><li><a href="#">Pregunta 4</a></li></div><div class="line">|</div>
                <div><li><a href="#">Pregunta 5</a></li></div>
            </div>
            <div class="titulo" id="titulo">
                <!--Introducimos los mensajes de las preguntas-->   
            </div>
            <div class="contenido" id="contenido">
                <!--Introducimos el contenido-->   
            </div>
        </div>
    </div>
    <footer id="pie">
        <h2>Sucre - Semestre 2-2023</h2>
    </footer>

    <script>

        window.onload = function(){
            contenido = document.getElementById('contenido');
            titulo = document.getElementById('titulo');
            contenido.innerHTML = "";
            titulo.innerHTML = "";
            titulo.innerHTML = `<h3>Pregunta 1</h3>`;
            contenido.innerHTML = `<div class="informacion">
                                        <div class="fondo">
                                            <H1>SIS 256 Programación Web</H1>
                                            <h3>Examen Final - 02-12-2023 7:00 am</h3>
                                        </div>
                                        <div class="perfil">
                                            <img src="http://localhost/DesarrolloWebENC/ExamenFinal/img/foto.jpg" alt="perfil.jpg" width="25%">
                                        </div>
                                        <div class="datos">
                                            <h2>Navía Condori Eddy</h2>
                                            <h4>Carrera: <span style="color: black;">Ing. en ciencias de la computacion</span></h4>
                                            <h4>Repositorio: <a href="https://github.com/NaviaEddy/DesarrolloWebENC.git">https://github.com/NaviaEddy/DesarrolloWebENC.git</a></h4>
                                        </div>
                                    </div>`;
        }

        //PREGUNTA 2
        function pregunta_2(abrir) {
          
          contenido = document.getElementById('contenido');
          titulo = document.getElementById('titulo');
          contenido.innerHTML = "";
          titulo.innerHTML = "";

          var ajax = new XMLHttpRequest() //crea el objetov ajax 
          ajax.open("get", abrir, true);
          ajax.onreadystatechange = function () {
              if (ajax.readyState == 4) {
                    titulo.innerHTML = `<h3>Pregunta 2</h3>`;
                    contenido.innerHTML = ajax.responseText;
              }
          }
          ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
          ajax.send();
        }

        //PREGUNTA 3
        function pregunta_3(abrir) {
            <?php session_start(); include('conexion.php');?>
                <?php $sql='SELECT materia FROM usuarios_materias WHERE idusuario = ' . $_SESSION["id_usuario"] ; ?>
                <?php $resultado = $con->query($sql); ?>
                <?php if ($resultado->num_rows > 0) {?>
                    <?php while ($row = $resultado->fetch_assoc()) {?>
                        submenu =document.getElementById('submenu');
                        var nombre;
                        submenu.innerHTML += `<li><a href="javascript:horarios('../EJ3/horarios.php')"> <?php echo $_SESSION['materia'] = $row['materia']; ?></a></li>`;
                    <?php } ?>                     
                <?php } ?>
        }

        function horarios(abrir){
            contenido = document.getElementById('contenido');
            titulo = document.getElementById('titulo');
            contenido.innerHTML = "";
            titulo.innerHTML = "";

            var ajax = new XMLHttpRequest() //crea el objetov ajax 
            ajax.open("get", abrir, true);
            ajax.onreadystatechange = function () {
                if (ajax.readyState == 4) {
                    titulo.innerHTML = `<h3>Pregunta 3</h3>`;
                    contenido.innerHTML = ajax.responseText;
                }
            }
            ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
            ajax.send();
        }
    </script>
</body>
</html>