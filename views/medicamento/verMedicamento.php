<?php
   include_once $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb/views/layoutInterno.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb/Controllers/medicamentoController.php';

   $resultado = ConsultarMedicamentos(1);

  if (session_status() == PHP_SESSION_NONE) {
  session_start();             //inicia las variables de session 
  }
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

  <div class="card-body">

 <?php
   if(isset($_POST["txtMensaje"]))
    {
      echo '<div class="alert alert-warning text-center">' . $_POST["txtMensaje"] . '</div>';
    }

    ?>

    <div class="row">
<?php
    while($fila = mysqli_fetch_array($resultado)) {
    echo '<div class="col-md-3 mb-4">';
        echo '<div class="card h-100 shadow-sm">';
            echo '<img class="card-img-top" src="'.$fila["Imagen"].'" alt="Imagen del medicamento" style="height:200px; object-fit:contain;">';
            echo '<div class="card-body">';
                echo '<h5 class="card-title">'.$fila["Nombre"].'</h5>';
                echo '<p class="card-text mb-1"><strong>Concentración:</strong> '.$fila["Concentracion"].'</p>';
                echo '<p class="card-text mb-1"><strong>Forma:</strong> '.$fila["Forma_farmaceutica"].'</p>';
                echo '<p class="card-text mb-1"><strong>Proveedor:</strong> '.$fila["Proveedor"].'</p>';
                echo '<p class="card-text mb-1"><strong>Cantidad:</strong> '.$fila["Cantidad"].'</p>';
               
            echo '</div>';
        echo '</div>';
    echo '</div>';
}
?>
</div>

  </main>
  



  <?php
    ShowFooter();
  ?>
</body>

<?php
addJS();
?>


</html>