<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio #1 - Círculo</title>
</head>
<body>

    <h1>Área y perímetro de un círculo</h1>

    <form method="GET" action="">
        <label for="radio">Introduzca el radio:</label><br>
        <input type="number" step="any" name="radio" id="radio" required>
        <br><br>

        <input type="submit" value="Calcular">
    </form>

    <hr>

<?php
if (isset($_GET['radio'])) {

    $r = floatval($_GET['radio']);

    $area = M_PI * pow($r, 2);
    $perimetro = 2 * M_PI * $r;

    echo "Área = " . round($area, 2) . "<br><br>";
    echo "Perímetro = " . round($perimetro, 2);
}
?>

</body>
</html>