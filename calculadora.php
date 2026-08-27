<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>

<h2>Calculadora</h2>

<form method="post">

    Número 1:
    <input type="number" name="num1" step="any" required>
    <br><br>

    Número 2:
    <input type="number" name="num2" step="any" required>
    <br><br>

    Operación:
    <select name="operacion">
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplicacion">Multiplicación</option>
        <option value="redondeo">Redondeo</option>
    </select>

    <br><br>

    <input type="submit" name="calcular" value="Calcular">

</form>

<?php

if (isset($_POST['calcular'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

    if ($operacion == "suma") {

        $resultado = $num1 + $num2;
        echo "Resultado de la suma: " . $resultado;

    } elseif ($operacion == "resta") {

        $resultado = $num1 - $num2;
        echo "Resultado de la resta: " . $resultado;

    } elseif ($operacion == "multiplicacion") {

        $resultado = $num1 * $num2;
        echo "Resultado de la multiplicación: " . $resultado;

    } elseif ($operacion == "redondeo") {

        $resultado = round($num1);
        echo "Resultado del redondeo: " . $resultado;
    }
}

?>

</body>
</html>
