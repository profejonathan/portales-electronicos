<?php

$parametroPOST = json_decode(file_get_contents("php://input"));

$fecha = $parametroPOST->fecha;
$detalle = $parametroPOST->detalle;

$respusta = array(
    "Error" => "N"
);

echo( json_encode($respusta) );






?>