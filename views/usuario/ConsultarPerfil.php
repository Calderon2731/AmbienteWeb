<?php
include_once $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb/views/layoutInterno.php';
include_once $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb/Controllers/usuarioController.php';
if(session_status() == PHP_SESSION_NONE){
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
        
        <div class="row">
          <div class="col-md-4">

            <div class="form-group">
              <label>Identificacion</label><input class="form-control" readonly="readonly" value="<?php echo $Resultado["Identificacion"]?>">
            </div>

          </div>
          <div class="col-sm-4">
            <div class="form-group"><label>Nombre</label><input class="form-control" readonly="readonly" value="<?php echo $Resultado["Nombre"]?>"></div>
          </div>
          <div class="col-sm-4">
            <div class="form-group"><label>Correo</label><input class="form-control" readonly="readonly" value="<?php echo $Resultado["Correo"]?>">
            </div>
          </div>
          <div>
          <button class="btn btn-lg btn-danger btn-signin "  name = "" type="submit">procesar</button>
          </div>
          

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