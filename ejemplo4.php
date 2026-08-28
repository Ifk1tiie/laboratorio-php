<?php
$foo = 10;
$bar = (boolean) $foo; // Convierte 10 a true (se muestra como 1)

echo "El valor de la variable bar es: $bar <br><br>";

// casting
$foo = (int)$bar; // Convierte true a entero (1)
echo "El valor de la variable foo es: $foo";
?>