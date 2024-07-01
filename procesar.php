<?php
session_start();
$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];
$_SESSION['usuarios'] = [
    ["email" => "pepito47@gmail.com", "password" => "pepeto23"],
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
    ["email" => "gabrieldonacimento667@gmail.com", "password" => "gaboo"],
    ["email" => "profeluisfagundez@gmail.com", "password" => "luisutu123"],
    ["email" => "santiagofernandezsilveira1@gmail.com", "password" => "santiagoelputocrackmecagoenlaputa"]
];

$usuarios = $_SESSION['usuarios'];

$authenticated = false;

foreach ($usuarios as $usuario) {
    if ($usuario["email"] == $correo && $usuario["password"] == $contrasena) {
        header('Location: inicio.html');
        break;
    }else{
        header('Location: index.php');
    }
}


/*echo "<table>";
echo "<tr><th>Rol</th><th>Correo</th></tr>";
    foreach($usuarios as $usuario){
        echo"<tr><td></td><td>";
        echo $usuario["email"];
        echo "</td></tr>";
    }
echo "</table>";
*/
?>