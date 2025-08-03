<?php
include_once $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb/views/layoutInterno.php';
include_once $_SERVER["DOCUMENT_ROOT"]."/AmbienteWeb/Controllers/UsuarioController.php";

 //$resultado = consultarUsuarios();
  
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

    <div class="side-nav">
            <ul class="list-group list-group-flush">
      
                <a class="list-group-item" href="../Home/registrarPaciente.php">
                <i class="las la-address-card "></i><span>Agregar</span></a>
                
                <a class="list-group-item" href="../usuario/ConsultarPerfil.php">
                <i class="las la-address-card "></i><span>Perfil</span></a>

                <hr class="divider">
            </ul>          
        </div>'

      <div class="main-content">
        <div class="container-fluid">
          <div class="section title-section"><h5></h5></div>   
          <div class="section patients-table-view ">

          <?php // este php muestra el mensaje de "su respuesta no fue validada" por el POST del txtMensaje
          if(isset($_POST["txtMensaje"]))
          {
          echo '<div class="alert alert-warning text-center">' . $_POST["txtMensaje"] . '</div>';
          }
          ?>

            <table id="tablaPacientes" class="table table-hover table-responsive-lg">
              <thead>
                <tr>
                  <th>ID paciente</th>
                  <th>Nombre</th>
                  <th>edad</th>          
                  <th>diagnostico</th>
                  <th>fecha</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php
                    //echo function_exists('consultarPaciente') ? "✅ La función está disponible" : "❌ No existe la función";

                  $resultado = consultarPaciente();
                  while($fila = mysqli_fetch_array($resultado))
                  {
                    $id = $fila["IdPaciente"];
                    $nombre = $fila["NombrePaciente"];
                    $edad = $fila["edadPaciente"];
                    $diagnostico = $fila["diagnostico"];
                    $fecha = $fila["fecha"];

                    echo "<tr>";
                    echo"<td>".$id."</td>";
                    echo "<td>".$nombre." </td>";
                    echo "<td>".$edad." </td>";
                    echo "<td> ".$diagnostico."</td>";
                    echo "<td>".$fecha." </td>";
                    echo "</tr>";

                    echo'<td>

                            
                    <a href="actualizarPaciente.php?q=' . $fila["IdPaciente"] . '" class="btn">
                    <i class="las la-edit" style="font-size:1.5em;"></i>
                    </a>
                    </td>';
                    echo "</tr>";
                }?> 
                          
              </tbody>
            </table>
          </div>
        </div>
        <footer>
        </footer>
      </div>
    </div>
    </main>
  </body>

  <?php
  addJS();
  ?>
  <script>
 
  </script>
  
</html>
