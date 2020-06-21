<?php

include 'RepositorioUsuario.inc.php';

class UsuarioControlador {
    
    public static function login($email,$password) {
        $obj_usuario = new Usuario();
        $obj_usuario->setEmail($email);
        $obj_usuario->setPassword($password);
        
        return RepositorioUsuario::login($obj_usuario);
         
        
    }
}