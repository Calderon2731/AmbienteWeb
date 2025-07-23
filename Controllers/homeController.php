<?php


    include_once $_SERVER["DOCUMENT_ROOT"].'/AmbienteWeb/models/homeModel.php';
    include_once $_SERVER["DOCUMENT_ROOT"].'/AmbienteWeb/Controllers/utilidadesController.php';

    if(session_status() == PHP_SESSION_NONE){
    session_start();             //inicia las variables de session 
    }

 //logear 
    if(isset($_POST["btnEntrarInicioSesion"]))
    {
    $correo = $_POST["txtCorreo"];
    $contrasenna = $_POST["txtContrasenna"];

    $respuesta = ValidaInicioSesionModel($correo, $contrasenna);

    if($respuesta != null && $respuesta->num_rows > 0)
        {
        $datos = mysqli_fetch_array($respuesta);  // Obtener datos del usuario

        $_SESSION["IdUsuario"] = $datos["IdUsuario"];  // Guardar IdUsuario en sesión
        $_SESSION["Nombre"] = $datos["Nombre"];

        header("Location: ../../views/Home/Principal.php");
    }
    else{
        
        $_SESSION["txtMensaje"] = "Correo o contraseña incorrectos";

    }
}



 //boton de registrar Usuario
if(isset($_POST["btnRegistroUsuario"]))
{ 
    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $identificacion = $_POST["txtIdentificacion"];
    $contrasenna =$_POST["txtContrasenna"];

    $respuesta = RegistrarUsuarioModel($nombre,$correo,$identificacion, $contrasenna);

    if($respuesta){
        header("location: ../../views/Home/login.php");
    }
    else{
        $_POST["txtMensaje"] = "su informacion NO fue Registrada ";
    }
} 

 //recuperar acceso

// Recuperar acceso
if (isset($_POST["btnRecuperarAcceso"])) {
    $correo = $_POST["txtCorreo"];
    $respuesta = validarCorreoModel($correo);

    if ($respuesta != null && $respuesta->num_rows > 0) {
        $datos = mysqli_fetch_array($respuesta);
        $contrasenna = generarContrasena();

        $respuestaActualizacion = ActualizarContrasennaModel($datos["IdUsuario"], $contrasenna);

        if ($respuestaActualizacion) {
            $mensaje = "<html><body>
                Estimad@" . $datos["Nombre"] . ",<br><br>
                Se ha generado un código temporal de seguridad: <strong>" . $contrasenna . "</strong><br>
                Recuerde realizar el cambio de contraseña una vez ingrese al sistema.
                </body></html>";

            $respuestaCorreo = EnviarCorreo('Recuperar Acceso', $mensaje, $correo);

            if ($respuestaCorreo) {
                header("Location: ../../Views/Home/login.php");
                exit();
            }
        }
    } else {
        $_POST["txtMensaje"] = "Su información NO fue recuperada.";
    }
}

// Agendar una cita médica
if (isset($_POST["btnAgendarCita"])) {
    $fecha = $_POST["txtFecha"];
    $hora = $_POST["txtHora"];
    $motivo = $_POST["txtMotivo"];
    $medico = $_POST["txtMedico"];
   $idusuario = $_SESSION["IdUsuario"];

    // Bloque de depuración
    echo "<pre>";
    echo "ID Usuario: $idusuario\n";
    echo "Fecha: $fecha\n";
    echo "Hora: $hora\n";
    echo "Motivo: $motivo\n";
    echo "ID Médico: $medico\n";
    echo "</pre>";

    $respuesta = RegistrarCita($idusuario, $fecha, $hora, $motivo, $medico);

    if ($respuesta) {
        header("Location: ../Views/Home/citaconfirmada.php");
    } else {
       echo "error";
    }
}


?>
