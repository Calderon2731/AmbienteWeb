<?php
  
    include_once $_SERVER["DOCUMENT_ROOT"].'/AmbienteWeb/models/connect.php';


    function consultarInfoUsuarioModel($idUsuario,){

     try
        {
            $context = OpenDB();

            $sp = "CALL consultarInfoUsuario('$idUsuario')";
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
?>