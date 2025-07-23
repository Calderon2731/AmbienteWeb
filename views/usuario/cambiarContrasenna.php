<?php
include_once $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb/views/layoutInterno.php';
include_once $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb/Controllers/usuarioController.php';

?>

<!DOCTYPE html>

<html>

  <?php
  Addcss();
  ?>
<body>
  <h4 class="text-center mt-4 mb-4">Cambiar Contraseña</h4>

  <?php showHeader(); ?>

  <div class="container">
    <?php
    if (isset($_POST["txtMensaje"])) {
      echo '<div class="alert alert-warning text-center">' . $_POST["txtMensaje"] . '</div>';
    }
    ?>

    <div class="card">
      <div class="card-header bg-danger text-white text-center">
        <h5 class="mb-2 mt-2">Realiza el cambio de Contraseña</h5>
      </div>

      <div class="card-body">
        <form action="" method="post">
          <div class="row g-3">


            <div class="col-md-4">
              <div class="form-group">
                <label for="txtNombre" class="form-label">Contraseña Anterior</label>
                <input id="txtContrasennaAnterior" name="txtContrasennaAnterior"
                  type="password" class="form-control">
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="txtCorreo" class="form-label">Contraseña nueva</label>
                <input id="txtContrasennaNueva" name="txtContrasennaNueva"
                  type="password" class="form-control">
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="txtCorreo" class="form-label">Confirmar contraseña nueva </label>
                <input id="txtConfirmar" name="txtConfirmar"
                  type="password" class="form-control">
              </div>
            </div>

            

          </div>

          <div class="text-center mt-4">
            <button class="btn btn-danger btn-info px-4" id="btnActualizarContrasenna"
              name="btnActualizarContrasenna" type="submit">
              Procesar
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

<?php addJS(); ?>
</html>


  <?php
  addJS();
  ?>

</html>