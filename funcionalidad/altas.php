
<html lang="es">
	<head>
	<link rel="stylesheet" href="../css/menu.css">
	</head>
</html>


<?php 

include '../forms/menu.php';
$ape = $_POST['apellido'];
$nom = $_POST['nombre'];
$ed = $_POST['edad'];
$cor = $_POST['correo'];
$con = $_POST['clave'];
$user = $_POST['usuario'];
$pin = $_POST['pin'];
$archivo = $_FILES['archivo']["tmp_name"];
$archivotam = $_FILES['archivo']["size"];



// salida de informacion

echo "<h3>".$ape."</h3>". "<h3>".$nom."</h3>". "<h3>".$ed."</h3>"."<h3>".$cor."</h3>"."<h3>".$con."</h3>"."<h3>".$user."</h3>"."<h3>".$pin."</h3>";
if($archivo != "none"){

$fp = fopen($archivo,"rb");
$contenido = fread($fp,$archivotam);
$contenido = addslashes($contenido);
fclose($fp);

$base = "gestion";
$Conexion =  mysqli_connect("localhost","root","",$base);

$cadena= "INSERT INTO personas(apellido, nombre, edad, correo, clave, usuario, pin, archivo) VALUES ('$ape','$nom','$ed','$cor','$con','$user', '$pin', '$archivo')";

$resultado = mysqli_query($Conexion,$cadena);

if($resultado){
	echo "se ha insertado un registro"."<br>";

}else{
	echo "NO se ha generado un registro"."<br>";
}
}
else
print("No se puede subir el archivo");

?>