<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Área y Perímetro</title>

    <style>
        /* Estilo de la página */
        body {
            font-family: Arial;
            background-color: #f2f2f2;
            text-align: center;
            padding: 30px;
        }

        /* Caja principal */
        .contenedor {
            background-color: white;
            width: 400px;
            margin: auto;
            padding: 25px;
            border-radius: 10px;
        }

        /* Título */
        h1 {
            color: #333;
        }

        /* Campo del radio */
        input[type="number"] {
            padding: 8px;
            width: 150px;
            border: 1px solid #aaa;
            border-radius: 5px;
        }

        /* Botón */
        input[type="submit"] {
            padding: 8px 20px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
        }

        /* Resultado */
        .resultado {
            margin-top: 20px;
            padding: 10px;
            background-color: #eee;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <div class="contenedor">

        <h1>Área y perímetro de un círculo</h1>

        <form method="GET">

            <label>Introduzca el radio:</label>
            <br><br>

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

            // Mostrar los resultados
            echo "<div class='resultado'>";
            echo "El área es: " . $area;
            echo "<br>";
            echo "El perímetro es: " . $perimetro;
            echo "</div>";
        }

        ?>

    </div>

</body>
</html>
