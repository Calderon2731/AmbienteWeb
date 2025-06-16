<?php

     include_once $_SERVER["DOCUMENT_ROOT"].'/AmbienteWeb/models/homeModel.php';

 //logear 
 if(isset($_POST["btnEntrarInicioSesion"]))
 {
    $nombreUsuario = $_POST["txtnombreUsuario"];
     $contrasena =$_POST["txtContrasena"];
    
    $respuesta = ValidaInicioSesionModel($nombreUsuario, $contrasena);

    if($respuesta){
        header("location: ../../views/Home/Principal.php");
    }
    else{
        $_POST["txtMensaje"] = "su informacion no se fue guardada";
    }
 }

 //boton de registrar Usuario
 if(isset($_POST["btnRegistroUsuario"]))
 {
    $numeroTelefono = $_POST["txtnumeroTelefono"];
    $nombreUsuario = $_POST["txtnombreUsuario"];
    $contrasena =$_POST["txtContrasena"];
    $correo = $_POST["txtCorreo"];
    
    $respuesta = RegistrarUsuarioModel($nombreUsuario,$numeroTelefono , $correo, $contrasena);

    if($respuesta){
        header("location: ../../views/Home/login.php");
    }
    else{
        $_POST["txtMensaje"] = "su informacion fue Registrada de manera Correcta";
    }
 }
 


 //recuperar acceso

?>