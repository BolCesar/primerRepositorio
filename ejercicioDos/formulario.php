<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eb-suma</title>
</head>
<body>

<h2>eb-suma</h2>

    <form  action="<?php htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8") ?>" method="POST">
        <label for="numeroX">Número Cualquiera:</label>
        <input type="number" id="numeroX" name="numeroX">
        <br>
        <input type="submit" value="Calcular"><br>
    </form>
      <p>volver</p>
</body>
</html>