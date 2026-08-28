<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Área y Perímetro</title>

    <style>
        body {
            font-family: Arial;
        }

        input {
            padding: 5px;
        }
    </style>
</head>

<body>

    <h1>Área y perímetro de un círculo</h1>

    <form method="GET">

        <label>Introduzca el radio:</label>

        <input type="number" name="radio">

        <br><br>

        <input type="submit" value="Calcular">

    </form>

    <hr>

<?php

// Verificar si se ingresó el radio
if (isset($_GET["radio"])) {

    $radio = $_GET["radio"];

    // Calcular el área
    $area = 3.14 * $radio * $radio;

    // Calcular el perímetro
    $perimetro = 2 * 3.14 * $radio;

    // Mostrar resultados
    echo "El área es: " . $area;
    echo "<br>";
    echo "El perímetro es: " . $perimetro;
}

?>

</body>
</html>
