<?php 
class cuota{
    private $numero;
    private $monto_cuota;
    private $monto_interes;
    private $cuota_pagada;//bool, si la cuota esta pagada o no
    //originalmente $cancelada

    public function __construct($numero,$monto_cuota,$monto_interes,$cuota_pagada){
        $this->numero=$numero;
        $this->monto_cuota=$monto_cuota;
        $this->monto_interes=$monto_interes;
        $this->cuota_pagada=$cuota_pagada;
    }

    public function get_numero(){
        return $this->numero;
    }public function set_numero($var){
        $this->numero=$var;
    }

    public function get_monto_cuota(){
        return $this->monto_cuota;
    }public function set_monto_cuota($var){
        $this->monto_cuota=$var;
    }

    public function get_monto_interes(){
        return $this->monto_interes;
    }public function set_monto_interes($var){
        $this->monto_interes=$var;
    }

    public function get_cuota_pagada(){
        return $this->cuota_pagada;
    }public function set_cuota_pagada($var){
        $this->cuota_pagada=$var;
    }


    public function __toString(){
        $bool=$this->get_cuota_pagada();
        if($bool){
            $cuotaPagada="pagada";
        }else{
            $cuotaPagada="cancelada";
        }

        $tex="\nnumero:".$this->get_numero()."\nmonto cuota:".$this->get_monto_cuota();
        $tex.="\nmonto interes:".$this->get_monto_interes()."\ncuota pagada:".$cuotaPagada;
        return $tex;
    }

    /** retorna el importe total de la cuota mas los intereses 
    * que deben ser aplicados
    */
    public function darMontoFinal(){
        $monto=$this->get_monto_cuota();
        $interes=$this->get_monto_interes();
        return $monto+$interes;
    }
}
?>
