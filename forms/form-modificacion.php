<?php
include 'menu.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Modificacion</title>
	<link rel="stylesheet" href="../css/formAltas.css">
</head>
<body style="font-family: Verdana, Geneva, Tahoma, sans-serif;">

<div class="container">
	<h3 class="altaTitulo">FORMULARIO DE MODIFICACION</h3>
	<form class="altaInput" action="../funcionalidad/modificacion.php" method="POST" >
	<div class="grupoInputs">
		<label for="pin">Campo Clave PIN:</label>
		<input type="text" name="pin"><br>	
    </div>

		<br><br>
		Campos a modificar:<br>

		<div class="grupoInputs">
		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre"><br>
	    </div>

		<div class="grupoInputs">
		<label for="edad">Edad:</label>
		<input type="text" name="edad"><br>
	    </div>

		<div class="grupoInputs">
		<label for="correo">Correo:</label>
		<input type="text" name="correo"><br>
	    </div>

		<div class="grupoInputs">
		<label for="clave">Contraseña:</label>
		<input type="password" name="clave"><br>
	    </div>

		<div class="grupoInputs">
		<label for="usuario">Nombre de usuario nuevo:</label>
		<input type="text" name="usuario"><br>
        </div>

		<div class="btn-submit">
		<input type="submit" value="Modificar"><br>
	    </div>
	</form>
</div>
	
</body>
</html>