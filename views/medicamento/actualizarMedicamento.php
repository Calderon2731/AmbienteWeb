<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb/views/layoutInterno.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb/Controllers/medicamentoController.php';

    $idMedicamento = $_GET['q'];
    $resultado = ConsultarInfoMedicamento($idMedicamento);
?>

<!DOCTYPE html>
<html>
<?php
       AddCss();
    ?>

<body>

    <div id="main-wrapper">
        <?php
          showHeader();
        ?>
        <main>
        <?php

            menu();
        ?>
            <div class="page-wrapper">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Actualizar Medicamentos</h4>
                                </div>
                                <hr>
                                <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                                    <div class="card-body">

                                        <?php
                                            if(isset($_POST["txtMensaje"]))
                                            {
                                                echo '<div class="alert alert-warning text-center">' . $_POST["txtMensaje"] . '</div>';
                                            }
                                        ?>

                                        <input id="txtId" name="txtId" type="hidden" class="form-control"
                                        value="<?php echo $resultado["IdMedicamento"] ?>">                                  

                                        <div class="form-group row">
                                            <label class="col-sm-3 text-right control-label col-form-label">Nombre</label>
                                            <div class="col-lg-7">
                                                <input id="txtNombre" name="txtNombre" type="text" class="form-control"
                                                value="<?php echo $resultado["Nombre"] ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 text-right control-label col-form-label">Principio Activo</label>
                                            <div class="col-lg-7">
                                                <input id="txtPrincipio_activo" name="txtPrincipio_activo" type="text" class="form-control"
                                                value="<?php echo $resultado["Principio_activo"] ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 text-right control-label col-form-label">Concentracion</label>
                                            <div class="col-lg-7">
                                                <input id="txtConcentracion" name="txtConcentracion" type="text" class="form-control"
                                                value="<?php echo $resultado["Concentracion"] ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 text-right control-label col-form-label">Forma Farmaceutica</label>
                                            <div class="col-lg-7">
                                                <input id="txtForma_farmaceutica" name="txtForma_farmaceutica" type="text" class="form-control"
                                                value="<?php echo $resultado["Forma_farmaceutica"] ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 text-right control-label col-form-label">Fecha Vencimiento</label>
                                            <div class="col-lg-7">
                                                <input id="txtFecha_vencimiento" name="txtFecha_vencimiento" type="date" class="form-control"
                                                value="<?php echo $resultado["Fecha_vencimiento"] ?>">
                                            </div>
                                        </div>

                                    <div class="form-group row">
                                            <label class="col-sm-3 text-right control-label col-form-label">Proveedor</label>
                                            <div class="col-lg-7">
                                                <input id="txtProveedor" name="txtProveedor" type="text" class="form-control"
                                                value="<?php echo $resultado["Proveedor"] ?>">
                                            </div>
                                        </div>
    
                                            <label class="col-md-1 text-right control-label col-form-label">Cantidad</label>
                                            <div class="col-md-3"> 
                                                <input id="txtCantidad" name="txtCantidad" maxlength="5"
                                                    type="text" class="form-control" onkeypress="permitirSoloNumeros()"
                                                    value="<?php echo $resultado["Cantidad"] ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 text-right control-label col-form-label">Imagen</label>
                                            <div class="col-md-3"> 
                                                <input id="txtImagen" accept="image/png" name="txtImagen" type="file" class="form-control">
                                            </div>
    
                                            <label class="col-md-1 text-right control-label col-form-label">Imagen Actual</label>
                                            <div class="col-md-3 text-center"> 
                                                <img src=<?php echo $resultado["Imagen"] ?> width='150' height='150'>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-10 text-right pb-2">
                                                <button id="btnActualizarMedicamento" name="btnActualizarMedicamento" class="btn btn-info" type="submit">Procesar</button>
                                            </div>
                                        </div>

                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>

                <?php
                    ShowFooter();
                ?>

            </div>
        </main>
    </div>

    <?php
        AddJs();
    ?>

</body>

</html>