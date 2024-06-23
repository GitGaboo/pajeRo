<?php
    $usuarios=["email" => "pepito47@gmail.com", "password" => "pepeto23"],
    ["email" => "alberto1234@gmail.com", "password" => "1234"],
    ["email" => "mauro1747@gmail.com", "password" => "987654321"],
    ["email" => "juan.perez@gmail.com", "password" => "abcd1234"],
    ["email" => "maria.lopez@gmail.com", "password" => "efgh5678"],
    ["email" => "carlos.martinez@gmail.com", "password" => "ijkl91011"],
    ["email" => "ana.gomez@gmail.com", "password" => "mnop1213"],
    ["email" => "jose.fernandez@gmail.com", "password" => "qrst1415"],
    ["email" => "laura.garcia@gmail.com", "password" => "uvwx1617"],
    ["email" => "pedro.rodriguez@gmail.com", "password" => "yzab1819"],
    ["email" => "lucia.moreno@gmail.com", "password" => "cdef2021"],
    ["email" => "francisco.diaz@gmail.com", "password" => "ghij2223"],
    ["email" => "sofia.romero@gmail.com", "password" => "klmn2425"],
    ["email" => "gabrieldonacimento667@gmail.com", "password" => "gaboo.05"],
    ["email" => "profeluisfagundez@gmail.com", "password" => "luisutu123"];
    // Obtener los datos del formulario
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

// Verificar si el usuario existe en el array
$usuario_valido = false;
foreach ($usuarios as $usuario) {
    if ($usuario['email'] === $correo && $usuario['password'] === $contraseña) {
        $usuario_valido = true;
        $_SESSION['usuario'] = $correo; // Guardar el correo en la sesión
        break;
    }
}

// Redirigir según la validación
if ($usuario_valido) {
    header('Location: pagina_principal.php');
    exit();
} else {
    $_SESSION['error'] = "Correo o contraseña incorrectos.";
    header('Location: inicio_sesion.php');
    exit();
}
?>
