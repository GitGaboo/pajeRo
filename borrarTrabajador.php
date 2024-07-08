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
            <li><a href="https:/ParcialPhP/pajeRo/listaDeTrabajadores.php">Lista de Trabajadores</a></li>
            <li><a href="https:/ParcialPhP/pajeRo/buscarTrabajador.php"> Buscar Trabajadores</a></li>
            <li><a href="agregarTrabajadores.html">Agregar Trabajadores</a></li>
        </ul>
    </section>
    <form action="procesar.php" method="post">
        <label for="email"></label>
        <input type="text" name="email" placeholder="ejemplo@gmail.com">
        <input type="submit">
    </form>
    <?php
    //gabo puto arregla esto antes de que el profe no meta el ponitito
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
