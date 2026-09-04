<!DOCTYPE html>
<html>

<head>

    <title>Formulario de entrada del dato</title>

    <style>
        /* Estilo general de la página */
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

        /* Estilo de los campos */
        input {
            padding: 8px;
            margin-top: 5px;
        }

        /* Estilo del botón */
        input[type="submit"] {
            background-color: #333;
            color: white;
            border: none;
            padding: 8px 15px;
            cursor: pointer;
        }
    </style>

</head>

<body>

    <!-- Formulario para ingresar los datos -->
    <form method="post" action="">

        Ingrese su nombre:<br>
        <input type="text" name="nombre" id="nombre"><br><br>

        Ingrese su edad:<br>
        <input type="text" name="edad" id="edad"><br><br>

        <input type="submit" value="confirmar">

    </form>

    <hr>

<?php

// Verifica que se hayan ingresado los datos
if (isset($_POST['nombre']) && isset($_POST['edad'])) {

    $Nombre = $_POST['nombre'];
    $Edad = intval($_POST['edad']);

    echo "El nombre es: " . $Nombre . "<br>";

    // Verifica si la persona es mayor de edad
    if ($Edad >= 18) {
        echo "Usted puede votar en las próximas elecciones 2028";
    } else {
        echo "Usted no es mayor de edad";
    }

}

?>

</body>

</html>
