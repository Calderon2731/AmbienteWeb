<?php

include_once $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb/Views/layoutInterno.php';

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

    contenidoPrincipal();
  ?>
  </main>
  



  <?php
    ShowFooter();
  ?>
</body>

<?php
addJS();
?>


</html>