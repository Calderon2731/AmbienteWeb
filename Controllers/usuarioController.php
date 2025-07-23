<?php
    include_once $_SERVER["DOCUMENT_ROOT"].'/AmbienteWeb/models/usuarioModel.php';
    include_once $_SERVER["DOCUMENT_ROOT"].'/AmbienteWeb/models/homeModel.php';

       if(session_status() == PHP_SESSION_NONE)
    {
        session_start();
    }

    function consultarInfoUsuario($idUsuario)
    {
        $respuesta = consultarInfoUsuarioModel($idUsuario);

        if($respuesta != null && $respuesta->num_rows > 0){

        return mysqli_fetch_array($respuesta);  

        }
    }

    if(isset($_POST["btnActualizarPerfilUsuario"]))
    {
        $nombre = $_POST["txtNombre"];
        $correo = $_POST["txtCorreo"];
        $identificacion = $_POST["txtIdentificacion"];
        $idUsuario = $_SESSION["IdUsuario"];

        $respuesta = ActualizarPerfilUsuarioModel($idUsuario, $nombre, $correo, $identificacion);

        if($respuesta)
        {
            $_POST["txtMensaje"] = "Su información fue actualizada";
        }
        else
        {
            $_POST["txtMensaje"] = "Su información no fue actualizada, hubo un error";
        }
    }

    if(isset($_POST["btnActualizarContrasenna"]))
    {
        $idUsuario = $_SESSION["IdUsuario"];
        $contrasennaNueva = $_POST["txtContrasennaNueva"];
        $contrasennaAnterior = $_POST["txtContrasennaAnterior"];
        $confirmar = $_POST["txtConfirmar"];
        $contrasennaSesion = $_SESSION["Contrasenna"];
        // si la contraseña actual es distinta de la anterior, muestra el mensaje
        if($contrasennaSesion != $contrasennaAnterior)
        {
            $_POST["txtMensaje"] = "Su contraseña anterior esta equivocada.";
            return;
        }

        //si es diferente de lo confirmado, no deja y suelta el mensaje
        if($contrasennaNueva != $confirmar)
        {
            $_POST["txtMensaje"] = "La contraseña nueva esta equivocada, confirme de nuevo";
            return;
        }

        $respuesta = ActualizarContrasennaModel($idUsuario, $contrasennaNueva);

        if($respuesta)
        {
            $_SESSION["Contrasenna"] = $contrasennaNueva;
            $_POST["txtMensaje"] = "Su contraseña se actualizó correctamente.";
        }
        else
        {
            $_POST["txtMensaje"] = "Su contraseña no fue actualizada correctamente.";
        }
    }
?>   