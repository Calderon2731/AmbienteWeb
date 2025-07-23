<?php
include_once $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb/Controllers/homeController.php';
?>



<!DOCTYPE html>
<html>

<head>
    <title>Citas</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../SiteAssets/css/vendors/bootstrap.min.css" />
    <link rel="stylesheet" href="../SiteAssets/css/vendors/line-awesome.min.css" />
    <link rel="stylesheet" href="../SiteAssets/css/pages/layout.css" />
    <link rel="icon" href="../SiteAssets/images/covid-19.ico" />
    <script src="../SiteAssets/js/vendors/jquery.min.js"></script>
    <script src="../SiteAssets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="../SiteAssets/js/global.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="../estilos/index3.css" rel="stylesheet">
</head>

<body>
    <main>
        <div class="main-content">
            <div class="container-fluid">
                <div class="section profile-section">
                    <div class="card container">
                        <div class="card-header">
                            <h5>Agenda una cita médica</h5>
                            <p>Llena los datos que se te solicitan a continuación para registrar una cita.</p>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="../../Controllers/homeController.php">
                                <div class="sub-section col-md-12 col-lg-8">
                                    <div class="sub-section-title">
                                        <h6>Detalles de la cita</h6>
                                    </div>
                                    <div class="sub-section-body">
                                        <div class="user-details-form">
                                            <div class="form-row">

                                                <div class="form-group col-sm-6">
                                                    <label for="txtFecha">Fecha</label>
                                                    <input type="date" class="form-control" id="txtFecha"
                                                        name="txtFecha" required>
                                                </div>

                                                <div class="form-group col-sm-6">
                                                    <label for="txtHora">Horario disponible</label>
                                                    <input type="time" class="form-control" id="txtHora" name="txtHora"
                                                        required>
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <label for="txtMotivo">Motivo de la cita</label>
                                                    <textarea class="form-control" id="txtMotivo" name="txtMotivo"
                                                        rows="3" placeholder="Describa el motivo de su consulta"
                                                        required></textarea>
                                                </div>

                                                <select class="form-control" id="txtMedico" name="txtMedico" required>
                                                    <option value="">Seleccione un médico</option>
                                                    <option value="1">Dr. Ramirez</option>
                                                    <option value="2">Dra. Jiménez</option>
                                                    <option value="3">Dr. Ortega</option>
                                                </select>

                                            </div>

                                            <button class="btn btn-dark-red-f-gr mt-4" name="btnAgendarCita"
                                                type="submit">
                                                <i class="las la-save"></i> Registrar cita
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>