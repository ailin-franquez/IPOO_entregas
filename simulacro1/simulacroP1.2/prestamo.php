<?php 
class prestamo{
    private $identificacion;
    private $fecha_otorgamiento;
    private $monto;
    private $cantidad_cuotas;
    private $taza_interes;
    private $arrayCuotas=[];
    private $objPersona;

    public function __construct($identificacion,$monto,$cantidad_cuotas,$taza_interes,$arrayCuotas,$objPersona){
        $this->identificacion=$identificacion;
        $this->fecha_otorgamiento=date("Y-m-d");
        $this->monto=$monto;
        $this->cantidad_cuotas=$cantidad_cuotas;
        $this->taza_interes=$taza_interes;
        $this->arrayCuotas=$arrayCuotas;
        $this->objPersona=$objPersona;
    }

    public function get_identificacion(){
        return $this->identificacion;
    }public function set_identificacion($var){
        $this->identificacion=$var;
    }

    public function get_fecha_otorgamiento(){
        return $this->fecha_otorgamiento;
    }public function set_fecha_otorgamiento($var){
        $this->fecha_otorgamiento=$var;
    }

    public function get_monto(){
        return $this->monto;
    }public function set_monto($var){
        $this->monto=$var;
    }

    public function get_cantidad_cuotas(){
        return $this->cantidad_cuotas;
    }public function set_cantidad_cuotas($var){
        $this->cantidad_cuotas=$var;
    }

    public function get_taza_interes(){
        return $this->taza_interes;
    }public function set_taza_interes($var){
        $this->taza_interes=$var;
    }

    public function get_arrayCuotas(){
        return $this->arrayCuotas;
    }public function set_arrayCuotas($var){
        $this->arrayCuotas=$var;
    }

    public function get_objPersona(){
        return $this->objPersona;
    }public function set_objPersona($var){
        $this->objPersona=$var;
    }

    public function __toString(){
        $aCuotas=$this->get_arrayCuotas();
        foreach($aCuotas as $indice){
            $cuotas.=$indice."\n";
        }

        $tex="\nidentificacion:".$this->get_identificacion()."\nfecha_otorgamiento:".$this->get_fecha_otorgamiento()."\nmonto:".$this->get_monto()."\ncantidad_cuotas:".$this->get_cantidad_cuotas() ;
        $tex.="\ntaza_interes:".$this->get_taza_interes()."\narrayCuotas:".$cuotas."\nobjPersona:".$this->get_objPersona()->__toString();
        return $tex;
    }

    private function  calcularInteresPrestamo($numCuota){//rescatar el numero de cuota del objeto cuota antes

    }
}
?>