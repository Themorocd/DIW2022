<?php
 include("bbdd.php");
 
 $sql = "SELECT * FROM usuarios WHERE Usuario_email = '{$_POST['email']}' AND Usuario_clave = '{$_POST['password']}'";
 
   $resultado = mysqli_query($con, $sql) or die();
 
   if( $resultado->num_rows > 0 ) {  
 
     session_start(); 
 
     $_SESSION['Usuario_nombre'] = $_POST['email'];
     $_SESSION['Usuario_clave'] = $_POST['password'];
 
     echo "<script>
                 alert('Usuario o contraseña incorrecta');
                 window.location= 'bienvenido.html'
     </script>";
 
   } else {    
        echo "<script>
                 alert('Usuario o contraseña incorrecta');
                 window.location= 'index.html'
     </script>";
     
 }
  
  ?>