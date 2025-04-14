<?php
class moto{
    private $codigo;
    private $costo;
    private $añoFabricacion;
    private $descripción;
    private $incrementoAnual;//porcentaje
    private $activa; //bool //si la moto esta disponible o no

    public function __construct($codigo,$costo,$añoFabricacion,$descripción,$incrementoAnual,$activa){
        $this->codigo=$codigo;
        $this->costo=$costo;
        $this->añoFabricacion=$añoFabricacion;
        $this->descripción=$descripción;
        $this->incrementoAnual=$incrementoAnual;
        $this->activa=$activa;
    }

    public function getCodigo(){
        return $this->codigo;
    }
    public function setCodigo($var){
        $this->codigo=$var;
    }

    public function getCosto(){
        return $this->costo;
    }
    public function setCosto($var){
        $this->costo=$var;
    }

    public function getAñoFabricacion(){
        return $this->añoFabricacion;
    }
    public function setAñoFabricacion($var){
        $this->añoFabricacion=$var;
    }

    public function getDescripción(){
        return $this->descripción;
    }
    public function setDescripción($var){
        $this->descripción=$var;
    }

    public function getIncrementoAnual(){
        return $this->incrementoAnual;
    }
    public function setIncrementoAnual($var){
        $this->incrementoAnual=$var;
    }

    public function getActiva(){
        return $this->activa;
    }
    public function setActiva($var){
        $this->activa=$var;
    }

    public function darPrecioVenta(){
        if($this->getActiva()){
            $año=abs(2025-$this->getAñoFabricacion());
            $precio=$this->getCosto()+$this->getCosto()*($año*$this->getIncrementoAnual());
        }else{
            $precio=-1;
        }
        return $precio;
    }


    public function __toString(){
        if($this->getActiva()){
            $act="disponible";
        }else{
            $act="vendida";
        }

        $tex="Codigo:".$this->getCodigo()."\nCosto:".$this->getCosto()."\nAño de Fabricacion:".$this->getAñoFabricacion()."\ndescripción:".$this->getDescripción()."\nporcentaje de Incremento Anual:".$this->getIncrementoAnual()."\nestado de venta:".$act."\n";
        return $tex;
    }
}