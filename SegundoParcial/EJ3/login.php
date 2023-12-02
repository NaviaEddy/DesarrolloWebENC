<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="javascript:autenticar()">
        <div>
            <label for="usuario">Usuario: </label>
            <input type="text" name="usuario" id="usuario">
        </div>
        <div>
            <label for="contrasena">Contraseña: </label>
            <input type="password" name="contrasena" id="contrasena">
        </div>
        <div>
            <img src="http://localhost/DesarrolloWebENC/SegundoParcial/EJ3/capcha.php" alt="captcha.jpg">
        </div>
        <div>
            <label for="capcha">Ingrese el captcha:</label>
            <input type="text" name="capcha" id="capcha">
        </div>
        <div>
            <input type="submit" value="Ingresar">
        </div>
    </form>
</body>
</html>