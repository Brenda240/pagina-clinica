<?php

class ValidadorRegistro {

    private $aviso_inicio;
    private $aviso_cierre;
    
    private $nombre;
    private $apellido;
    private $tel;
    private $email;
    private $clave;
    


    private $error_nombre;
    private $error_apellido;
    private $error_tel;
    private $error_email;
    private $error_clave1;
    private $error_clave2;

    public function __construct($nombre, $apellido, $tel, $email, $clave1, $clave2) {
        $this->aviso_inicio = "<br> <div class='alert alert-danger' role='alert'>";
        $this->aviso_cierre = "</div>";


        $this->nombre = "";
        $this->apellido = "";
        $this->tel = "";
        $this->email = "";
        $this-> clave = "";
        

        $this->error_nombre = $this->validar_nombre($nombre);
        $this->error_apellido = $this->validar_apellido($apellido);
        $this->error_tel = $this->validar_telefono($tel);
        $this->error_email = $this->validar_email($email);
        $this->error_clave1 = $this->validar_clave1($clave1);
        $this->error_clave2 = $this->validar_clave2($clave1, $clave2);
        
        if ($this-> error_clave1 === "" && $this-> error_clave2 ===""){
            $this-> clave = $clave1;
        }
    }

    private function variable_iniciada($variable) {
        if (isset($variable) && !empty($variable)) {
            return true;
        } else {
            return false;
        }
    }

    private function validar_nombre($nombre) {
        if (!$this->variable_iniciada($nombre)) {
            return "Ingresar Nombre";
        } else {
            $this->nombre = $nombre;
        }
        return "";
    }

    private function validar_apellido($apellido) {
        if (!$this->variable_iniciada($apellido)) {
            return "Ingresar Apellido";
        } else {
            $this->apellido = $apellido;
        }
        return "";
    }

    private function validar_telefono($tel) {
        if (!$this->variable_iniciada($tel)) {
            return "Ingresar Telefono";
        } else {
            $this->tel = $tel;
        }
        if (strlen($tel) > 20) {
            return "El Telefono no debe ocupar mas de 20 caracteres";
        }

        return "";
    }

    private function validar_email($email) {
        if (!$this->variable_iniciada($email)) {
            return "Debes Introducir un Email";
        } else {
            $this->email = $email;
        }

        return "";
    }

    private function validar_clave1($clave1) {
        if (!$this->variable_iniciada($clave1)) {
            return "Debes Introducir tu contraseña";
        }

        return "";
    }

    private function validar_clave2($clave1, $clave2) {
        if (!$this->variable_iniciada($clave1)) {
            return "debes rellenar ambas contraseñas";
        }
        if (!$this->variable_iniciada($clave2)) {
            return "Debes Repetir tu Contaseña";
        }

        if ($clave1 !== $clave2) {
            return "Ambas contraseñas deben coincidir";
        }

        return "";
    }
    

    public function obtener_nombre() {
        return $this->nombre;
    }

    public function obtener_apellido() {
        return $this->apellido;
    }

    public function obtener_tel() {
        return $this->tel;
    }

    public function obtener_email() {
        return $this->email;
    }
    
    public function obtener_clave() {
        return $this->clave;
    }
    

    public function obtener_error_nombre() {
        return $this->error_nombre;
    }

    public function obtener_error_apellido() {
        return $this->error_apellido;
    }

    public function obtener_error_tel() {
        return $this->error_tel;
    }

    public function obtener_error_email() {
        return $this->error_email;
    }

    public function obtener_error_clave1() {
        return $this->error_clave1;
    }

    public function obtener_error_clave2() {
        return $this->error_clave2;
    }

    public function mostrar_nombre() {
        if ($this->nombre !== "") {
            echo 'value="' . $this->nombre . '"';
        }
    }

    public function mostrar_error_nombre() {
        if ($this->error_nombre !== "") {
            echo $this->aviso_inicio . $this->error_nombre . $this->aviso_cierre;
        }
    }

    public function mostrar_apellido() {
        if ($this->apellido !== "") {
            echo 'value="' . $this->apellido . '"';
        }
    }

    public function mostrar_error_apellido() {
        if ($this->error_apellido !== "") {
            echo $this->aviso_inicio . $this->error_apellido . $this->aviso_cierre;
        }
    }

    public function mostrar_tel() {
        if ($this->tel !== "") {
            echo 'value="' . $this->tel . '"';
        }
    }

    public function mostrar_error_tel() {
        if ($this->error_tel !== "") {
            echo $this->aviso_inicio . $this->error_tel . $this->aviso_cierre;
        }
    }

    public function mostrar_email() {
        if ($this->email !== "") {
            echo 'value="' . $this->email . '"';
        }
    }

    public function mostrar_error_email() {
        if ($this->error_email !== "") {
            echo $this->aviso_inicio . $this->error_email . $this->aviso_cierre;
        }
    }

    public function mostrar_error_clave1() {
        if ($this->error_clave1 !== "") {
            echo $this->aviso_inicio . $this->error_clave1 . $this->aviso_cierre;
        }
    }

    public function mostrar_error_clave2() {
        if ($this->error_clave2 !== "") {
            echo $this->aviso_inicio . $this->error_clave2 . $this->aviso_cierre;
        }
    }
    

    public function registro_valido() {
        if ($this->error_nombre === "" &&
        $this->error_apellido === "" &&
        $this->error_tel === "" &&
        $this->error_email === "" &&
        $this->error_clave1 === "" &&
        $this->error_clave2 === "") {
    return true;
        }  else {
            return false;
        }
    }

}
