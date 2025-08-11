<?php
  include_once $_SERVER["DOCUMENT_ROOT"].'/AmbienteWeb/models/PacienteModel.php';

    function consultarPaciente()
    {
        return consultarPacientesModel();

        
    }

    if(isset($_POST["btnProcesarAgregadoPaciente"]))
    { 
    $nombre = $_POST["txtNombre"];
    $edadPaciente = $_POST["txtedadPaciente"];
    $Diagnostico = $_POST["txtDiagnostico"];
    $fecha = $_POST["txtFecha"];

    $respuesta = RegistrarPacienteModel($nombre,$edadPaciente,$Diagnostico,$fecha );

    if($respuesta){
        header("location: ../../views/Home/consultarPacientes.php");
    }
    else{
        $_POST["txtMensaje"] = "El paciente NO fue Registrado de manera correcta ";
    }
} 



function consultarInfoPaciente($idPaciente)
    {
        $respuesta = consultarInfoPacienteModel($idPaciente);

        if($respuesta != null && $respuesta->num_rows > 0){

        return mysqli_fetch_array($respuesta);  

        }
    }
    

    if(isset($_POST["btnProcesarActualizarPaciente"]))
    {
        $idPaciente = $_POST["txtId"];
        $nombrePaciente = $_POST["txtNombre"];
        $edadPaciente = $_POST["txtedadPaciente"];
        $diagnostico = $_POST["txtDiagnostico"];
        $fecha = $_POST["txtFecha"];
        

        $respuesta = ActualizarPacienteModel($idPaciente,$nombrePaciente, $edadPaciente,$diagnostico,$fecha);

        if($respuesta)
        {
            header("location: ../../views/Home/consultarPacientes.php");
        }
        else
        {
            $_POST["txtMensaje"] = "el paciente no fue actualizado, hubo un error";
        }
    }
?>