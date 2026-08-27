<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>

<h2>Calculadora</h2>

<form method="post">

    Número 1:
    <input type="number" step="any" name="num1" required>
    <br><br>

    Número 2:
    <input type="number" step="any" name="num2" required>
    <br><br>

    <input type="submit" name="calcular" value="Calcular">

</form>

<?php

if (isset($_POST['calcular'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    echo "<h3>Resultados:</h3>";

    echo "Suma: " . ($num1 + $num2) . "<br>";
    echo "Resta: " . ($num1 - $num2) . "<br>";
    echo "Multiplicación: " . ($num1 * $num2) . "<br>";

    echo "Redondeo del primer número: " . round($num1) . "<br>";
}

?>

</body>
</html>
