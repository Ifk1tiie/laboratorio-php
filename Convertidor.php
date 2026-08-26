<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $pulgadas = $_POST["pulgadas"];
    $centimetros = $pulgadas * 2.54;

    echo "El resultado es: " . $centimetros . " centímetros.";
}

?>

<form method="post">
    <label>Ingrese las pulgadas:</label>
    <input type="number" name="pulgadas" step="any">

    <br><br>

    <button type="submit">Convertir</button>
</form>
