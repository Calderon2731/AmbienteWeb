 <?php

 include_once $_SERVER["DOCUMENT_ROOT"].'/AmbienteWeb/models/connect.php';


  
  function ValidaInicioSesionModel($correo,$contrasenna){
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
          RegistrarError($error);
            return null;
        }
  }

  function RegistrarUsuarioModel($nombre, $correo, $identificacion , $contrasenna){

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
          RegistrarError($error);
            return false;
        }
  }

  function validarCorreoModel($correo){
    try
        {
          $context = OpenDB();

          $sp = "CALL validarCorreo('$correo')";
          $respuesta = $context -> query($sp);

          CloseDB($context);            
          return $respuesta;
        }
    catch(Exception $error)
      {
        RegistrarError($error);
        return null;
      }

  }

  function ActualizarContrasennaModel($idUsuario,$contrasenna){
    try
        {
            $context = OpenDB();

            $sp = "CALL ActualizarContrasenna('$idUsuario','$contrasenna')";
            $respuesta = $context -> query($sp);

            CloseDB($context);            
            return $respuesta;
        }
        catch(Exception $error)
        {
          RegistrarError($error);
            return false;
        }

  }

 ?>