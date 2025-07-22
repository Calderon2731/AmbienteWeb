<?php
    include_once $_SERVER["DOCUMENT_ROOT"].'/AmbienteWeb/models/homeModel.php';


    function consultarInfoUsuario($idUsuario)
    {
        $respuesta = consultarInfoUsuarioModel($idUsuario);

        if($respuesta != null && $respuesta->num_rows > 0){

         return mysqli_fetch_assoc($respuesta);  

        }
    }
?>   