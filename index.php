<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Inicio de Sesion</title>
</head>
<body>
	<section id="bloqueInicio">
		<section id="inicio">
			<h1>Inicio de Sesion</h1>
			<form action="procesar.php" method="post">
				<label for="correo">Correo Electronico : <br></label>
				<input type="text" id="correo"><br>
				<label for="contraseña">Contraseña :<br></label>
				<input type="text" id="contraseña"><br>
				<input type="submit" id="boton">
			</form>
		</section>
	</section>	
</body>
</html>