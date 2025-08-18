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

    function RegistrarMedicamentoModel($nombre, $principio_activo, $concentracion, $forma_farmaceutica , $fecha_vencimiento , $proveedor , $cantidad, $imagen)
    {
        try
        {
            $context = OpenDB();

            $sp = "CALL RegistrarMedicamento('$nombre', '$principio_activo', '$concentracion','$forma_farmaceutica','$fecha_vencimiento','$proveedor', '$cantidad', '$imagen')";
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

    function CambiarEstadoMedicamentoModel($idMedicamento)
    {
        try
        {
            $context = OpenDB();

            $sp = "CALL CambiarEstadoMedicamento('$idMedicamento')";
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

    function ConsultarInfoMedicamentoModel($idMedicamento)
    {
        try
        {
            $context = OpenDB();

            $sp = "CALL ConsultarInfoMedicamento('$idMedicamento')";
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

    function ActualizarMedicamentoModel($idMedicamento, $nombre, $principio_activo, $concentracion, $forma_farmaceutica , $fecha_vencimiento , $proveedor , $cantidad, $imagen)
    {
        try
        {
            $context = OpenDB();

            $sp = "CALL ActualizarMedicamento('$idMedicamento', '$nombre', '$principio_activo', '$concentracion','$forma_farmaceutica','$fecha_vencimiento','$proveedor', '$cantidad', '$imagen')";
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