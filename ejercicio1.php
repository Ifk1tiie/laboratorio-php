<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio #1 - Círculo</title>

    <style>
        /* Diseño general */
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }

        /* Campos de entrada */
        input {
            padding: 8px;
            margin: 5px;
        }

        /* Botón */
        input[type="submit"] {
            cursor: pointer;
        }
    </style>
</head>

<body>

    <h1>Área y perímetro de un círculo</h1>

    <!-- Formulario para ingresar el radio -->
    <form method="GET" action="">
        
        <label for="radio">Introduzca el radio:</label><br>

        <input 
            type="number" 
            step="any" 
            name="radio" 
            id="radio" 
            required
        >

        <br><br>

        <input type="submit" value="Calcular">

    </form>

    <hr>

<?php

// Verifica si se ingresó un radio
if (isset($_GET['radio'])) {

    // Guarda el radio
    $r = floatval($_GET['radio']);

    // Calcula el área
    $area = M_PI * pow($r, 2);

    // Calcula el perímetro
    $perimetro = 2 * M_PI * $r;

    // Muestra los resultados
    echo "Área = " . round($area, 2) . "<br><br>";
    echo "Perímetro = " . round($perimetro, 2);
}

?>

</body>
</html>
