<?php 
class aerolinea{
    private $identificacion;
    private $nombre;
    private $col_vuelos_programados;

    public function __construct($identificacion,$nombre){
        $this->identificacion=$identificacion;
        $this->nombre=$nombre;
        $this->col_vuelos_programados=[];
    }

    public function get_identificacion(){
        return $this->identificacion;
    }public function set_identificacion($var){
        $this->identificacion=$var;
    }

    public function get_nombre(){
        return $this->nombre;
    }public function set_nombre($var){
        $this->nombre=$var;
    }

    public function get_col_vuelos_programados(){
        return $this->col_vuelos_programados;
    }public function set_col_vuelos_programados($var){
        $this->col_vuelos_programados=$var;
    }

    public function __toString(){
        $array=$this->get_col_vuelos_programados();
        foreach($array as $indice){
            $cadena.=$indice."\n";
        }

        $tex="\nidentificacion:".$this->get_identificacion()."\nnombre:".$this->get_nombre() ;
        $tex.="\ncoleccion de vuelos programados:".$cadena;
        return $tex;
    }

    /** recibe por parámetro un destino junto a 
     * una cantidad de asientos libres y 
     * se debe retornar una colección
     * con los vuelos disponibles a ese destino. 
     * @param string $destino
     * @param int $cant_asi_libres
     * @param array $vuelos_disponibles
     */
    public function darVueloADestino($destino,$cant_asi_libres){
        $cole_vuelos=$this->get_col_vuelos_programados();
        $cant_col_vuelos=count($cole_vuelos);
        $vuelos_disponibles=[];
        for($i=0;$i<$cant_col_vuelos;$i++){
            $destino_vuelo=$cole_vuelos[$i]->get_destino();
            if($destino_vuelo==$destino && asignarAsientosDisponibles($cant_asi_libres)){
                $vuelos_disponibles[]=$cole_vuelos[$i];
            }
        }
        return $vuelos_disponibles;
        //asignarAsientosDisponibles($cant_asi_libres) metodo del objeto vuelo
    }

    /** que recibe como parámetro un vuelo,
     *  verifica que no se encuentre registrado 
     * ningún otro vuelo al mismo destino, 
     * en la misma fecha y con el mismo 
     * horario de partida.
     * El método debe retornar verdadero si la 
     * incorporación del vuelo se realizó 
     * correctamente y falso en caso contrario.
     * @param obj $vuelo
     * @return bool $comparacion
     */
    public function incorporarVuelo($vuelo_ing){
        $destino=$vuelo_ing->get_destino(); 
        $fecha=$vuelo_ing->get_fecha();
        $horario_partida=$vuelo_ing->get_hora_partida();
        
        $comparacion=false;

        $col_vuelos=$this->get_col_vuelos_programados();
        $cant_col=count($col_vuelos);
        for($i=0;$i<$cant_col;$i++){
            $des=$col_vuelos[$i]->get_destino();
            $fec=$col_vuelos[$i]->get_fecha();
            $hora=$col_vuelos[$i]->get_hora_partida();
            if($des ==$destino){
                if($fecha==$fec){
                    if($horario_partida == $hora){
                        $comparacion=true;
                    }
                }
            }
        }
        return $comparacion;

    }

    /** recibe por parámetro: la cantidad de asientos,
     * el destino y una fecha. El método realiza 
     * la venta con el primer vuelo encontrado a 
     * ese destino, con los asientos disponibles 
     * y en la fecha deseada. 
     * En la implementación debe invocar al método 
     * asignarAsientosDisponibles y retornar la 
     * instancia del vuelo asignado o null en caso 
     * contrario.
     * @param int $cant_asientos
     * @param string $destino
     * @param int $fecha
     * @return obj $vuelo 
     */
    public function venderVueloADestino($cant_asientos,$destino,$fecha){
        $vuelo=null;
        $col_vuelos=$this->get_col_vuelos_programados();
        $cant_col=count($col_vuelos);
        $i=0;
        $logic=false;
        while($i<$cant_col && !$logic){
            $des=$col_vuelos[$i]->get_destino();
            $fec=$col_vuelos[$i]->get_fecha();
            $asiento=$col_vuelos[$i]->get_asientos_disponibles();
            if( $destino==$des){
                if($fecha==$fec){
                    if($cant_asientos == $asiento){
                        $logic=true;
                        $vuelo=$col_vuelos[$i];
                    }
                }
            }
            $i++;
        }

        return $vuelo;
    }

    /**retorna el importe promedio recaudado por la aerolínea 
     * con cada uno de sus vuelos.
     * 
     */
    public function montoPromedioRecaudado(){
        $promedio=0;
        $array_promedio=[];
        $col_vuelos=get_col_vuelos_programados();
        foreach($col_vuelos as $vuelo){
            //
            $asientos_usados=$vuelo-> get_asientos_totales()- $vuelo-> get_asientos_disponibles();
            $asientos_usados=abs ($asientos_usados);
            for($i=0;$i<$asientos_usados;$i++){
                $promedio+=$vuelo->get_importe();
            }
            $res=$promedio/($i-1);
            $array_promedio[]=$res;
        }
        return $array_promedio;
    }
}
?>