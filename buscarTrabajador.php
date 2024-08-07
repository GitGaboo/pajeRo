<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inicio.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Inicio</title>
</head>
<body>
    <header>
        <h1>Inicio</h1>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="trabajadores.html">Acerca de Trabajadores</a></li>
                <li><a href="contacto.html">Contacto</a></li>
                <li><a href="index.html"><img id="fotito" src="pngwing.com.png" width="30vh" height="30vh"></a></li>
            </ul>
        </nav>
    </header>
    <section>
        <ul>
            <li><a href="https:/ParcialPhP/pajeRo/listaDeTrabajadores.php">Lista de Trabajadores</a></li>
            <li><a href="https:/ParcialPhP/pajeRo/buscarTrabajador.php"> Buscar Trabajadores</a></li>
            <li><a href="agregarTrabajadores.html">Agregar Trabajadores</a></li>
        </ul>
    </section>
    <h2>Verificar Trabajador en la base de datos de la empresa</h3>
    <form action="buscarTrabajador.php" method="post">
        <label for="ciTrabajador">Ingresa la cedula</label>
        <input type="number" name="ciTrabajador" placeholder="Cedula de Identidad">
        <input type="submit" value="Buscar">
    </form>
    <?php
        require_once 'registro.php';
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ciTrabajador'])) {
            $ci = $_POST['ciTrabajador'];
            $trabajador = buscarTrabajador($trabajadores, $ci);
            if ($trabajador) {
                echo "<br>";
                echo "Nombre: " . $trabajador['nombre'] . "<br>";
                echo "Apellido: " . $trabajador['apellido'] . "<br>";
                echo "Rol: " . $trabajador['rol'] . "<br>";
                echo "Fecha de Nacimiento: " . $trabajador['fechaNacimiento'] . "<br>";
                echo "Cédula: " . $trabajador['Cedula'] . "<br><br>";
            } else {
                echo "Trabajador no encontrado.";
            }
        }
    ?>
</body>
</html>
