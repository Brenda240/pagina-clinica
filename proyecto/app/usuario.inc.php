<?php

class Usuario {
    
    private $id;
    private $nombre;
    private $apellido;
    private $telefono;
    private $email;
    private $password;
    
    
    public function __construct($id, $nombre, $apellido, $telefono, $email, $password){
    $this-> id = $id;
    $this-> nombre = $nombre;
    $this-> apellido = $apellido;
    $this-> telefono = $telefono;
    $this-> email = $email;
    $this-> password = $password;
    }
    
    public function obtener_id(){
        return $this-> id;
    }
    
    public function obtener_nombre(){
        return $this-> nombre;
    }
    
    public function obtener_apellido(){
    return $this-> apellido ;
    
    }
    
    public function obtener_tel(){
        return $this-> telefono;
    }
    
    public function obtener_email(){
        return $this-> email;
    }
    
    public function obtener_password(){
        return $this-> password;
    }
    
  

    
    
    public function setNombre($nombre){
        $this-> nombre = $nombre;
    }
    
    public function setApellido($apellido){
        $this-> apellido = $apellido;
    }
    
    public function setTelefono($telefono){
        $this-> telefono = $telefono;
    }
    
    public function setEmail($email){
        $this-> email = $email;
    }
    
    public function setPassword($password){
        $this-> password = $password;
    }  
}