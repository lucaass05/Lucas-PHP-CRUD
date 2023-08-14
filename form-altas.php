<?php
include 'menu.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Altas</title>
	<link rel="stylesheet" href="css/formAltas.css">
</head>
<body style="font-family: Verdana, Geneva, Tahoma, sans-serif;">

<div class="container">
    <h3 class="altaTitulo">FORMULARIO DE ALTA</h3>
	<form class="altaInput" action="altas.php" method="POST" >
		<div class="grupoInputs">
		<label for="apellido">Apellido:</label>
		<input type="text" name="apellido"><br>
		</div>
		
		<div class="grupoInputs">
		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre"><br>
        </div>

		<div class="grupoInputs">
		<label for="edad">Edad:</label>
		<input type="text" name="edad"><br>
	    </div>

		<div class="grupoInputs">
		<label for="nombre">Correo:</label>
		<input type="text" name="correo"><br>
        </div>

		<div class="grupoInputs">
		<label for="nombre">Contraseña:</label>
		<input type="text" name="contraseña"><br>
        </div>

		<div class="grupoInputs">
		<label for="nombre">Nombre de Usuario:</label>
		<input type="text" name="user"><br>
        </div>

		<div class="btn-submit">
		<input type="submit" value="Grabar"><br>
	    </div>
	</form>
</div>
<div class="img">
	<img src="../PhpEjemplo-main/img/unnamed.jpg" alt="">
</div>
	
	
</body>
</html>
