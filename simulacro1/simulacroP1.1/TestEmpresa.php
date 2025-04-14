<?php
include_once "cliente.php";
include_once "moto.php";
include_once "venta.php";
include_once "empresa.php";

//ALGORITMO
/*

    echo "ingrese nombre el clinte: ";
    $nom=trim(fgets(STDIN));
    echo "ingrese apellido: ";
    $ape=trim(fgets(STDIN));
    echo "ingrese estado del cliente: (baja/activo)";
    $estado=trim(fgets(STDIN));
    echo "ingrese el tipo: ";
    $tipo=trim(fgets(STDIN));
    echo "ingrese el dni: ";
    $dni=trim(fgets(STDIN));
*/

$cliente1=new cliente("mariano","mouglee",true,"dni",45979618);
$cliente2=new cliente("guillermo","nuñez",true,"dni",26960806);
$arrayClientes=[
    $cliente1,
    $cliente2,
];

$moto1=new moto(11,2230000,2022,"Benelli Imperiale 400 ",85,true);
$moto2=new moto(12,584000,2021,"Zanella Zr 150 Ohc",70,true);
$moto3=new moto(13,999900,2023,"Zanella Patagonian Eagle 250",55,false);
$arrayMotos=[
    $moto1,
    $moto2,
    $moto3,
];

$arrayVentas=[];
$empresa=new empresa("alta gama","Av. Argenetina 123",$arrayClientes,$arrayMotos,$arrayVentas);
$arrayCodigosMoto=[
    11,
    12,
    13,
];
echo "\n".$empresa->registrarVenta($arrayCodigosMoto,$cliente2);
echo "\n".$empresa->registrarVenta($arrayCodigosMoto=[0],$cliente2);
echo "\n".$empresa->registrarVenta($arrayCodigosMoto=[2],$cliente2);
echo "\n".$empresa->retornarVentasXCliente("dni",45979618);
echo "\n".$empresa->retornarVentasXCliente("dni",26960806);
//echo "\n".$empresa->__toString(); 