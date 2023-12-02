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
        <div class="cont1" id="sub_menu">
            <div class="img">
                <img src="http://localhost/DesarrolloWebENC/ExamenFinal/img/usfx.png" alt="logo_usfx.png" width="100%">
            </div>
            <div class="opciones">
                <h3>Opciones</h3>
                <li><a href="#">Detalle 1</a></li>
                <li><a href="#">Detalle 2</a></li>
            </div>
        </div>
        <div class="cont2">
            <div class="menu" id="menu">
                <div><li><a href="#">Pregunta 1</a></li></div><div class="line">|</div>
                <div><li><a href="#">Pregunta 2</a></li></div><div class="line">|</div>
                <div><li><a href="#">Pregunta 3</a></li></div><div class="line">|</div>
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
            contenido.innerHTML = "";
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

    </script>
</body>
</html>