<?php 
class persona{
    private $nombre;
    private $apellido;
    private $dni;
    private $direccion;
    private $mail;
    private $telefono;
    private $neto;

    public function __construct($nombre,$apellido,$dni,$direccion,$mail,$telefono,$neto){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->dni=$dni;
        $this->direccion=$direccion;
        $this->mail=$mail;
        $this->telefono=$telefono;
        $this->neto=$neto;
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

    public function get_dni(){
        return $this->dni;
    }public function set_dni($var){
        $this->dni=$var;
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

    public function get_neto(){
        return $this->neto;
    }public function set_neto($var){
        $this->neto=$var;
    }

    public function __toString(){
        $tex="\nnombre: ".$this->get_nombre()."\napellido:".$this->get_apellido()."\ndni:".$this->get_dni()."\ndireccion:".$this->get_direccion();
        $tex.="\nmail:".$this->get_mail()."\ntelefono:".$this->get_telefono()."\nneto:".$this->get_neto() ;
        return $tex;
    }
}
?>
