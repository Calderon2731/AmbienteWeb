<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/AmbienteWeb/Controllers/homeController.php';
    
    if(session_status() == PHP_SESSION_NONE)
    {
        session_start();
    }
    

    function showHeader(){

        $nombreUsuario = "";
        
        if(isset($_SESSION["Nombre"])){

            $nombreUsuario = $_SESSION["Nombre"];

        }

        echo '
            <header>
                <nav class="navbar navbar-expand-lg shadow-sm fixed-top">
                    <a class="navbar-brand" href = "../Home/Principal.php"
                    ><img src="../Imagenes/logoDePrueba.png" alt= "LOGO" /></a> <button

                    class="navbar-toggler"
                    type="button"
                    data-target="#navbarContent"
                    data-toggle="collapse"> 
                    </button>

                    <h5 class="nav-link">Santa María</h5>
                    <div class="collapse navbar-collapse" id="navbarContent">
                        <ul class="navbar-nav ml-auto">

                            <li class="nav-item dropdown dropleft">
                                <a
                                    class="nav-link profile-dropdown"
                                    href="#"
                                    role="button"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    >'.$nombreUsuario.'
                                </a>

                                <div
                                    class="dropdown-menu shadow-lg"
                                    aria-labelledby="profile-dropdown">

                                    <a class="dropdown-item" href="../usuario/ConsultarPerfil.php"
                                    ><i class="las la-user mr-2"></i>perfil
                                    </a>

                                    <a class="dropdown-item" href="../usuario/cambiarContrasenna.php"
                                    ><i class="las la-lock mr-2"></i>Contraseña
                                    </a>

                                    <a class="dropdown-item" href="#"
                                    ><i class="las la-sign-out-alt mr-2"></i>Cerrar sesión
                                    </a>

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
        ';
}


function menu(){
    echo' 
    <main> 
        <div class="side-nav">
            <ul class="list-group list-group-flush">
                <a class="list-group-item active" href=" ../Home/citas.php" data-toggle="tooltip" data-placement="bottom" title="citas">
                <i class="las la-stethoscope "></i><span>citas</span></a>

                <a class="list-group-item" href="../Conocenos/conocenos.php" data-toggle="tooltip" data-placement="bottom" title="Patients">
                <i class="las la-phone"></i><span>Nosotros</span></a>         
                
                <a class="list-group-item" href="../usuario/ConsultarPerfil.php" data-toggle="tooltip" data-placement="bottom" title="Perfil">
                <i class="las la-address-card "></i><span>Perfil</span></a>
                <hr class="divider">
            </ul>
        </div>
    </main>';
}


?>