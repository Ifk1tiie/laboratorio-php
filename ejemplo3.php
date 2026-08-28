<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ejemplo para las variables</h1>
<?php 
    $ed = 42;
    $nom = 'JUAN';

    if (is_integer($ed) && is_string($nom)) {
        print("$nom tiene $ed años");
    }
?>
</body>
</html>