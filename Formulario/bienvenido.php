<?php
session_start();
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a su Perfil de usuario</title>
    <link href="estilobienvenido.css" rel="stylesheet" type="text/css">
</head>
<body>
    
    <?php
    include("bbdd.php");
    
    ?>
    
    <header id="cab">
        <div class="maxw">
          <h1>Modificar Perfil</h1>
          <nav>
            <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path class="heroicon-ui" d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z"/></svg>
         
              <span><?= $_SESSION['Usuario_clave'] ?>
              </span>
              
            </a>
            <a href="logout.php">Cerrar sesión</a>
          </nav>
        </div>
      </header>
    
      <div class="maxw content">
        <div class="cuerpo">
            <p>
              <h2>Añadir cliente</h2>
              <div class="formulario">
                <div class="slide">
  
                  <div class="item">
                    <h3>Información personal</h3>
                    <div class="campos">
                      <aside>
                        <a href="#">
                          <svg class="imgperfil" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="90" height="90">
                            <path class="heroicon-ui" d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z"/></svg>
                          <span>Subir imagen de perfil</span>
                        </a>
                        </aside>
                      <form class="box" action="guardar.php" method="POST">
                        <div class="doble">
                          <div class="campo">
                            <label for="apellido">Apellido 2*</label>
                            <input required type="text" id="apellido"/>
                          </div>
                          <div class="campo">
                            <label for="dni">DNI*</label>
                            <input required type="text" id="dni"/>
                          </div>
                        </div>
                          <div class="doble">
                          <div class="campo">
                            <label for="nick">Nick</label>
                           <input required type="text" id="nick"/>
                          </div>
                        </div>
                        <label for="fecha_nac">Fecha de nacimiento*</label>
                        <input required type="date" id="fecha_nac"/>
  
                        <div class="doble">
                          <div class="campo">
                            <label for="tfl">NºTelefono*</label>
                            <input required type="tel" minlength="10" maxlength="14" id="tfl"/>
                          </div>
                          <div class="campo">
                            <label for="direccion">Direccion</label>
                             <input required type="text" id="direccion"/>
                          </div>
                        </div>
  
                        <div class="doble">
                          <div class="campo">
                            <label for="poblacion">Poblacion</label>
                             <input required type="text" id="poblacion"/>
                            
                          </div>
                          <div class="campo">
                            <label for="provincia">Provincia</label>
                             <input required type="text" id="provincia"/>
                          
                          </div>
                        </div>
  
                        <span class="label">Adjuntar ficheros</span>
                        <input type="file" value="Seleccionar foto" id="file" class="custom-file-input">
                        <div class="clear_r">
                          
                        </div>
                        <input class="form-btn" name="submit" type="submit" value="Guardar" />
                      </form>
                    </div>
                  </div>
  
                  <div class="item">
                    <h3>Actividades</h3>
                    <div class="campos">
  
                      <div class="actividades">
  
                                </ul>
                              </div>
                            </div>
                        
                      </div>
                    </form>
                  </div>
  
                </div>
            </div>
  
            </p>
        </div>
</body>
</html>