<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo  </title>
</head>
<body>

<h1>Lista de Usuarios</h1>

    <?php
    
        foreach ($datos as $dato){

            echo $dato["nombre"]."<br/>";
        }
    
    
    ?>
    
</body>
</html>