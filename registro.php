<?php
session_start();
require_once 'agregarTrabajador.php';
echo "<table>";
echo "<tr><th>Rol</th><th>Correo</th></tr>";
    foreach($usuarios as $usuario){
        echo"<tr><td>Rol</td><td>";
        echo $usuario['email'];
        echo "</td></tr>";
    }
echo "</table>";
?>