<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "diw";

$Nombre=$_POST["nombre"];
$Apellido1=$_POST["apellido"];
$Correo=$_POST["email"];
$Contraseña=$_POST["password"];
$passHash = password_hash($Contraseña, PASSWORD_BCRYPT);

$con = mysqli_connect($server,$user,$pass,$database);
if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
}	
mysqli_query($con , "INSERT INTO usuarios(Usuario_nombre, Usuario_apellido1,Usuario_email,Usuario_clave)
VALUES ('$Nombre', '$Apellido1','$Correo', '$Contraseña')");
echo "Connected perfect";
mysqli_close($con);
