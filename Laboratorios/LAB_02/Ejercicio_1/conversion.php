<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="resultado.php" method="post">
        <div class="container_0">
            <div class="title_1">
                <h1>CONVERSOR DE UNIDADES</h1>
            </div>
            <div class="label_1">
                <label for="numero">Numero:</label>
                <input type="number" name="numero" required>
            </div>
            <div class="uni_1">
                <label for="unidad1">Unidad1</label>
                <select name="unidad1" required>
                    <option value="mm">mm</option>
                    <option value="cm">cm</option>
                    <option value="dm">dm</option>
                    <option value="m">m</option>
                    <option value="km">km</option>
                </select>
            </div>

            <div class="uni_2">
                <label for="unidad2">Unidad2</label>
                <select name="unidad2" required>
                    <option value="mm">mm</option>
                    <option value="cm">cm</option>
                    <option value="dm">dm</option>
                    <option value="m">m</option>
                    <option value="km">km</option>
                </select>
            </div>
            <div>
                <input type="submit" name="Convertir" class="button_1">
            </div>
        </div>

    </form>



</body>

<style>
    .container_0 {
        display: flex;
        flex-direction: column;
        background-color: grey;
        align-items: center;
        justify-content: center;
        padding: 15px;
        margin: 350px;
        margin-top: 10%;
        border: 2px solid black;
    }
</style>

</html>