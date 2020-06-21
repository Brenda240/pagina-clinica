<?php

include_once 'app/UsuarioControlador.inc.php';

$resultado = array();

if(isset($_POST["email"])&& isset($_POST["clave"])){
    
    $email = $_POST["email"];
    $clave = $_POST["clave"];
    
    $resultado = array("estado" => "true");
    
    if (UsuarioControlador::login($email,$clave)){
        return print (json_encode($resultado));
    }
    
}

$resultado = array("estado" => "false");
return print (json_encode($resultado));
