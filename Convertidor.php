<?php

// Verifica si el usuario envió el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Obtiene la cantidad de pulgadas ingresada por el usuario
    $pulgadas = $_POST["pulgadas"];

    // Convierte las pulgadas a centímetros
    // 1 pulgada equivale a 2.54 centímetros
    $centimetros = $pulgadas * 2.54;

    // Muestra el resultado de la conversión
    echo "El resultado es: " . $centimetros . " centímetros.";
}

?>

<!-- Inicio del formulario -->
<form method="post">

    <!-- Etiqueta que indica qué dato debe ingresar el usuario -->
    <label>Ingrese las pulgadas:</label>

    <!-- Campo donde el usuario escribe la cantidad de pulgadas -->
    <input type="number" name="pulgadas" step="any">

    <br><br>

    <!-- Botón para enviar los datos y realizar la conversión -->
    <button type="submit">Convertir</button>

</form>
