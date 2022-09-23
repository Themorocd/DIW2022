<?php
  session_start();
   
  // Obtengo los datos cargados en el formulario de login.
  $email = $_POST['email'];
  $password = $_POST['password'];
   
  // Datos para conectar a la base de datos.
  
  $nombreServidor = "localhost";
  $nombreUsuario = "root";
  $passwordBaseDeDatos = "";
  $nombreBaseDeDatos = "diw";
  
  // Crear conexión con la base de datos.
  $connect = mysqli_connect($nombreServidor, $nombreUsuario, $passwordBaseDeDatos, $nombreBaseDeDatos);
   
  // Validar la conexión de base de datos.
  if ($connect ->connect_error) {
    die("Connection failed: " . $conn ->connect_error);
  }
   echo "Conectada";
   
      
     // Redirecciono al usuario a la página principal del sitio.
     header("HTTP/1.1 302 Moved Temporarily"); 
     header("Location: principal.php"); 
   