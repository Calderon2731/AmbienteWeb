<?php

     include_once $_SERVER["DOCUMENT_ROOT"].'/AmbienteWeb/models/homeModel.php';

 //logear 
 if(isset($_POST["btnEntrarInicioSesion"]))
 {
     $correo = $_POST["txtCorreo"];
     $contrasenna =$_POST["txtContrasenna"];
    
    $respuesta = ValidaInicioSesionModel($correo, $contrasenna);

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

?>