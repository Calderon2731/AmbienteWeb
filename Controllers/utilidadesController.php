
<?
    function generarContrasena($longitud = 8){
        $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $contrasena = '';
        for ($i = 0; $i < $longitud; $i++) {
            $indice = rand(0, strlen($caracteres) - 1);
            $contrasena .= $caracteres[$indice];
        }
        return $contrasena;
    }

 // falta poner el enviarCorreo();

?>