<?php

  include_once $_SERVER["DOCUMENT_ROOT"].'/AmbienteWeb/Controllers/homeController.php'

?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Pagina de Registro</title>

    <!-- Bootstrap  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"   
      crossorigin="anonymous">  
    <link href="../estilos/index3.css" rel="stylesheet">
    
  </head>
  <body>
    <div class="container">
      <div class="card card-container">
        <h2>Registro</h2>

        <img id="profile-img" class="profile-img-card" src="../imagenes/avatar_2x.png" alt=""/>
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


          <button class="btn btn-lg btn-danger btn-block btn-signin " id="btnRegistroUsuario" name ="btnRegistroUsuario"type="submit">Registrar</button>

        </form>

        <a href="#" class="forgot-password ">
          Olvidó la contraseña ?
        </a>
        <a href="login.php" class="forgot-password">Iniciar Sesion</a>

      </div>

    </div>
    
  </body>
</html>