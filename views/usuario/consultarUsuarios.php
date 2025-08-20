<?php
include_once $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb/views/layoutInterno.php';
include_once $_SERVER["DOCUMENT_ROOT"]."/AmbienteWeb/Controllers/UsuarioController.php";
  
   $resultado = ConsultarUsuarios();
  
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
      
                <a class="list-group-item" href="../Home/Principal.php">
                <i class="las la-address-card "></i><span>Menu</span></a>
                
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
                  <th>ID</th>
                  <th>Identificacion</th>
                  <th>Nombre</th>          
                  <th>Correo</th>
                  <th>Rol</th>
                  <th>Estado</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php
                
                  while($fila = mysqli_fetch_array($resultado))
                  {
                    echo "<tr>";
                    echo"<td>".$fila["IdUsuario"]."</td>";
                    echo "<td>".$fila["Identificacion"]." </td>";
                    echo "<td>".$fila["Nombre"]." </td>";
                    echo "<td> ".$fila["Correo"]."</td>";
                    echo "<td>".$fila["NombreRol"]." </td>";
                    echo  "<td>".$fila["EstadoDescripcion"]." </td>";
                    echo "</tr>";
                     echo '<td>
                                                        
                     <a class="btn btnAbrirModal" data-toggle="modal" data-target="#CambiarEstadoUsuario"
                      data-id="' . $fila["IdUsuario"] . '" data-nombre="' . $fila["Nombre"] . '">
                      <i class="las ' . ($fila["Estado"] ? 'la-toggle-on text-success' : 'la-toggle-off text-danger') . '" style="font-size:1.5em;"></i>
                      </a>
                                                            
                     <a href="actualizarUsuario.php?q=' . $fila["IdUsuario"] . '" class="btn">
                     <i class="la la-edit" style="font-size:1.5em;"></i>
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

     <!-- Modal -->
    <div class="modal fade" id="CambiarEstadoUsuario" tabindex="-1" role="dialog" aria-labelledby="tituloModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tituloModal">Confirmación</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <form action="" method="POST">
                    <div class="modal-body">
                        
                        <input type="hidden" id="IdUsuario" name="IdUsuario" class="form-control">
                        <Label id="lblNombre" name="lblNombre"></Label>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="btnCambiarEstadoUsuario" name="btnCambiarEstadoUsuario" class="btn btn-primary">Procesar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
  </body>

  <?php
  addJS();
  ?>

  <script>
    $(function() {

        new DataTable('#tablaDatos', {
            language: {
                url: 'https://cdn.datatables.net/plug-ins/2.3.2/i18n/es-ES.json',
            },
        });

        $('.btnAbrirModal').on('click', function () {
            const id = $(this).data('id');
            const nombre = $(this).data('nombre');

            $('#IdUsuario').val(id);
            $('#lblNombre').text("¿Desea cambiar el estado del usuario " + nombre + "?");
        });

    });
  </script>
  
</html>
