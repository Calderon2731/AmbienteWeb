<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb/models/medicamentoModel.php';

    function ConsultarMedicamentos($Filtro)
    {
        return ConsultarMedicamentosModel($Filtro);
    }

    if(isset($_POST["btnRegistrarMedicamento"]))
    {
        $nombre = $_POST["txtNombre"];
        $descripcion = $_POST["txtDescripcion"];
        $precio = $_POST["txtPrecio"];
        $cantidad = $_POST["txtCantidad"];
        $imagen = '/AmbienteWeb2/Views/ImagenMedicamentos/' . $_FILES["txtImagen"]["name"];

        $origen = $_FILES["txtImagen"]["tmp_name"];
        $destino = $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb2/views/ImagenMedicamentos/' . $_FILES["txtImagen"]["name"];
        copy($origen,$destino);

        $respuesta = RegistrarMedicamentoModel($nombre, $descripcion, $precio, $cantidad, $imagen);

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
        $idProducto = $_POST["IdProducto"];
        
        $respuesta = CambiarEstadoMedicamentoModel($idProducto);

        if($respuesta)
        {
            header("location: ../../views/medicamento/consultarMedicamentos.php");
        }
        else
        {
            $_POST["txtMensaje"] = "El medicamento no fue actualizado correctamente.";
        }
    }  

    function ConsultarInfoMedicamento($idProducto)
    {
        $respuesta = ConsultarInfoMedicamentoModel($idProducto);

        if($respuesta != null && $respuesta -> num_rows > 0)
        {
            return mysqli_fetch_array($respuesta);
        }
    }

    if(isset($_POST["btnActualizarMedicamento"]))
    {
        $idProducto = $_POST["txtId"];
        $nombre = $_POST["txtNombre"];
        $descripcion = $_POST["txtDescripcion"];
        $precio = $_POST["txtPrecio"];
        $cantidad = $_POST["txtCantidad"];
        $imagen = "";

        if($_FILES["txtImagen"]["name"] != "")
        {
            $imagen = '/AmbienteWeb2/views/ImagenMedicamentos/' . $_FILES["txtImagen"]["name"];

            $origen = $_FILES["txtImagen"]["tmp_name"];
            $destino = $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb2/views/ImagenMedicamentos/' . $_FILES["txtImagen"]["name"];
            copy($origen,$destino);
        }

        $respuesta = ActualizarMedicamentoModel($idProducto, $nombre, $descripcion, $precio, $cantidad, $imagen);

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