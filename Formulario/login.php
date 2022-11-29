<?php

 include("bbdd.php");
 $sql = "SELECT Usuario_clave FROM usuarios WHERE Usuario_email = '{$_POST['email']}'";
 
   $resultado = mysqli_query($con, $sql) or die();
   $passHash=mysqli_fetch_row($resultado);
   if( $resultado->num_rows > 0 ) {  
    if(password_verify($_POST['password'],$passHash[0])){
        
     session_start(); 
     $datosusuario = mysqli_fetch_assoc($resultado);
     $_SESSION['Usuario_clave'] = $datosusuario['clave'];
     header("Location: bienvenido.php");
     exit();
     
    }else{
         echo "<script>
                 alert('contraseña incorrecta');
                 
     </script>";
    }
    
   } else {    
        echo "<script>
                 alert('Usuario o contraseña incorrecta');
                 
     </script>";
     
 }
  