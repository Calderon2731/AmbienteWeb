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
?>   