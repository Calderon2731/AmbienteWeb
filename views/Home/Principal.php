<?php
session_start();
    include_once $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb-1/Views/layoutInterno.php';
?>

<!DOCTYPE html>
<html>

  <?php
  Addcss();
  ?>
  
  <body>

    <?php
    showHeader();

    menu();
    ?>

  </body>

  <?php
  addJS();
  ?>


</html>

