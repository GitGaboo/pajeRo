<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Trabajadores</title>
</head>
<body>
   <?php
    require_once 'registro.php';
    generarLista($trabajadores);
    generarTrabajador($trabajadorNuevo);
   
   
   ?>
</body>
</html>

