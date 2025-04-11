<?php
class empresa{
    private $denominación;
    private $dirección;
    private $arrayClientes=[];
    private $arrayMotos=[];
    private $arrayVentas=[];

    public function __construct($denominación,$dirección,$arrayClientes,$arrayMotos,$arrayVentas){
        $this->denominación=$denominación;
        $this->dirección=$dirección;
        $this->arrayClientes=$arrayClientes;
        $this->arrayMotos=$arrayMotos;
        $this->arrayVentas=$arrayVentas;
    }

    public function getDenominación(){
        return $this->denominación;
    }
    public function setDenominación($var){
        $this->denominación=$var;
    }

    public function getDirección(){
        return $this->dirección;
    }
    public function setDirección($var){
        $this->dirección=$var;
    }

    public function getArrayClientes(){
        return $this->arrayClientes;
    }
    public function setArrayClientes($var){
        $this->arrayClientes[]=$var;
    }

    public function getArrayMotos(){
        return $this->arrayMotos;
    }
    public function setArrayMotos($var){
        $this->arrayMotos[]=$var;
    }

    public function getArrayVentas(){
        return $this->arrayVentas;
    }
    public function setArrayVentas($var){
        $this->arrayVentas[]=$var;
    }


    public function retornarMoto($codigoMoto){
        $array=$this->getArrayMotos();
        $cant=count($this->getArrayMotos());
        $logic=true;
        $i=0;
        while($i<$cant && $logic){
            if($array[$i]->getCodigo()==$codigoMoto){
                $logic=false;
                $moto=$array[$i];
            }
            $i++;
        }
        if($logic){
            $moto=-1;
        }
        return $moto;
    }

    public function registrarVenta($arrayCodigosMoto,$cliente){
        $cantM=count($this->getArrayMotos());
        $cant=count($arrayCodigosMoto);
        $motos=$this->getArrayMotos();

        $ventass=$this->getArrayVentas();
        $cantV=count($this->getArrayVentas());
        $ventas=new venta($cantV+1,23.11,$cliente);

        if($cliente->getEstadoCliente()=="baja"){
            //$tex="no se puede realizar la venta porque el cliente esta dado de baja";
            $tex=-1;
        }else{
            
            for($i=0;$i<$cant;$i++){
                for($j=0;$j<$cantM;$j++){
                    if($arrayCodigosMoto[$i]==$motos[$j]->getCodigo()){
                        $tex=$ventas->incorporarMoto($motos[$i]);
                    }
                }
                
                
            }
            
            $this->setArrayVentas($ventass[]=$ventas);
        }
        return $tex;
    }

    public function retornarVentasXCliente($tipo,$numDoc){
        $clientes=$this->getArrayClientes();
        $ventas=$this->getArrayVentas();
        $cant=count($ventas);
        $historial=[];
        for($i=0;$i<$cant;$i++){
            if($clientes[$i]->getTipo()==$tipo && $clientes[$i]->getDni()==$numDoc){
                $historial[]=$venta[$i];
            }
        }
        return $historial;
    }


    public function __toString(){
        $aMotos="";
        $cant=count($this->getArrayMotos());
        $array=$this->getArrayMotos();
        for($i=0;$i<$cant;$i++){
            $aMotos.=$array[$i]."\n";
        }

        $aClientes="";
        $cant=count($this->getArrayClientes());
        $array=$this->getArrayClientes();
        for($i=0;$i<$cant;$i++){
            $aClientes.=$array[$i]."\n";
        }

        $aVentas="";
        $cant=count($this->getArrayVentas());
        $array=$this->getArrayVentas();
        for($i=0;$i<$cant;$i++){
            $aVentas.=$array[$i]."\n";
        }

        return "\ndenominación:".$thi->getDenominación()."\ndirección:".$this->getDirección()."\ncolección de clientes:\n".$aClientes."\ncolección de motos:\n".$aMotos."\ncolección de ventas realizadas:\n".$aVentas;
    }
}