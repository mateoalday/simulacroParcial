<?php

include_once 'Cliente.php';
include_once 'Moto.php';
include_once 'venta.php';
include_once 'Empresa.php';

$objCliente1= new Cliente('mateo','alday',true,'dni',46179229);
$objCliente2 = new Cliente('mateioo', 'mememe', true, 'dni', 5445433);


$objMoto1 = new Moto(11 ,2230000,2022,'Benelli Imperiale 400', 85,true);
    $objMoto2 = new Moto(12 ,584000,2021, 'Zanella Zr 150 Ohc ', 70, true);
    $objMoto3 = new Moto(13 , 999900, 2023, 'Zanella Patagonian Eagle 250', 55, false);

    $empresa = new Empresa('alta gama', 'Av Argenetina 123', [$objCliente1, $objCliente2],  [$objMoto1, $objMoto2,$objMoto3],[]);

   
        echo $empresa;
   




