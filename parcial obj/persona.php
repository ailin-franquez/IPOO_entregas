<?php 
class persona{
    private $nombre;
    private $apellido;
    private $direccion;
    private $mail;
    private $telefono;


    public function __construct($nombre,$apellido,$direccion,$mail,$telefono){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->direccion=$direccion;
        $this->mail=$mail;
        $this->telefono=$telefono;
    }

    public function get_nombre(){
        return $this->nombre;
    }public function set_nombre($var){
        $this->nombre=$var;
    }

    public function get_apellido(){
        return $this->apellido;
    }public function set_apellido($var){
        $this->apellido=$var;
    }

    public function get_direccion(){
        return $this->direccion;
    }public function set_direccion($var){
        $this->direccion=$var;
    }

    public function get_mail(){
        return $this->mail;
    }public function set_mail($var){
        $this-> mail=$var;
    }

    public function get_telefono(){
        return $this->telefono;
    }public function set_telefono($var){
        $this->telefono=$var;
    }

    public function __toString(){
        $tex="\nnombre: ".$this->get_nombre()."\napellido:".$this->get_apellido()."\ndireccion:".$this->get_direccion();
        $tex.="\nmail:".$this->get_mail()."\ntelefono:".$this->get_telefono();
        return $tex;
    }
}
?>
