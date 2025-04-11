<?php
//include_once "cliente.php";
//include_once "moto.php";
class venta{
    private $numero; 
    private $fecha;
    private $cliente; 
    private $arrayMotos;
    private $precioFinal;

    public function __construct($numero,$fecha,$cliente){
        $this->numero=$numero;
        $this->fecha=$fecha;
        $this->cliente=$cliente;
        $this->arrayMotos=[];
        $this->precioFinal=0;
    }

    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($var){
        $this->numero=$var;
    }

    public function getFecha(){
        return $this->fecha;
    }
    public function setFecha($var){
        $this->fecha=$var;
    }

    public function getCliente(){
        return $this->cliente;
    }
    public function setCliente($var){
        $this->cliente=$var;
    }

    public function getArrayMotos(){
        return $this->arrayMotos;
    }
    public function setArrayMotos($var){
        $this->arrayMotos[]=$var;
    }

    public function getPrecioFinal(){
        return $this->precioFinal;
    }
    public function setPrecioFinal($var){
        $this->precioFinal=$var;
    }
    
    public function incorporarMoto($moto){
        //$tex="";
        if($this->cliente->getEstadoCliente()=="baja"){
            //$tex="no se puede realizar la venta porque el cliente esta dado de baja";
            $tex=-1;
        }else{
            $venta=$moto->darPrecioVenta();
            if($venta==-1){
                //$tex= "la moto no se encuentra disponible";
                $tex=0;
            }else{
                $this->setArrayMotos($moto);
                $moto->setActiva(false);
                $tex=$this->setPrecioFinal($this->getPrecioFinal()+$venta);
            }
        }
        return $tex;
    }

    public function __toString(){
        $noArray="";
        $cant=count($this->getArrayMotos());
        $array=$this->getArrayMotos();
        for($i=0;$i<$cant;$i++){
            $noArray.=$array[$i]->__toString()."\n";
        }

        return "\nnumero:".$this->getNumero()."\nfecha:".$this->getFecha()."\n\ncliente:\n".$this->getCliente()->__toString()."\nmotos vendidas:\n".$noArray."\nprecio final:".$this->getPrecioFinal()."\n";
    }
}
/*
$cliente= new cliente("arthur","morgan","activo","male",222200);
$moto1=new moto (332,12000,1982,"susuki",2,true);
$moto2=new moto (443,15000,1899,"mustang",5,true);
$venta=new venta(22,22.10,$cliente);
echo $venta->incorporarMoto($moto1);
echo $venta->incorporarMoto($moto2);
echo $venta->__tostring();
*/