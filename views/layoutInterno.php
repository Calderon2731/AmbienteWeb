<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb/Controllers/homeController.php';
    
    if(session_status() == PHP_SESSION_NONE)
    {
        session_start();
    }
    

    function showHeader(){

        $nombreUsuario = "";
        $nombreRol = "";
        
        if(isset($_SESSION["Nombre"])){
            $nombreUsuario = $_SESSION["Nombre"];

        }

        if(isset($_SESSION["NombreRol"])){
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
               '.$nombreRol.'
              </a>

            <li class="nav-item">
              <a
                class="nav-link profile-dropdown"
                href="#"
                role="button"
                data-toggle="dropdown"         
                aria-expanded="false">
               '.$nombreUsuario.'
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
    
function Addcss(){
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

function addJS(){
        echo
        '
        <script src="../Funciones/jquery.min.js"></script>
        <script src="../Funciones/bootstrap.bundle.min.js"></script>
        <script src="../Funciones/global.js"></script>
        <script src="../Funciones/site/comunes.js"></script>
        <script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/2.3.2/js/dataTables.bootstrap5.js"></script>
        ';
}

function menu(){
    $idRol="";

      if(isset($_SESSION["IdRol"])){
              $idRol = $_SESSION["IdRol"];

    }
    echo'  
        <div class="side-nav">
            <ul class="list-group list-group-flush">';
          if($idRol != 2){
              echo'
                <a class="list-group-item " href=" ../Home/citas.php" data-toggle="tooltip" data-placement="bottom" title="citas">
                <i class="las la-stethoscope "></i><span>citas</span></a>

                <a class="list-group-item" href="../Conocenos/conocenos.php" data-toggle="tooltip" data-placement="bottom" title="Patients">
                <i class="las la-phone"></i><span>Nosotros</span></a>
                
                <a class="list-group-item" href="../usuario/ConsultarPerfil.php" data-toggle="tooltip" data-placement="bottom" title="Perfil">
                <i class="las la-address-card "></i><span>Perfil</span></a>

                 <a class="list-group-item" href="../medicamento/consultarMedicamento.php" data-toggle="tooltip" data-placement="bottom" title="Perfil">
                <i class="las la-address-card "></i><span>Medicamento</span></a>

                <a class="list-group-item" href="../medicamento/registrarMedicamento.php" data-toggle="tooltip" data-placement="bottom" title="Perfil">
                <i class="las la-address-card "></i><span>RMedicamento</span></a>

                 <a class="list-group-item" href="../medicamento/actualizarMedicamento.php" data-toggle="tooltip" data-placement="bottom" title="Perfil">
                <i class="las la-address-card "></i><span>AMedicamento</span></a>';



                
          }else{
              
          }

    echo'       <a class="list-group-item" href="../Home/consultarPacientes.php" data-toggle="tooltip" data-placement="bottom" title="Perfil">
                <i class="las la-address-card "></i><span>Pacientes</span></a>

                <a class="list-group-item" href="../usuario/consultarUsuarios.php" data-toggle="tooltip" data-placement="bottom" title="Perfil">
                <i class="las la-address-card "></i><span>Administrar Usuarios</span></a>
                
                <a class="list-group-item" href="../usuario/ConsultarPerfil.php" data-toggle="tooltip" data-placement="bottom" title="Perfil">
                <i class="las la-address-card "></i><span>Perfil</span></a>

                <a class="list-group-item" href="../medicamento/consultarMedicamento.php" data-toggle="tooltip" data-placement="bottom" title="Perfil">
                <i class="las la-address-card "></i><span>Medicamento</span></a>

                <a class="list-group-item" href="../medicamento/registrarMedicamento.php" data-toggle="tooltip" data-placement="bottom" title="Perfil">
                <i class="las la-address-card "></i><span>RMedicamento</span></a>

                 <a class="list-group-item" href="../medicamento/actualizarMedicamento.php" data-toggle="tooltip" data-placement="bottom" title="Perfil">
                <i class="las la-address-card "></i><span>AMedicamento</span></a>

                <hr class="divider">
            </ul>          
        </div>';
}

function menuPacientes(){
    $idRol="";

      if(isset($_SESSION["IdRol"])){
              $idRol = $_SESSION["IdRol"];

    }

    echo'  
        <div class="side-nav">
            <ul class="list-group list-group-flush">';
          if($idRol != 2){
              echo'
                <a class="list-group-item " href=" ../Home/citas.php" data-toggle="tooltip" data-placement="bottom" title="citas">
                <i class="las la-stethoscope "></i><span>citas</span></a>

                <a class="list-group-item" href="../Conocenos/conocenos.php" data-toggle="tooltip" data-placement="bottom" title="Patients">
                <i class="las la-phone"></i><span>Nosotros</span></a>';
          }else{
              
          }

    echo'       <a class="list-group-item" href="../Home/consultarPacientes.php" data-toggle="tooltip" data-placement="bottom" title="Perfil">
                <i class="las la-address-card "></i><span>Pacientes</span></a>
                
                <a class="list-group-item" href="../usuario/ConsultarPerfil.php" data-toggle="tooltip" data-placement="bottom" title="Perfil">
                <i class="las la-address-card "></i><span>Perfil</span></a>

                <a class="list-group-item" href="../Home/consultarPacientes.php" data-toggle="tooltip" data-placement="bottom" title="Perfil">
                <i class="las la-address-card "></i><span>Pacientes</span></a>
            

                <hr class="divider">
            </ul>          
        </div>';
}

function contenidoPrincipal(){
    echo' <div class="main-content">
        <div class="container-fluid">
          <div class="section">
            <div class="row">
              <div class="col-md-6"></div>
            </div>
          </div>

          <div class="section welcome-section">
            <div class="section-content">
              <div class="card-deck">
                <div class="card welcome-content-card">
                  <div class="card-body">
                    <div class="row">
                      <div
                        class="col-md-6 welcome-text-wrapper align-self-center"
                      >
                      <h5>BIENVENIDO</h5>
                      </div>
                      <div class="col-md-6 welcome-img-wrapper">

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>

          <div class="section card-summaries">
            <div class="section-content">

              <div class="card-deck">
                <div class="card">
                  <div class="card-header"><h5>Actividad Reciente</h5></div>
                  <div class="card-body"> 
                </div>
            </div>
        </div>
      </div>';
}

function contenidoCitas(){
  echo' <div class="main-content">
            <div class="container-fluid">
                <div class="section profile-section">
                    <div class="card container">
                        <div class="card-header">
                            <h5>Agenda una cita médica</h5>
                            <p>Llena los datos que se te solicitan a continuación para registrar una cita.</p>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="../../Controllers/homeController.php">
                                <div class="sub-section col-md-12 col-lg-8">
                                    <div class="sub-section-title">
                                        <h5>Detalles de la cita</h5>
                                    </div>
                                    <div class="sub-section-body">
                                        <div class="user-details-form">
                                            <div class="form-row">

                                                <div class="form-group col-sm-6">
                                                    <label for="txtFecha">Fecha</label>
                                                    <input type="date" class="form-control" id="txtFecha"
                                                        name="txtFecha" required>
                                                </div>

                                                <div class="form-group col-sm-6">
                                                    <label for="txtHora">Horario disponible</label>
                                                    <input type="time" class="form-control" id="txtHora" name="txtHora"
                                                        required>
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <label for="txtMotivo">Motivo de la cita</label>
                                                    <textarea class="form-control" id="txtMotivo" name="txtMotivo"
                                                        rows="3" placeholder="Describa el motivo de su consulta"
                                                        required></textarea>
                                                </div>

                                                <select class="form-control" id="txtMedico" name="txtMedico" required>
                                                    <option value="">Seleccione un médico</option>
                                                    <option value="1">Dr. Ramirez</option>
                                                    <option value="2">Dra. Jiménez</option>
                                                    <option value="3">Dr. Ortega</option>
                                                </select>

                                            </div>

                                            <button class="btn btn-danger mt-4" name="btnAgendarCita" type="submit">
                                                <i class="las la-save"></i> Registrar cita
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
}

?>