<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eb-suma</title>
</head>
<body>
<h2>eb-exponente</eb-exponente></h2>

<form  action="<?php htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8") ?>" method="POST">
    <label for="numeroA">Número A Base:</label>
    <input type="number" id="numeroA" name="numeroA">
    <br>
    <label for="numeroB">Número B exponente:</label>
    <input type="number" id="numeroB" name="numeroB">
    <br>
    <input type="submit" value="Calcular"><br>


</form>
  <p>volver</p>
</body>
</html>