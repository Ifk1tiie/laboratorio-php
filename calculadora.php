<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];

    $suma = $numero1 + $numero2;
    echo "La suma es: " . $suma . "<br>";
    
    $resta = $numero1 - $numero2;
    echo "La resta es: " . $resta . "<br>";

    $multiplicacion = $numero1 * $numero2;
    echo "La multiplicacion es: " . $multiplicacion . "<br>";

    $redondeado = round($multiplicacion, 2);
    echo "Redondeado: " . $redondeado . "<br>";
}
?>

<form method="post">
    <label>Primer número:</label>
    <input type="number" name="numero1" step="any">

    <br><br>

    <label>Segundo número:</label>
    <input type="number" name="numero2" step="any">

    <br><br>

    <button type="submit">Calcular</button>
</form>