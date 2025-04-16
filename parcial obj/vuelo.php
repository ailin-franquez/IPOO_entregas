<?php 
class vuelo{
    private $numero;
    private $importe;
    private $fecha;
    private $destino;
    private $hora_arribo;
    private $hora_partida;
    private $asientos_totales;
    private $asientos_disponibles;
    private $objPersona;

    public function __construct($numero,$importe,$fecha,$destino,$hora_arribo,$hora_partida,$asientos_totales,$asientos_disponibles,$objPersona){
        $this->numero=$numero;
        $this->importe=$importe;
        $this->fecha=$fecha;
        $this->destino=$destino;
        $this->hora_arribo=$hora_arribo;
        $this->hora_partida=$hora_partida;
        $this->asientos_totales=$asientos_totales;
        $this->asientos_disponibles=$asientos_disponibles;
        $this->objPersona=$objPersona;
    }
    public function get_numero(){
        return $this->numero;
    }public function set_numero($var){
        $this->numero=$var;
    }

    public function get_importe(){
        return $this->importe;
    }public function set_importe($var){
        $this->importe=$var;
    }

    public function get_fecha(){
        return $this->fecha;
    }public function set_fecha($var){
        $this->fecha=$var;
    }

    public function get_destino(){
        return $this->destino;
    }public function set_destino($var){
        $this->destino=$var;
    }

    public function get_hora_arribo(){
        return $this->hora_arribo;
    }public function set_hora_arribo($var){
        $this->hora_arribo=$var;
    }

    public function get_hora_partida(){
        return $this->hora_partida;
    }public function set_hora_partida($var){
        $this->hora_partida=$var;
    }

    public function get_asientos_totales(){
        return $this->asientos_totales;
    }public function set_asientos_totales($var){
        $this->asientos_totales=$var;
    }

    public function get_asientos_disponibles(){
        return $this->asientos_disponibles;
    }public function set_asientos_disponibles($var){
        $this->asientos_disponibles=$var;
    }

    public function get_objPersona(){
        return $this->objPersona;
    }public function set_objPersona($var){
        $this->objPersona=$var;
    }

    public function __toString(){
        $array=$this->get_();
        foreach($array as $indice){
            $cadena.=$indice."\n";
        }

        $tex="\n:".$this->get_();
        $tex.="\n:".$this->get_();
        return $tex;
    }

    /** que recibe por parámetros la cantidad de asientos 
     * que desean asignarse y de ser necesario actualizando
     *  la información del vuelo.
     * El método retorna verdadero en caso que la asignación 
     * puedo concretarse y falso en caso contrario.
     * @param int $cant_asientos
     * @return bool $res
     */
    public function asignarAsientosDisponibles($cant_asientos){
        $disponibles=$this->get_asientos_disponibles();
        $res=false;
        if($cant_asientos<=$disponible){
            $res=true;
        }
        return $res;
    }
}
?>