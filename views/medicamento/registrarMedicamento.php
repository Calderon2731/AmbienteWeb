<?php
   include_once $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb/views/layoutInterno.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb/Controllers/medicamentoController.php';
?>

<!DOCTYPE html>
<html>
<?php
       AddCss();
    ?>

<body>

    <div id="main-wrapper">

        <?php
            ShowHeader();
            menu();
        ?>

        <div class="page-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Registro de Medicamentos</h4>
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

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Nombre</label>
                                        <div class="col-lg-7">
                                            <input id="txtNombre" name="txtNombre" type="text" class="form-control">
                                        </div>
                                    </div>

                                     <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Principio Activo</label>
                                        <div class="col-lg-7">
                                            <input id="txtPrincipio_activo" name="txtPrincipio_activo" type="text" class="form-control">
                                        </div>
                                    </div>

                                     <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Concentracion</label>
                                        <div class="col-lg-7">
                                            <input id="txtConcentracion" name="txtConcentracion" type="text" class="form-control">
                                        </div>
                                    </div>

                                     <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Forma Farmaceutica</label>
                                        <div class="col-lg-7">
                                            <input id="txtForma_farmaceutica" name="txtForma_farmaceutica" type="text" class="form-control">
                                        </div>
                                    </div>

                                     <div class="form-group row">
                                         <label class="col-sm-3 text-right control-label col-form-label">Fecha Vencimiento</label>
                                        <div class="col-lg-7">
                                            <input id="txtFecha_vencimiento" name="txtFecha_vencimiento" type="date" class="form-control">
                                        </div>
                                    </div>

                                     <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Proveedor</label>
                                        <div class="col-lg-7">
                                            <input id="txtProveedor" name="txtProveedor" type="text" class="form-control">
                                        </div>
                                    </div>

 
                                        <label class="col-md-1 text-right control-label col-form-label">Cantidad</label>
                                        <div class="col-md-3"> <input id="txtCantidad" name="txtCantidad" maxlength="5"
                                                type="text" class="form-control" onkeypress="permitirSoloNumeros()">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Imagen</label>
                                        <div class="col-md-7">
                                            <input id="txtImagen" accept="image/png" name="txtImagen" type="file" class="form-control">
                                        </div>
                                    </div>

                                     <div class="row">
                                        <div class="col-md-10 text-right pb-2">
                                            <button id="btnRegistrarMedicamento" name="btnRegistrarMedicamento" class="btn btn-info" type="submit">Procesar</button>
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

    </div>

    <?php
        AddJs();
    ?>

</body>

</html>