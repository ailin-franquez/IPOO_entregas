<?php
class cliente{
    private $nombre;
    private $apellido;
    private $estadoCliente;
    private $tipo;
    private $dni;

    public function __construct($nombre,$apellido,$estadoCliente,$tipo,$dni){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->estadoCliente=$estadoCliente;
        $this->tipo=$tipo;
        $this->dni=$dni;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($var){
        $this->nombre=$var;
    }

    public function getApellido(){
        return $this->apellido;
    }
    public function setApellido($var){
        $this->apellido=$var;
    }

    public function getEstadoCliente(){
        return $this->estadoCliente;
    }
    public function setEstadoCliente($var){
        $this->estadoCliente=$var;
    }

    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($var){
        $this->tipo=$var;
    }

    public function getDni(){
        return $this->dni;
    }
    public function setDni($var){
        $this->dni=$var;
    }

    public function __toString(){
        return "nombre:".$this->getNombre()."\napellido:".$this->getApellido()."\nestado del cliente:".$this->getEstadoCliente()."\ntipo:".$this->getTipo()."\nDNI:".$this->getDni()."\n";
    }
}