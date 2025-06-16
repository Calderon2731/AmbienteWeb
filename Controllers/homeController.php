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
        $_POST["txtMensaje"] = "su informacion no es valida";
    }
 }

 //registrar 


 //recuperar acceso

?>