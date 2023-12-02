<?php session_start();
include("conexion.php");
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$sql = "SELECT id, usuario, password from usuarios where usuario='$usuario' and password='$password'";
//echo $sql;
$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    $_SESSION['id_usuario'] = $fila['id'];
    //echo $_SESSION['id_usuario'];
    header("Location:index_1.php");
} else { ?>
    <div>
        Usuario o contraseña incorrectos
    </div>
    <meta http-equiv="refresh" content="3;url=login.html">
<?php } ?>
