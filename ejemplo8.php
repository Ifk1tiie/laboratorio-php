<?php
print "<pre>";
print_r($_REQUEST);
print "</pre>";

echo ".......<br>";

 
if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
} else {
    $nombre = 'No se ha ingresado un nombre correctamente';
}
echo "El nombre ingresado es: " . $nombre;
?>