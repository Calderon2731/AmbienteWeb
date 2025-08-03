<?php
    include_once $_SERVER["DOCUMENT_ROOT"].'/AmbienteWeb/models/connect.php';

  function consultarPacientesModel(){
    try
        {
            $context = OpenDB();
            $sp = "CALL consultarPacientes()";
            $respuesta = $context -> query($sp);

            CloseDB($context);            
            return $respuesta;
        }
        catch(Exception $error)
        {
        RegistrarError($error);
            return null;
        }
    }

    function RegistrarPacienteModel($nombre, $edadPaciente,$Diagnostico , $fecha){
    //enviar los datos a registrar a la base de datos!!
      try
        {
            $context = OpenDB();

            $sp = "CALL RegistrarPaciente('$nombre', '$edadPaciente','$Diagnostico' , '$fecha')";
            $respuesta = $context -> query($sp);

            CloseDB($context);            
            return $respuesta;
        }
        catch(Exception $error)
        {
          RegistrarError($error);
            return false;
        };
  }

  function consultarInfoPacienteModel($idPaciente){
    try
        {
            $context = OpenDB();
            $sp = "CALL consultarInfoPaciente('$idPaciente')";
            $respuesta = $context -> query($sp);

            CloseDB($context);            
            return $respuesta;
        }
        catch(Exception $error)
        {
        RegistrarError($error);
            return null;
        }
    }

    

    function ActualizarPacienteModel($idPaciente,$nombrePaciente, $edadPaciente,$diagnostico,$fecha)
    {
        try
        {
            $context = OpenDB();
            $sp = "CALL ActualizarPaciente('$idPaciente','$nombrePaciente', '$edadPaciente','$diagnostico','$fecha')";
            $respuesta = $context -> query($sp);

            CloseDB($context);            
            return $respuesta;
        }
        catch(Exception $error)
        {
            RegistrarError($error);
            return false;
        }
    }
?>