<?php 
include_once "vuelo.php";
include_once "persona.php";
include_once "aeropuerto.php";
include_once "aerolineas.php";
$aerolinea=new aerolinea(2344,"aerolinea1");
$aerolinea2=new aerolinea(34355,"aerolinea2");

$vuelo1=new vuelo(12,44,45.6,"cancun",19,12,60,43);
$vuelo2=new vuelo(12,44,45.6,"tokio",20,12,60,43);
$vuelo3=new vuelo(12,44,45.6,"paris",18,11,60,43);
$vuelo4=new vuelo(12,44,45.6,"chicago",19,17,60,43);
$col_=[$vuelo1,$vuelo2];
$col_2=[$vuelo3,$vuelo4];
$aerolinea=set_col_vuelos_programados($col_);
$aerolinea2=set_col_vuelos_programados($col_2);

$aerolinea->ventaAutomatica(3,$fecha,"cancun");
//falto la consigna d promedio por monto que creo que era la 29.
//perdon profe
?>