<?php
include_once $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb/Controllers/homeController.php';
include_once $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb/Views/layoutInterno.php';

$medicosSistema = ConsultarMedicos();
?>

<!DOCTYPE html>
<html>
  <?php
  Addcss();
  ?>

<body>
    <?php
    showHeader();
    ?>

    <main>
    <?php
    menu();
    ?>
    <div class="main-content">
            <div class="container-fluid">
                <div class="section profile-section">
                    <div class="card container">
                        <div class="card-header">
                            <h5>Agenda una cita médica</h5>
                            <p>Llena los datos que se te solicitan a continuación para registrar una cita.</p>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="">
                                <div class="sub-section col-md-12 col-lg-8">
                                    <div class="sub-section-title">
                                        <h5>Detalles de la cita</h5>
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

                                                <select class="form-control" id="listaMedicos" name="listaMedicos" required>
                                                  <?php
                                                      while($fila = mysqli_fetch_array($medicosSistema))
                                                      {                                                     
                                                          echo "<option value=".$fila["IdMedico"].">" . $fila["Nombre"]. "</option>";   
                                                                             
                                                      }?>
                                                </select>

                                            </div>

                                            <button class="btn btn-danger mt-4" name="btnAgendarCita" type="submit">
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
        </div>';
    </main>
    
    <?php
    ShowFooter();
  ?>

</body>

 <?php
  addJS();
  ?>`
</html>