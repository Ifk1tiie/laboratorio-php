<?php
//1.SUMA
$num1 = 4;
$num2 = 7;
$suma = $num1 + $num2;
echo "La suma de $num1 y $num2 es: $suma<br><br>";

//2.RESTA
$num1 = 10;
$num2 = 3;
$resta = $num1 - $num2;
echo "La resta de $num1 y $num2 es: $resta<br><br>";

//3.Multiplicacion
$num1 = 5;
$num2 = 6;
$multiplicacion = $num1 * $num2;
echo "La multiplicacion de $num1 y $num2 es: $multiplicacion<br><br>";

//4.Division
$num1 = 20;
$num2 = 4;
$division = $num1 / $num2;
echo "La division de $num1 y $num2 es: $division<br><br>";

//5. Modulo
$num1 = 15;
$num2 = 4;
$modulo = $num1 % $num2;
echo "El modulo de $num1 y $num2 es: $modulo<br><br>";

//6. Potencia
$base = 2;
$exponente = 3; 
$potencia = $base ** $exponente;
echo "La potencia de $base elevado a $exponente es: $potencia<br><br>";

//7. Redondeo: round(), ceil(), floor()
$numero = 4.6;

$redondeo = round($numero);
$redondeo_arriba = ceil($numero);
$redondeo_abajo = floor($numero);

echo "El numero redondeado es: $redondeo<br>";
echo "El numero redondeado hacia arriba es: $redondeo_arriba<br>";
echo "El numero redondeado hacia abajo es: $redondeo_abajo<br><br>";

//8. Operador módulo % con signos
echo (5 % 3) . "<br>";
echo (-5 % 3) . "<br>";
echo (5 % -3) . "<br>";
echo (-5 % -3) . "<br><br>";

//9. Valor absoluto: abs()
$numero = -7;
$valor_absoluto = abs($numero);
echo "El valor absoluto de $numero es: $valor_absoluto<br>";
?>