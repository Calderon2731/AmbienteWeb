<?php

function AddCss(){
    echo'
      <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>web</title>
        <link href="../estilos/bootstrap.min.css" rel="stylesheet">  
        <link href="../estilos/index3.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
        
  </head>';
}

function addJS(){
        echo
        '
        <script src="../Funciones/jquery.min.js"></script>
        <script src="../Funciones/bootstrap.bundle.min.js"></script>
        <script src="../Funciones/global.js"></script>
        <script src="../Funciones/comunes.js"></script>
        ';
    }
?>