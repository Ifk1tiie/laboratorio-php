<?php

if (isset($_POST['nombre']) && isset($_POST['edad'])) {
    $Nombre = $_POST['nombre'];
    $Edad = intval($_POST['edad']);

    echo "El nombre es: " . $Nombre . "<br>";

    if ($Edad >= 18) {
        echo "Usted puede votar en las próximas elecciones 2028";
    } else {
        echo "Usted no es mayor de edad";
    }
} else {
    echo "Por favor, llene el formulario primero.";
}
?>