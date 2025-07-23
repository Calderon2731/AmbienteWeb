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
    <?php
    //showHeader();
    ?>

    <div class="col-sm-7">
    </div>
    <div class="col-md-8 patients-details-card-wrapper">
      <div class="mini-card">

        <div class="card-body">
          <form action="" method="$_POST">
            <div class="row">
              <div class="col-md-4">


                <?php
                if (isset($_POST["txtMensaje"])) {
                  echo '<div class="alert alert-warning text-center">' . $_POST["txtMensaje"] . '</div>';
                }
                ?>

                <div class="form-group">
                  <label>Identificacion</label><input id="txtIdentificacion" name="txtIdentificacion"
                    class="form-control" type="text" value="<?php echo $Resultado["Identificacion"] ?>"
                    onkeyup="ConsultarNombreApi()">
                </div>
              </div>

              <div class="col-sm-4">
                <div class="form-group"><label>Nombre</label><input id="txtNombre" name="txtNombre"
                    type="text" class="form-control" value="<?php echo $Resultado["Nombre"] ?>"></div>
              </div>
              <div class="col-sm-4">
                <div class="form-group"><label>Correo</label><input id="txtCorreo" name="txtCorreo"
                    type="email" class="form-control" value="<?php echo $Resultado["Correo"] ?>">
                </div>
              </div>

              
                <button class="btn btn-info " id="btnActualizarPerfilUsuario"
                  name="btnActualizarPerfilUsuario" type="submit">procesar
                </button>
              
          </form>

        </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
    </div>
  </body>

  <?php
  addJS();
  ?>

</html>