<?php
$trabajadores = [
    ["nombre" => "Juan", "apellido" => "Gómez", "rol" => "Encargado", "fechaNacimiento" => "1990-05-15", "Cedula" => "34789234"],
    ["nombre" => "María", "apellido" => "López", "rol" => "Jefe", "fechaNacimiento" => "1985-12-10", "Cedula" => "58294756"],
    ["nombre" => "Pedro", "apellido" => "Martínez", "rol" => "Empleado", "fechaNacimiento" => "1980-07-20", "Cedula" => "21938475"],
    ["nombre" => "Ana", "apellido" => "García", "rol" => "Gerente", "fechaNacimiento" => "1992-03-25", "Cedula" => "45678912"],
    ["nombre" => "Carlos", "apellido" => "Fernández", "rol" => "CEO", "fechaNacimiento" => "1988-09-18", "Cedula" => "83746592"],
    ["nombre" => "Laura", "apellido" => "Sánchez", "rol" => "Encargado", "fechaNacimiento" => "1987-06-05", "Cedula" => "76583920"],
    ["nombre" => "Jorge", "apellido" => "Hernández", "rol" => "Jefe", "fechaNacimiento" => "1984-11-30", "Cedula" => "92837465"],
    ["nombre" => "Sofía", "apellido" => "Díaz", "rol" => "Empleado", "fechaNacimiento" => "1995-02-12", "Cedula" => "13456789"],
    ["nombre" => "Daniel", "apellido" => "Torres", "rol" => "Gerente", "fechaNacimiento" => "1983-08-08", "Cedula" => "67382941"],
    ["nombre" => "Lucía", "apellido" => "Romero", "rol" => "CEO", "fechaNacimiento" => "1993-04-17", "Cedula" => "38475629"],
    ["nombre" => "Mario", "apellido" => "Ramírez", "rol" => "Encargado", "fechaNacimiento" => "1986-10-22", "Cedula" => "58372948"],
    ["nombre" => "Elena", "apellido" => "Jiménez", "rol" => "Jefe", "fechaNacimiento" => "1991-01-05", "Cedula" => "78264593"],
    ["nombre" => "Andrés", "apellido" => "Alonso", "rol" => "Empleado", "fechaNacimiento" => "1989-07-14", "Cedula" => "12345678"],
    ["nombre" => "Isabel", "apellido" => "Vega", "rol" => "Gerente", "fechaNacimiento" => "1982-12-28", "Cedula" => "67482930"],
    ["nombre" => "Gabriel", "apellido" => "Martín", "rol" => "CEO", "fechaNacimiento" => "1990-09-03", "Cedula" => "29384756"],
    ["nombre" => "Luisa", "apellido" => "Gutiérrez", "rol" => "Encargado", "fechaNacimiento" => "1984-03-20", "Cedula" => "84756321"]
];
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            print_r($_POST);
        
        if (isset($_POST["name"]) && isset($_POST["apell"]) && isset($_POST["roles"]) && isset($_POST["fechaNac"])) {
            $name = $_POST["name"];
            $apell = $_POST["apell"];
            $roles = $_POST["roles"];
            $fechaNac = $_POST["fechaNac"];
    
            $trabajadorNuevo = [
                "name" => $name,
                "apell" => $apell,
                "roles" => $roles,
                "fechaNac" => $fechaNac
            ];
        }
    } else {
        $trabajadorNuevo = false;
    }
    function generarLista($trabajadores, $trabajadorNuevo){
      echo "<table>";
      echo "<tr><th>Nombre</th><th>Apellido</th><th>Rol</th><th>Nacimiento</th></tr>";
          foreach($trabajadores as $trabajador){
          echo "<tr>";
          echo "<td>" . htmlspecialchars($trabajador['nombre']) . "</td>";
          echo "<td>" . htmlspecialchars($trabajador['apellido']) . "</td>";
           echo "<td>" . htmlspecialchars($trabajador['rol']) . "</td>";
          echo "<td>" . htmlspecialchars($trabajador['fechaNacimiento']) . "</td>";
          echo "</tr>";
            
          }
      echo "</table>";
      echo "<br>";
     echo "<table>";
      echo "<thead><h2>Trabajadores Nuevos</h2></thead>";
      echo "<tr><th>Nombre</th><th>Apellido</th><th>Rol</th><th>FechaNacimiento</th></tr>";
      if($trabajadorNuevo!=false){
       echo "<tr>";
      echo "<td>" . htmlspecialchars($trabajadorNuevo["name"]) . "</td>";
      echo "<td>" . htmlspecialchars($trabajadorNuevo["apell"]) . "</td>";
      echo "<td>" . htmlspecialchars($trabajadorNuevo["roles"]) . "</td>";
       echo "<td>" . htmlspecialchars($trabajadorNuevo["fechaNac"]) . "</td>";
       echo "</tr>";
 }else{
     echo "el usuario no se puede registrar en la tabla";
 }
 echo "</table>";
}
function buscarTrabajador($trabajadores, $ci) {
    foreach ($trabajadores as $trabajador) {
        if ($trabajador['Cedula'] == $ci) {
            return $trabajador;
        }
    }
    return null;
}
?>
