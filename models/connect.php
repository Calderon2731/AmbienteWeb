<?php
//Por hacer base de datos
    function OpenDB()
    {
        return mysqli_connect("127.0.0.1:3307","root","","dbproyectoweb",);
    }

    function CloseDB($context)
    {
        mysqli_close($context);
    }


?>