<?php
     include_once $_SERVER["DOCUMENT_ROOT"].'/AmbienteWeb/models/homeModel.php';
     include_once $_SERVER["DOCUMENT_ROOT"].'/AmbienteWeb/Controllers/utilidadesController.php';

 //logear 
 if(isset($_POST["btnEntrarInicioSesion"]))
 {
    $correo = $_POST["txtCorreo"];
    $contrasenna =$_POST["txtContrasenna"];
    
    $respuesta = ValidaInicioSesionModel($correo, $contrasenna);

    if($respuesta != null && $respuesta -> num_rows > 0){
        header("location: ../../views/Home/Principal.php");
    }
    else{
        $_POST["txtMensaje"] = "su informacion no fue guardada";
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

 if(isset($_POST["btnRecuperarAcceso"]))
 {
    //solo recibe el correo 
    $correo = $_POST["txtCorreo"];
    //manda los datos al modelo mediante la variable respuesta

    $respuesta = validarCorreoModel($correo); // se valida si existe el correo o no

    // si la respuesta no esta vacia y tiene mas de 1 registro
    if($respuesta != null && $respuesta -> num_rows > 0){

      //pone en un array los datos 
        $datos = mysqli_fetch_array($respuesta);

         $contrasenna = generarContrasena();// genera una contra aleatoria 

         //actualizar esa contra en la base de datos en el modelo
         $respuestaActualizacion = ActualizarContrasennaModel($datos["IdUsuario"], $contrasenna);

         if($respuestaActualizacion){// si la actualizacion fue exitosa, se pone un mensaje al usuario
            $mensaje = "<html><body>
            Estimad@" . $datos["Nombre"] . ' <br><br>
            se ha generado un codigo temporal de seguridad: XXXXXXX <br>
            Recuerde realizar el cambio de contra una vez ingrese al sistema</body>
            </html>';


            $respuestaCorreo = EnviarCorreo('Recuperar Acceso', $mensaje, $correo);

            if( $respuestaCorreo){
                header("location: ../../Views/Home/login.php");
            }
         }
        
    }else{
        $_POST["txtMensaje"] = "su informacion NO fue Recuperada";
    }
 }

?>