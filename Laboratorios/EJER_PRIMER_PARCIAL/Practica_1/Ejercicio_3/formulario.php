<!DOCTYPE html>
<html>

<head>
    <title>Cola</title>
</head>

<body>

    <h1>Cola</h1>

    <form action="operaciones.php" method="post">

        <label for="tipo">Tipo de Cola:</label>
        <select id="tipo" name="tipo" required>
            <?php
            session_start();

            if (isset($_POST['tipo'])) {
                $_SESSION['tipoCola'] = $_POST['tipo'];
            }

            ?>
            <option value="Normal">Cola Normal</option>
            <option value="DobleEntrada">Cola de Doble Entrada</option>
        </select>
        <input type="submit" value="Enviar">
    </form>

</body>

</html>