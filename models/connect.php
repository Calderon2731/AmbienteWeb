<?php
//Por hacer base de datos
  function OpenDB()
{
    return mysqli_connect("127.0.0.1", "root", "123", "dbproyectoweb", 3307);
}


    function CloseDB($context)
    {
        mysqli_close($context);
    }

    function RegistrarError($error){

        $context = OpenDB();

        $message = mysqli_real_escape_string($context, $error -> getMessage());

          $sp = "CALL RegistrarError('$message')";
          $context -> query($sp);

        CloseDB($context);

    }


?>