<?php

class Usuario{
    private $id;
    private $nombre;
    private $email;
    private $password;
    private $fechaRegistro;
    private $activo;

    public function __construct($id, $nombre, $email, $password, $fechaRegistro, $activo) {
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> email = $email;
        $this -> password = $password;
        $this -> fechaRegistro = $fechaRegistro;
        $this -> activo = $activo;
    }

//getters
    public function obtenerId(){
        return $this -> id;
    }

    public function obtenerNombre(){
        return $this -> nombre;
    }

    public function obtenerEmail(){
        return $this -> email;
    }

    public function obtenerPassword(){
        return $this -> password;
    }

    public function obtenerFechaRegistro(){
        return $this -> fechaRegistro;
    }

    public function estaActivo(){
        return $this -> activo;
    }


//setters
    public function cambiarNombre($nombre){
        $this -> nombre = $nombre;
    }

    public function cambiarEmail($email){
        $this -> nombre = $email;
    }

    public function cambiarPassword($password){
        $this -> nombre = $password;
    }

    public function cambiarActivo($activo){
        $this -> activo = $activo;
    }
    
}

?>