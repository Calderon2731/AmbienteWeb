<?php
    include_once $_SERVER["DOCUMENT_ROOT"].'/AmbienteWeb/models/connect.php';


    function consultarInfoUsuarioModel($idUsuario){
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

    function ActualizarPerfilUsuarioModel($idUsuario, $nombre, $correo, $identificacion,$idRol)
    {
        try
        {
            $context = OpenDB();
            $sp = "CALL ActualizarPerfilUsuario('$idUsuario', '$nombre', '$correo', '$identificacion','$idRol')";
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

    function consultarUsuariosModel(){
    try
        {
            $context = OpenDB();
            $sp = "CALL consultarUsuarios()";
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

    function CambiarEstadoUsuarioModel($idUsuario)
    {
        try
        {
            $context = OpenDB();

            $sp = "CALL CambiarEstadoUsuario('$idUsuario')";
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

    
    
    function consultarRolesModel(){
    try
        {
            $context = OpenDB();
            $sp = "CALL ConsultarRoles()";
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