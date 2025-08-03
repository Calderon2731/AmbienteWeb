<?php
include_once $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb/views/layoutInterno.php';
include_once $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb/Controllers/PacienteController.php';

$idPaciente = $_GET['q'];
$Resultado = consultarInfoPaciente($idPaciente);
?>


<!DOCTYPE html>
<html>

  <?php
  Addcss();
  ?>

<body>

  <h4 class="text-center mt-4 mb-4">Actualizar Pacientes</h4>

  <?php showHeader(); ?>

  <div class="container">
    <?php
    if (isset($_POST["txtMensaje"])) {
      echo '<div class="alert alert-warning text-center">' . $_POST["txtMensaje"] . '</div>';
    }
    ?>

   

    <div class="card">
      <div class="card-header bg-danger text-white text-center">
        <h5 class="mb-2 mt-2">Actualizar pacientes</h5>
      </div>

      <div class="card-body">
        <form action="" method="post">
          <div class="row g-3">

          
            <div class="col-md-4">
              <div class="form-group">
                <label for="txtNombre" class="form-label">Nombre de Paciente</label>
                <input id="txtNombre" name="txtNombre"
                  class="form-control" type="text"
                   value="<?php echo $Resultado["NombrePaciente"] ?>"
                >
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="txtedadPaciente" class="form-label">Edad de paciente</label>
                <input id="txtedadPaciente" name="txtedadPaciente" maxlength="3"
                  type="text" class="form-control"
                  value="<?php echo $Resultado["edadPaciente"] ?>"
                >
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="txtDiagnostico" class="form-label">Diagnostico</label>
                <input id="txtDiagnostico" name="txtDiagnostico"
                  type="text" class="form-control"
                  value="<?php echo $Resultado["diagnostico"] ?>">
                  
              </div>
            </div>

                <div class="col-md-4">
              <div class="form-group">
                <label for="txtFecha" class="form-label">Fecha</label>
                <input id="txtFecha" name="txtFecha" maxlength="10"
                  type="text" class="form-control"
                  value="<?php echo $Resultado["fecha"] ?>">
              </div>
            </div>

             <div class="col-md-4">
              <div class="form-group">
                <input id="txtId" name="txtId"class="form-control" type="hidden"
                value="<?php echo $Resultado["IdPaciente"] ?>">
              </div>
            </div>

          </div>
          <div class="text-center mt-4">
            <button class="btn btn-danger btn-info px-4" id="btnProcesarActualizarPaciente"
              name="btnProcesarActualizarPaciente" type="submit">
              Procesar
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
<?php 
addJS(); 
?>

</html>