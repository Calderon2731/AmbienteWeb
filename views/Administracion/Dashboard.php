<?php

  include_once $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb/Views/layoutInterno.php';
   include_once $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb/Controllers/medicamentoController.php';
     if($_SESSION["IdRol"] == "1"){
            header("Location: ../../views/Home/Principal.php");   
    }
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