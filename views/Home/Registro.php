<?php
  include_once $_SERVER["DOCUMENT_ROOT"].'/AmbienteWeb1/Controllers/homeController.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/AmbienteWeb1/views/layoutExterno.php';
?>

<!DOCTYPE html>
<html >

  <?php
    AddCss();
  ?>
    
  </head>
  <body>
    <div class="container">
      <div class="card card-container">
        <h2>Registro</h2>

        <p id="profile-name" class="profile-name-card"></p>

        <form class="form-signin" action = "" method = "POST">

         <?php // este php muestra el mensaje de "su respuesta no fue validada" por el POST del txtMensaje
          if(isset($_POST["txtMensaje"]))
         {
          echo '<div class="alert alert-warning text-center">' . $_POST["txtMensaje"] . '</div>';
          }
          ?>
                 
          <span class="reauth-email" id="reauth-email"></span>

          <div>
             <input type="text" id="txtNombre" class="form-control" name = "txtNombre" placeholder="Nombre" >
          </div>

          <div>
             <span class="reauth-email" id="reauth-email"></span>
             <input type="tel" id="txtIdentificacion" class="form-control" name = "txtIdentificacion" placeholder="Identificacion" >
          </div>


          <div class ="">
             <span class="reauth-email" id="reauth-email"></span>
             <span class="reauth-email" id="reauth-email"></span>
                <input type="email" id="txtCorreo" class="form-control" name = "txtCorreo" placeholder="Correo" >
          </div>

          <div>
             <span class="reauth-email" id="reauth-email"></span>
            <input type="password" id="txtContrasenna"  name="txtContrasenna" class="form-control" placeholder="Contraseña" >
          </div>
          
          

          <div id="remember" class="checkbox">
            <label>
              <input type="checkbox" name= "txtRecordarme"value="remember-me"> Recordarme
            </label>
          </div>

          <button class=" btn btn-lg btn-danger btn-block btn-signin " id="btnRegistroUsuario" name ="btnRegistroUsuario"type="submit">Registrar</button>

        </form>

        <div>
        Olvidó la contraseña ?<a href="recuperarAcceso.php" class="forgot-password ">Recuperar</a>
        </div>


        <div>
          tiene una cuenta? <a href="login.php" class="forgot-password">Iniciar Sesion</a>
        </div>
  

      </div>

    </div>
    
  </body>
</html>