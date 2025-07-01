 <?php
  
  function ValidaInicioSesionModel($nombreUsuario,$contrasena){
    //envia los datos a validar a la Base de datos!!
     try
        {
            $context = OpenDB();

            $sp = "CALL ValidarInicioSesion('$correo', '$contrasenna')";
            $respuesta = $context -> query($sp);

            CloseDB($context);            
            return $respuesta;
        }
        catch(Exception $error)
        {
            
            return null;
        }
  }

  function RegistrarUsuarioModel($nombreUsuario,$numeroTelefono , $correo, $contrasena){

    //enviar los datos a registrar a la base de datos!!
      try
        {
            $context = OpenDB();

            $sp = "CALL RegistrarUsuario('$nombre', '$correo', '$identificacion', '$contrasenna')";
            $respuesta = $context -> query($sp);

            CloseDB($context);            
            return $respuesta;
        }
        catch(Exception $error)
        {
            
            return false;
        }
  }

 ?>