<?php 
class aeropuerto{
    private $denominacion;
    private $direccion;
    private $col_aerolineas;

    public function __construct($deominacion,$direccion){
        $this->denominacion=$denominacion;
        $this->direccion=$direccion;
        $this->col_aerolineas=[] ;
    }

    public function get_denominacion(){
        return $this->denominacion;
    }public function set_denominacion($var){
        $this->denominacion=$var;
    }

    public function get_direccion(){
        return $this->direccion;
    }public function set_direccion($var){
        $this->direccion=$var;
    }

    public function get_col_aerolineas(){
        return $this->col_aerolineas;
    }public function set_col_aerolineas($array){
        $this->col_aerolineas=$array;
    }

    public function __toString(){
        $array=$this->get_col_aerolineas();
        foreach($array as $indice){
            $cadena.=$indice."\n";
        }

        $tex="\ndenominacion:".$this->get_denominacion()."\ndireccion:".$this->get_direccion() ;
        $tex.="\ncoleccion aerolineas: ".$cadena;
        return $tex;
    }

    /** recibe por parámetro una aerolínea y 
     * retorna todos los vuelos asignados a esa 
     * aerolínea.
     * @param obj $objAerolinea
     * @return $col_vuelos
     */
    public function retornarVuelosAerolinea($objAerolinea){
        return $objAerolinea->get_col_vuelos_programados();
    }

    /** recibe por parámetro la cantidad de asientos, 
     * una fecha y un destino y el aeropuerto realiza 
     * automáticamente la asignación al vuelo. 
     * Para la implementación de este método debe 
     * utilizarse uno de los métodos implementados
     *  en la clase Vuelo. 
     * @param int $cant_asientos
     * @param int $fecha
     * @param string $destino
     */
    public function ventaAutomatica($cant_asientos,$fecha,$destino){
        $col_vuelos=$this->get_col_aerolineas()->get_col_vuelos_programados();
        $cant_col=count($col_vuelos);
        $i=0;
        $logic=false;
        while($i<$cant_col && !$logic){
            $des=$col_vuelos[$i]->get_destino();
            $fec=$col_vuelos[$i]->get_fecha();
            if( $destino==$des){
                if($fecha==$fec){
                    if($col_vuelos[$i]->asignarAsientosDisponibles($cant_asientos)){
                        $logic=true;
                        $vuelo=$col_vuelos[$i];
                    }
                }
            }
            $i++;
        }
        return $vuelo;
    }

    /**  recibe por parámetro la identificación de una Aerolínea 
     * y retorna el promedio de lo recaudado por esa Aerolínea 
     * en ese Aeropuerto.
     * Para la implementación utilizar, si es posible,
     *  alguno de los métodos previamente implementado.
     * @param $identificacion
     * @return $promedio 
     */
    public function promedioRecaudadoXAerolinea($identificacion){
        $col_aerolineas=$this->get_col_aerolineas();
        $array_monto=[];
        foreach($col_aerolineas as $aerolinea){
            if($aerolinea->get_identificacion()){
                $array_monto[]=montoPromedioRecaudado();
            }
        }
        return $array_monto;
    }

}
?>