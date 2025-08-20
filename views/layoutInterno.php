<?php
include_once $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb/Controllers/homeController.php';

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}


function showHeader()
{

  $nombreUsuario = "";
  $nombreRol = "";

  if (isset($_SESSION["Nombre"])) {
    $nombreUsuario = $_SESSION["Nombre"];

  }

  if (isset($_SESSION["NombreRol"])) {
    $nombreRol = $_SESSION["NombreRol"];
  }

  echo '
            <header>
            <nav class="navbar navbar-expand-lg shadow-sm fixed-top">
        <a class="navbar-brand" href="../Home/Principal.php">
          <img src="../Imagenes/logoDePrueba.png"><span>Santa Maria</span>
          </a>

        <div class="navbar-collapse">
          <ul class="navbar-nav">

            <a
                class="nav-link profile-dropdown"    >
               ' . $nombreRol . '
              </a>

            <li class="nav-item">
              <a
                class="nav-link profile-dropdown"
                href="#"
                role="button"
                data-toggle="dropdown"         
                aria-expanded="false">
               ' . $nombreUsuario . '
              </a>
              <div class="dropdown">
                <div class="dropdown-menu shadow-lg profsile-dropdown-menu"aria-labelledby="profile-dropdown">
                  
                  <a class="dropdown-item" href="../usuario/ConsultarPerfil.php"
                    ><i class="las la-user mr-2"></i>Perfil</a>

                  <a class="dropdown-item" href="../usuario/cambiarContrasenna.php"
                    ><i class="las la-lock mr-2"></i>Contraseña</a>

                    <form action="" method="POST">
                      <button id="btnCerrarSesion" name="btnCerrarSesion" class="dropdown-item" type="sumit"> 
                        <i class="las la-sign-out-alt mr-2"></i>Cerrar Sesión
                      </button>
                    </form>

                </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>
        </header>';
}

function Addcss()
{
  echo '
        <head>
            <title>pagina</title>
            <meta name="viewport" control="width=device-width, initial-scale=1" />
            <link rel="stylesheet" href="../estilos/bootstrap.min.css" />
            <link rel="stylesheet" href="../estilos/line-awesome.min.css"/>
            <link rel="stylesheet" href="../estilos/layout.css" />
            <link rel="icon" href="../imagenes/qafya-icon.ico" />
            <link href = "https://cdn.datatables.net/2.3.2/css/dataTables.bootstrap5.css" rel="stylesheet">
         </head>';
}

function ShowFooter()
{
  echo
    '<footer class="footer text-center">
                Derechos Reservados © Santa Maria
            </footer>';
}

function addJS()
{
  echo
    '
        <script src="../Funciones/jquery.min.js"></script>
        <script src="../Funciones/bootstrap.bundle.min.js"></script>
        <script src="../Funciones/global.js"></script>
        <script src="../Funciones/site/comunes.js"></script>
        <script src="../Funciones/popper.min.js"></script>
        <script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/2.3.2/js/dataTables.bootstrap5.js"></script>
        ';
}

function menu()
{
  $idRol = "";

  if (isset($_SESSION["IdRol"])) {
    $idRol = $_SESSION["IdRol"];

  }

  if ($idRol == 1) {
                                                //si es usuario
    echo '
          <div class="side-nav">
            <ul class="list-group list-group-flush">
                <a class="list-group-item " href=" ../Home/citas.php" data-toggle="tooltip" data-placement="bottom" title="citas">
                <i class="las la-stethoscope "></i><span>citas</span></a>

                <a class="list-group-item" href="../Conocenos/conocenos.php" data-toggle="tooltip" data-placement="bottom" title="Patients">
                <i class="las la-phone"></i><span>Nosotros</span></a>
                
                <a class="list-group-item" href="../usuario/ConsultarPerfil.php" data-toggle="tooltip" data-placement="bottom" title="Perfil">
                <i class="las la-address-card "></i><span>Perfil</span></a>

                 <a class="list-group-item" href="../medicamento/verMedicamento.php" data-toggle="tooltip" data-placement="bottom" title="Perfil">
                <i class="las la-capsules"></i><span>Ver medicamentos</span></a>

                

                  <hr class="divider">
            </ul>
      </div>';

                                                  //si es administrador
  } else {
    echo ' 
      <div class="side-nav">
      <ul class="list-group list-group-flush">
                <a class="list-group-item" href="../Home/consultarPacientes.php" data-toggle="tooltip" data-placement="bottom" title="Perfil">
                <i class="las la-address-card "></i><span>Pacientes</span></a>

                <a class="list-group-item" href="../usuario/consultarUsuarios.php" data-toggle="tooltip" data-placement="bottom" title="Perfil">
                <i class="las la-address-card "></i><span>Administrar Usuarios</span></a>

                 <a class="list-group-item" href="../medicamento/consultarMedicamentos.php" data-toggle="tooltip" data-placement="bottom" title="Perfil">
                <i class="las la-capsules"></i><span>Medicamentos</span></a>
                
                <a class="list-group-item" href="../usuario/ConsultarPerfil.php" data-toggle="tooltip" data-placement="bottom" title="Perfil">
                <i class="las la-address-card "></i><span>Perfil</span></a>

                <hr class="divider">
            </ul>          
      </div>';

  }


}

function contenidoPrincipal()
{
  echo '
  <div class="main-content container mt-4">

      <!-- Mensaje de bienvenida -->
      <div class="text-center mb-4">
          <h2>Bienvenidos a la Clínica Santa María</h2>
          <p class="lead">Estamos felices de tenerte aquí</p>
      </div>

      <!-- Carrusel -->
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner rounded shadow">
              <div class="carousel-item active">
                  <img src="../Imagenes/ImagenDoctor1.png" class="d-block w-100" alt="Imagen 1">
              </div>
              <div class="carousel-item">
                  <img src="../Imagenes/ImagenDoctor2.png" class="d-block w-100" alt="Imagen 2">
              </div>
              <div class="carousel-item">
                  <img src="../Imagenes/ImagenDoctor3.png" class="d-block w-100" alt="Imagen 3">
              </div>
          </div>

      </div>

  </div>';

}



function contenidoConocenos()
{
  echo ' <div class="main-content">
            <div class="container-fluid">
                <div class="section profile-section">
                    <div class="card container">
                        <div class="card-header">
                            <h3>Servicios en línea</h3>
                            <p>Estamos aquí para ayudarte.</p>
                            <hr>
                        </div>
                        <div class="sub-section-body">
                        <p> Te invitamos a conocer nuestros servicios disponibles. </p> 
                        <h5> Ubicación </h5> 
                          <div class="map-container mb-4"> <iframe src="https://www.google.com/maps/embed?pb=!1m18..." width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>';
}

?>