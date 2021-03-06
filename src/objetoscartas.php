<?php

include_once('conexionbd.php');

include_once('../vendor/autoload.php');
include_once('./clases/Carta.php');
use Moi\Clases\Carta;

$sentencia = $db->prepare("SELECT ca.`idcarta`, ca.`nombre`, fo.`direccion`, shi.`direccion`
,ma1.`direccion` ,ca.`cantmana1`,ma2.`direccion` ,ca.`cantmana2`,mainc.`direccion`, ca.`img`
, tip.`descripcion`, ca.`tipoespecifico`, ex.`direccion`, ca.`habilidad`, imgt.`direccion`
, ca.`textambiente`, ca.`fuerza`, ca.`resistencia`, ca.`artista`, ca.`numcoleccion`,ca.`colorbase`
,ca.`cantidad` 
FROM `cartas` ca
INNER JOIN `fondos` fo
ON ca.`idfondo`= fo.`idfondo`
INNER JOIN `fondos` shi
ON ca.`idshiny`= shi.`idfondo`
INNER JOIN `manas` ma1
ON ca.`idmana1`= ma1.`idmana`
INNER JOIN `manas` ma2
ON ca.`idmana2`= ma2.`idmana`
INNER JOIN `manas` mainc
ON ca.`idmanaincoloro`= mainc.`idmana`
INNER JOIN `tipos` tip     
ON ca.`idtipo`= tip.`idtipo`
INNER JOIN `expansiones` ex
ON ca.`idexpansion`= ex.`idexpansion`
INNER JOIN `imgtierras` imgt
ON ca.`idimgtierra`= imgt.`idimgtierra` "); 

$sentencia -> bind_result(
    $idcarta, $nombre ,$fondo, $shiny, $mana1 , $cantmana1 ,$mana2,  $cantmana2,
    $cantmanainc, $img ,$tipo, $tipoespecifico , $expansion ,$habilidad,  $imgtierra,
    $textambiente, $fuerza ,$resistencia, $artista , $numcoleccion, $colorbase, $cantidad
);

$sentencia -> execute();

while($sentencia->fetch()){
    $cartas[] = new Carta($idcarta, $nombre ,$fondo, $shiny, $mana1 , $cantmana1 ,$mana2,
    $cantmana2, $cantmanainc, $img ,$tipo, $tipoespecifico , $expansion ,$habilidad,
    $imgtierra, $textambiente, $fuerza ,$resistencia, 
    $artista , $numcoleccion, $colorbase, $cantidad);
}

$sentencia->close();    
$db->close();