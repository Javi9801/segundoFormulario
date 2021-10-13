<?php

class Alumno {
    private $nombre;
    private $apellidos;
    private $correo; 
    private $dni;
    private $fecha;


    public function __get($atributo){
        if(property_exists($this, $atributo)){
            return $this->$atributo;
        }
    }

    public function __set($atributo, $valor){
        if(property_exists($this, $atributo)){
            $this->$atributo = $valor;
        }
    }

    public function muestra(){
        print "<p>".$this->nombre." ".$this->apellidos." ".$this->dni."</p>";
    }

    public function __construct($nombre, $apellidos, $correo, $dni, $fecha){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->correo = $correo;
        $this->dni = $dni;
        $this->fecha = $fecha;
    }
}