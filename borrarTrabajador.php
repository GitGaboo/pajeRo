<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="trabajadores.css">
    <title>Acerca de los Trabajadores</title>
</head>
<body>
    <section>
        <ul>
            <li><a href="gestionTrabajadores.html">Ingresar trabajador</a></li>
            <li><a href="listaDeTrabajadores.php">Ver lista de trabajadores</a></li>
            <li><a href="trabajadores.html">Buscar a un trabajador</a></li>
        </ul>
    </section>
    <form action="procesar.php" method="post">
        <label for="email"></label>
        <input type="text" name="email" placeholder="ejemplo@gmail.com">
        <input type="submit">
    </form>
    <?php
    require_once 'eliminar_usuario.php';
if (isset($_POST['email'])) {
    $email = $_POST['email'];

    if (eliminarUsuario($email)) {
        echo "Usuario con email $email eliminado correctamente.";
    } else {
        echo "No se encontró ningún usuario con el email $email.";
    }
}
    ?>
</body>
</html>
