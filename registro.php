<?php

    $trabajadores=[
        ["nombre" => "Juan", "apellido" => "Gómez", "rol" => "Encargado", "fechaNacimiento" => "1990-05-15"],
        ["nombre" => "María", "apellido" => "López", "rol" => "Jefe", "fechaNacimiento" => "1985-12-10"],
        ["nombre" => "Pedro", "apellido" => "Martínez", "rol" => "Empleado", "fechaNacimiento" => "1980-07-20"],
        ["nombre" => "Ana", "apellido" => "García", "rol" => "Gerente", "fechaNacimiento" => "1992-03-25"],
        ["nombre" => "Carlos", "apellido" => "Fernández", "rol" => "CEO", "fechaNacimiento" => "1988-09-18"],
        ["nombre" => "Laura", "apellido" => "Sánchez", "rol" => "Encargado", "fechaNacimiento" => "1987-06-05"],
        ["nombre" => "Jorge", "apellido" => "Hernández", "rol" => "Jefe", "fechaNacimiento" => "1984-11-30"],
        ["nombre" => "Sofía", "apellido" => "Díaz", "rol" => "Empleado", "fechaNacimiento" => "1995-02-12"],
        ["nombre" => "Daniel", "apellido" => "Torres", "rol" => "Gerente", "fechaNacimiento" => "1983-08-08"],
        ["nombre" => "Lucía", "apellido" => "Romero", "rol" => "CEO", "fechaNacimiento" => "1993-04-17"],
        ["nombre" => "Mario", "apellido" => "Ramírez", "rol" => "Encargado", "fechaNacimiento" => "1986-10-22"],
        ["nombre" => "Elena", "apellido" => "Jiménez", "rol" => "Jefe", "fechaNacimiento" => "1991-01-05"],
        ["nombre" => "Andrés", "apellido" => "Alonso", "rol" => "Empleado", "fechaNacimiento" => "1989-07-14"],
        ["nombre" => "Isabel", "apellido" => "Vega", "rol" => "Gerente", "fechaNacimiento" => "1982-12-28"],
        ["nombre" => "Gabriel", "apellido" => "Martín", "rol" => "CEO", "fechaNacimiento" => "1990-09-03"],
        ["nombre" => "Luisa", "apellido" => "Gutiérrez", "rol" => "Encargado", "fechaNacimiento" => "1984-03-20"]
        ];   
        $name= $_POST["nombre"];
        $apell= $_POST["apellido"];
        $roles= $_POST["rol"];
        $fechaNac= $_POST["fechaNacimiento"];
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name= $_POST["nombre"];
            $apell= $_POST["apellido"];
            $roles= $_POST["rol"];
            $fechaNac= $_POST["fechaNacimiento"];
        }
        
        
        function agregarTrabajadores($name, $apell, $roles, $fechaNac){
                   $trabajadorIngresado=[
                   "nombre" => $name,
                   "apellido" => $apell,
                   "rol" => $roles,
                   "fechaNacimiento" => $fechaNac
                   ];
                   return $trabajadorIngresado;
            }
        $trabajadorNuevo= agregarTrabajadores($name, $apell, $roles, $fechaNac);
        
session_start();
   echo "<table>";
   echo "<tr><th>Nombre</th><th>Apellido</th><th>Rol</th><th>Nacimiento</th></tr>";
       foreach($trabajadores as $trabajador){
           echo"<tr><td>";
           echo $trabajador['nombre'];
           echo"</td><td>";
           echo $trabajador['apellido'];
           echo"</td><td>";
           echo $trabajador['rol'];
           echo"</td><td>";
           echo $trabajador['fechaNacimiento'];
           echo "</td></tr>";
           echo"<tr><td>";
           
       }
   echo "</table>";
   echo "<br>";
   echo "<table>";
   echo "<tr><th>Nombre</th><th>Apellido</th><th>Rol</th><th>Nacimiento</th></tr>";
   foreach($trabajadorNuevo as $trabajadornew){
    echo"<tr><td>";
    echo $trabajadornew['nombre'];
    echo"</td><td>";
    echo $trabajadornew['apellido'];
    echo"</td><td>";
    echo $trabajadornew['rol'];
    echo"</td><td>";
    echo $trabajadornew['fechaNacimiento'];
    echo "</td></tr>";
}
    echo "</table>";
?>
