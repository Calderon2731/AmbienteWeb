<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb/models/connect.php';

    function ConsultarMedicamentosModel($Filtro)
    {
        try
        {
            $context = OpenDB();

            $sp = "CALL ConsultarMedicamentos('$Filtro')";
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

    function RegistrarMedicamentoModel($nombre, $descripcion, $precio, $cantidad, $imagen)
    {
        try
        {
            $context = OpenDB();

            $sp = "CALL RegistrarMedicamento('$nombre', '$descripcion', '$precio', '$cantidad', '$imagen')";
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

    function CambiarEstadoMedicamentoModel($idProducto)
    {
        try
        {
            $context = OpenDB();

            $sp = "CALL CambiarEstadoMedicamento('$idProducto')";
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

    function ConsultarInfoMedicamentoModel($idProducto)
    {
        try
        {
            $context = OpenDB();

            $sp = "CALL ConsultarInfoMedicamento('$idProducto')";
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

    function ActualizarMedicamentoModel($idProducto, $nombre, $descripcion, $precio, $cantidad, $imagen)
    {
        try
        {
            $context = OpenDB();

            $sp = "CALL ActualizarMedicamento('$idProducto', '$nombre', '$descripcion', '$precio', '$cantidad', '$imagen')";
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

?>