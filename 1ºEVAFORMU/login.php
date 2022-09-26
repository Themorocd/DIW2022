<?php
  session_start();

$server = "localhost";
$user = "root";
$pass = "";
$database = "diw";

  $email = $_POST['email'];
  $password = $_POST['password'];

  $con = mysqli_connect($server,$user,$pass,$database);
  if (!$con) {
          die("Connection failed: " . mysqli_connect_error());
  }	

  mysqli_query($sql , "SELECT Usuario_email,Usuario_clave FROM usuarios WHERE Usuario_email = '{$_POST['email']}'
   AND Usuario_clave = '{$_POST['password']}'");

    if($resultado = $mysqli_query( $sql ) === true){

        if( $resultado_num_rows >0){

            $_SESSION['Usuario_email'] = $_POST['email'];
            $_SESSION['Usuario_clave'] = $_POST['password'];
        }else{
            echo("Error");
        }

    }
  echo("Logeado");
  
  ?>