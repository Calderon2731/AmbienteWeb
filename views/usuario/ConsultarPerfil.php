<?php
include_once $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb/views/layoutInterno.php';
include_once $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb/Controllers/usuarioController.php';

if (session_status() == PHP_SESSION_NONE) {
  session_start();             //inicia las variables de session 
}

$idUsuario = $_SESSION["IdUsuario"];
$Resultado = consultarInfoUsuario($idUsuario);
?>

<!DOCTYPE html>

<html>

  <?php
  Addcss();
  ?>
<body>

  <h4 class="text-center mt-4 mb-4">Datos de perfil</h4>

  <?php showHeader(); ?>

  <div class="container">
    <?php
    if (isset($_POST["txtMensaje"])) {
      echo '<div class="alert alert-warning text-center">' . $_POST["txtMensaje"] . '</div>';
    }
    ?>

    <div class="card">
      <div class="card-header bg-danger text-white text-center">
        <h5 class="mb-2 mt-2">Actualizar Perfil</h5>
      </div>

      <div class="card-body">
        <form action="" method="post">
          <div class="row g-3">

            <div class="col-md-4">
              <div class="form-group">
                <label for="txtIdentificacion" class="form-label">Identificación</label>
                <input id="txtIdentificacion" name="txtIdentificacion"
                  class="form-control" type="text"
                  value="<?php echo $Resultado["Identificacion"] ?>"
                  onkeyup="ConsultarNombreApi()">
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="txtNombre" class="form-label">Nombre</label>
                <input id="txtNombre" name="txtNombre"
                  type="text" class="form-control"
                  value="<?php echo $Resultado["Nombre"] ?>">
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="txtCorreo" class="form-label">Correo</label>
                <input id="txtCorreo" name="txtCorreo"
                  type="email" class="form-control"
                  value="<?php echo $Resultado["Correo"] ?>">
              </div>
            </div>

          </div>

          <div class="text-center mt-4">
            <button class="btn btn-danger btn-info px-4" id="btnActualizarPerfilUsuario"
              name="btnActualizarPerfilUsuario" type="submit">
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