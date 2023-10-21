<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!--http://localhost:3000/formulario.php-->

    <h2>eb-diferencia</h2>

    <form  action="<?php htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8") ?>" method="POST">
        <label for="numeroA">Número A (entre 1 y 10):</label>
        <input type="number" id="numeroA" name="numeroA" min="1" max="10">
        <br>
        <label for="numeroB">Número B (entre 1 y 10):</label>
        <input type="number" id="numeroB" name="numeroB" min="1" max="10">
        <br>
        <input type="submit" value="Calcular"><br>

    
    </form>
      <p>volver</p>
</body>
</html>