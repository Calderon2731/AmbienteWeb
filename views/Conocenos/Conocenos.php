<?php
include_once $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb/Controllers/homeController.php';
include_once $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb/Views/layoutInterno.php';
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
    contenidoConocenos();
    ?>
    </main>
    
    <?php
    ShowFooter();
  ?>

</body>

 <?php
  addJS();
  ?>`
</html>