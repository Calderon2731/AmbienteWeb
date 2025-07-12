<?php

  include_once $_SERVER["DOCUMENT_ROOT"].'/AmbienteWeb/Controllers/homeController.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/AmbienteWeb/views/layoutExterno.php';

?>

<!DOCTYPE html>
<html >
  <?php
  AddCss();
  ?>

  <body>

    <div class="container-fluid">

      <div class="card card-container ">
        <h2>Bienvenido</h2>
        
        
        <p id="profile-name" class="profile-name-card"></p>

        <form class="form-signin" action = "" method = "POST">

         <?php // este php muestra el mensaje de "su respuesta no fue validada" por el POST del txtMensaje
          if(isset($_POST["txtMensaje"]))
         {
          echo '<div class="alert alert-warning text-center">' . $_POST["txtMensaje"] . '</div>';
          }
          ?>
        
          <span class="reauth-email" id="reauth-email"></span>

          <input type="text" id="txtCorreo" class="form-control" name = "txtCorreo" placeholder="Correo" >

          <input type="password" id="txtContrasenna"  name="txtContrasenna" class="form-control" placeholder="Contraseña" >
          
          <div id="remember" class="checkbox">
            <label>
              <input type="checkbox" name= "txtRecordarme"value="remember-me"> Recordarme
            </label>
          </div>
          <button class="btn btn-lg btn-danger btn-block btn-signin "  name = "btnEntrarInicioSesion"type="submit">Entrar</button>

        </form>

        <div class = "Recuperar">
         Olvidó la contraseña? <a href="recuperarAcceso.php" class="forgot-password"><b>Recuperar</b></a>
        </div>

        <div class = "OlvidarContra">
         no tienes una cuenta? <a href="Registro.php" class="forgot-password"> <b>Registrarse</b></a>
        </div>

      </div>

    </div>
    
  </body>
</html>