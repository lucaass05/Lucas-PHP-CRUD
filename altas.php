
<html lang="es">
	<head>
	<link rel="stylesheet" href="css/altaBajaModificacion.css">
	</head>
</html>


<?php 

include 'menu.php';

$ape = $_POST['apellido'];
$nom = $_POST['nombre'];
$ed = $_POST['edad'];
$cor = $_POST['correo'];
$con = $_POST['clave'];
$user = $_POST['usuario'];
$pin = $_POST['pin'];


// salida de informacion

echo "<h3>".$ape."</h3>". "<h3>".$nom."</h3>". "<h3>".$ed."</h3>"."<h3>".$cor."</h3>"."<h3>".$con."</h3>"."<h3>".$user."</h3>"."<h3>".$pin."</h3>";

$base = "gestion";
$Conexion =  mysqli_connect("localhost","root","",$base);

$cadena= "INSERT INTO personas(apellido, nombre, edad, correo, clave, usuario, pin) VALUES ('$ape','$nom','$ed','$cor','$con','$user', '$pin')";

$resultado = mysqli_query($Conexion,$cadena);

if($resultado){
	echo "se ha insertado un registro"."<br>";

}else{
	echo "NO se ha generado un registro"."<br>";
}

 ?>
