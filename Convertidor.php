```php
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Conversión de pulgadas</title>

    <style>
        /* Estilo de la página */
        body {
            font-family: Arial;
            background-color: #f2f2f2;
            padding: 30px;
        }

        /* Estilo del formulario */
        form {
            background-color: white;
            padding: 20px;
            width: 300px;
            border-radius: 10px;
        }

        /* Estilo del campo */
        input {
            padding: 8px;
        }

        /* Estilo del botón */
        button {
            padding: 8px 15px;
            background-color: #333;
            color: white;
            border: none;
            cursor: pointer;
        }

        /* Espacio para el resultado */
        .resultado {
            margin-top: 20px;
        }
    </style>

</head>

<body>

    <h1>Conversión de pulgadas a centímetros</h1>

    <!-- Formulario para ingresar las pulgadas -->
    <form method="post" action="">

        <!-- Indica qué dato ingresar -->
        <label>Ingrese las pulgadas:</label><br>

        <!-- Campo para ingresar las pulgadas -->
        <input type="number" name="pulgadas" step="any" required>

        <br><br>

        <!-- Botón para convertir -->
        <button type="submit">Convertir</button>

    </form>

    <div class="resultado">

        <?php

        // Verifica si se envió el formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // Obtiene las pulgadas ingresadas
            $pulgadas = $_POST["pulgadas"];

            // Convierte pulgadas a centímetros
            $centimetros = $pulgadas * 2.54;

            // Muestra el resultado
            echo "El resultado es: " . $centimetros . " centímetros.";
        }

        ?>

    </div>

</body>

</html>
```

