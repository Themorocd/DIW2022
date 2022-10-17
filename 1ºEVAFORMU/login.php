<?php

 include("bbdd.php");
 
 $sql = "SELECT * FROM usuarios WHERE Usuario_email = '{$_POST['email']}' AND Usuario_clave = '{$_POST['password']}'";
 
   $resultado = mysqli_query($con, $sql) or die();
 
   if( $resultado->num_rows > 0 ) {  
 
     session_start(); 
 
     $_SESSION['Usuario_email'] = $_POST['email'];
     $_SESSION['Usuario_clave'] = $_POST['password'];
     if (password_verify($_POST['password'], $passHash)) {
      # code...
      header("Location: bienvenido.html");
     }else{
      echo "<script>
                 alert('contraseña incorrecta');
                 window.location= 'index.html'
     </script>";
     }
   } else {    
        echo "<script>
                 alert('Usuario o contraseña incorrecta');
                 window.location= 'index.html'
     </script>";
     
 }
  