<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb/models/medicamentoModel.php';

    function ConsultarMedicamentos($Filtro)
    {
        return ConsultarMedicamentosModel($Filtro);
    }

    if(isset($_POST["btnRegistrarMedicamento"]))
    {
        $nombre = $_POST["txtNombre"];
        $principio_activo = $_POST["txtPrincipio_activo"];
        $concentracion = $_POST["txtConcentracion"];
        $forma_farmaceutica = $_POST["txtForma_farmaceutica"];
        $fecha_vencimiento = $_POST["txtFecha_vencimiento"];
        $proveedor = $_POST["txtProveedor"];
        $cantidad = $_POST["txtCantidad"];
        $imagen = '/AmbienteWeb/Views/ImagenMedicamentos/' . $_FILES["txtImagen"]["name"];

        $origen = $_FILES["txtImagen"]["tmp_name"];
        $destino = $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb/views/ImagenMedicamentos/' . $_FILES["txtImagen"]["name"];
        copy($origen,$destino);

        $respuesta = RegistrarMedicamentoModel($nombre, $principio_activo, $concentracion, $forma_farmaceutica , $fecha_vencimiento , $proveedor , $cantidad, $imagen);

        if($respuesta)
        {
            header("location: ../../views/medicamento/consultarMedicamentos.php");
        }
        else
        {
            $_POST["txtMensaje"] = "El medicamento no fue registrado correctamente.";
        }
    }  
    
    if(isset($_POST["btnCambiarEstadoMedicamento"]))
    {
        $idMedicamento = $_POST["IdMedicamento"];
        
        $respuesta = CambiarEstadoMedicamentoModel($idMedicamento);

        if($respuesta)
        {
            header("location: ../../views/medicamento/consultarMedicamentos.php");
        }
        else
        {
            $_POST["txtMensaje"] = "El medicamento no fue actualizado correctamente.";
        }
    }  

    function ConsultarInfoMedicamento($idMedicamento)
    {
        $respuesta = ConsultarInfoMedicamentoModel($idMedicamento);

        if($respuesta != null && $respuesta -> num_rows > 0)
        {
            return mysqli_fetch_array($respuesta);
        }
    }

    if(isset($_POST["btnActualizarMedicamento"]))
    {
        $idMedicamento = $_POST["txtId"];
        $nombre = $_POST["txtNombre"];
       $principio_activo = $_POST["txtPrincipio_activo"];
        $concentracion = $_POST["txtConcentracion"];
        $forma_farmaceutica = $_POST["txtForma_farmaceutica"];
        $fecha_vencimiento = $_POST["txtFecha_vencimiento"];
        $proveedor = $_POST["txtProveedor"];
        $cantidad = $_POST["txtCantidad"];
        $imagen = "";

        if($_FILES["txtImagen"]["name"] != "")
        {
            $imagen = '/AmbienteWeb/views/ImagenMedicamentos/' . $_FILES["txtImagen"]["name"];

            $origen = $_FILES["txtImagen"]["tmp_name"];
            $destino = $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb/views/ImagenMedicamentos/' . $_FILES["txtImagen"]["name"];
            copy($origen,$destino);
        }

        $respuesta = ActualizarMedicamentoModel($idMedicamento, $nombre,$principio_activo, $concentracion, $forma_farmaceutica , $fecha_vencimiento , $proveedor , $cantidad, $imagen);

        if($respuesta)
        {
            header("location: ../../views/medicamento/consultarMedicamentos.php");
        }
        else
        {
            $_POST["txtMensaje"] = "El medicamento no fue actualizado correctamente.";
        }
    }

?>